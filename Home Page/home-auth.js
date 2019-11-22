
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
        setTimeout(function(){ window.location.assign("../index.php") },2000);
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

/*loading the recent files in the divbox
function uploadview(subject,filename,dllink){
    var divbox=document.getElementsByClassName("upload-container")[0];
    let div=document.createElement('div');
    div.setAttribute("class","card");
    let div1=document.createElement('div');
    div1.setAttribute("class","card-header");
    let div2=document.createElement('div');
    div2.setAttribute("class","card-body");
    let p1=document.createElement('p');
    p1.setAttribute("class","card-text");
    let p2=document.createElement('p');
    p2.setAttribute("class","card-text");
    let a1=document.createElement('a');
    a1.setAttribute("class", "btn btn-primary");
    a1.textContent="View File";
    let a2=document.createElement('a');
    a2.setAttribute("class", "btn btn-primary");
    a2.textContent="Download";
    div1.textContent=subject;
    div2.innerHTML="<h5 class='card-title'>"+filename+"</h5>";
    p2.textContent="Uploaded By: Danish Ebadulla";
    p1.textContent="0 minutes ago"
    p1.setAttribute("style","float:right");
    a1.setAttribute("href",dllink);
    a2.setAttribute("href",dllink);
    div.append(div1);
    div2.append(p1);
    div2.append(p2);
    div2.append(a1);
    div2.append(a2);
    div.append(div2);
    divbox.append(div);
}

var storageRef=storage.ref();
var arr=[];
storageRef.child("pdfs/UE18CS201").list({ maxResults:3}).then(function(res){res.items.forEach(function(itemref){itemref.getDownloadURL().then(function(url){arr.push(url)}).then(function(){
storageRef.child("pdfs/UE18CS201").list({maxResults:3}).then(function(res){
    res.items.forEach(function(itemref){
        var dl=arr.pop();
        console.log(dl);
        uploadview("UE18CS201",itemref.name.substring(0,itemref.name.length-4),dl);
    })
})})})});
*/
