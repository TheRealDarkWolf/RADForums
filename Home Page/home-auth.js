const logout=document.querySelector('#logout');
var id;
logout.addEventListener('click', (e) => {
    e.preventDefault();
    auth.signOut().then(() =>{
        console.log('user signed out');
    })
});


auth.onAuthStateChanged(user =>{
    if(user){
        const user=document.querySelector('#sb-user');
        function renderUser(doc){
            //const user=document.querySelector('#sb-user');
            user.textContent=doc.data().username;
            id=doc.id;
            db.collection('users').doc(id).update({
                status:"online"
            });
        }
        //var user-email=window.localStorage.getItem('user')
         db.collection('users').where('email','==', window.localStorage.getItem('user')).get().then(snapshot =>{
            snapshot.docs.forEach(doc=>{
                renderUser(doc);
            });
        });        
    }
    else{
        console.log("setting offline");
        db.collection('users').doc(id).update({
            status:"offline"
        });   
        setTimeout(function(){ window.location.assign("../Login Page/login.html") },2000);
    }
});
 

//File upload
var uploader=document.getElementById("uploader");
var fileButton=document.getElementById("fileButton");

fileButton.addEventListener('change' , function(e){
    var file=e.target.files[0];
    var f =document.getElementById("upload-sub");
    var storageRef=storage.ref('pdfs/'+f.options[f.selectedIndex].text+"/"+file.name);
    var task=storageRef.put(file);

    task.on('state_changed',
        function progress(snapshot){
            var percentage=(snapshot.bytesTransferred/snapshot.totalBytes)*100;
            uploader.value=percentage;
            switch (snapshot.state){
                case firebase.storage.TaskState.PAUSED:
                    console.log('Upload is paused');
                    break;
                case firebase.storage.TaskState.RUNNING:
                    console.log('Upload is running');
                    break;
            }
        },
        function error(err){

        },

        function complete(){
            window.location.reload();
        }
    );
});

//loading the recent files in the divbox
function uploadview(subject,filename,dllink){
    //var divbox=document.getElementById("upload-container");
    var div=$(document.createElement('div'));//let div=document(document.createElementElement('div');
    div.attr("class","card")//div.setAttribute("class","card");
    div1=$(document.createElement('div'));//let div1=document(document.createElementElement('div');
    div1.attr("class","card-header");//div1.setAttribute("class","card-header");
    var div2=$(document.createElement('div'));  //let div2=document(document.createElementElement('div');
    div2.attr("class","card-body");//div2.setAttribute("class","card-body");
    let p1=$(document.createElement('p'))//let p1=document(document.createElementElement('p');
    p1.attr("class","card-text");//p1.setAttribute("class","card-text");
    let p2=$(document.createElement('p'))//let p2=document(document.createElementElement('p');
    p2.attr("class","card-text");//p2.setAttribute("class","card-text");
    let a1=$(document.createElement('a'));//let a1=document(document.createElementElement('a');
    a1.attr("class", "btn btn-primary");//a1.setAttribute("class", "btn btn-primary");
    a1.text('View File');//a1.textContent="View File";
    let a2=$(document.createElement('a'));//let a2=document(document.createElementElement('a');
    a2.attr("class", "btn btn-primary");//a2.setAttribute("class", "btn btn-primary");
    a2.text('Download');//a2.textContent="Download";
    div1.text(subject);//div1.textContent=subject;
    div2.html("<h5 class='card-title'>"+filename+"</h5>")//div2.innerHTML="<h5 class='card-title'>"+filename+"</h5>";
    p2.text("Uploaded By: Danish Ebadulla");//p2.textContent="Uploaded By: Danish Ebadulla";
    p1.text("0 minutes ago")//p1.textContent="0 minutes ago"
    p1.attr("style","float:right");//p1.setAttribute("style","float:right");
    a2.attr("href",dllink);//a2.setAttribute("href",dllink);
    div.append(div1);
    div2.append(p1);
    div2.append(p2);
    div2.append(a1);
    div2.append(a2);
    div.append(div2);
    $('#upload-container').append(div);
}

var storageRef=storage.ref();
var arr=[];
storageRef.child("pdfs/UE18CS201").list({ maxResults:3}).then(function(res){res.items.forEach(function(itemref){itemref.getDownloadURL().then(function(url){arr.push(url)})})});
storageRef.child("pdfs/UE18CS201").list({maxResults:3}).then(function(res){
    res.items.forEach(function(itemref){
        var dl=arr.pop();
        //console.log(dl);
        uploadview("UE18CS201",itemref.name.substring(0,itemref.name.length-4),dl);
    })
});