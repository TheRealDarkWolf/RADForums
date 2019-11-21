function thread(){
    var sub=document.getElementById("field");
    var ele=sub.value;
    document.getElementById("field").value ="";
    }
function cadd()
{
    var x=document.getElementById("comment").value;
    var node = document.createElement("p");
    var doc=document.getElementById("od");
    doc.insertBefore(node,doc.childNodes[0]);
    var n = document.getElementById("od").firstChild;
    var d= new Date();
    var minutes=d.getMinutes();
    var date=d.getDate();
    var hours=d.getHours();
    var month=d.getMonth();
    var year=d.getFullYear();
    n.innerHTML="<h4>By Krishna.S   at "+hours+":"+minutes+","+date+"-"+month+"-"+year+"<br/></h4>"+"<h5>"+x+"</h5>";                
    document.getElementById("comment").value="";
    $("#comm").hide();
}


var d= new Date();
var minutes=d.getMinutes();
var date=d.getDate();
var hours=d.getHours();
var month=d.getMonth();
var year=d.getFullYear();
document.getElementById("changedate").innerHTML = hours+":"+minutes+"   "+date+"-"+month+"-"+year;
$(document).ready(function(){ 
$("#comm").hide();
$("#show").click(function(){
$("#comm").show();
});
});
function up()
{
    var x=document.getElementById("count");
    y=parseInt(x.innerHTML);
    y=y+1;
    x.innerHTML=y+" -score ";
}
function down()
{
    var x=document.getElementById("count");
    y=parseInt(x.innerHTML);
    y=y-1;
    x.innerHTML=y+" -score ";
}
function comment()
{
    var x=document.getElementById("c");
    y=parseInt(x.innerHTML);
    y=y+1;
    x.innerHTML=y+" -comments";
}


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
        function renderUser(doc){
            const user=document.querySelector('#sb-user');
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
