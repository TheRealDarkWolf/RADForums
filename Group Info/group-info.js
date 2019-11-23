const memlist=document.querySelector("#member-list");
const adminItems = document.querySelectorAll('.admin');
function renderUser(doc){
    let li=document.createElement('li');
    li.setAttribute("class", "list-group-item list-group-item-light")
    let username=document.createElement('span');
    let name=document.createElement('span');
    let email=document.createElement('span');
    let status=document.createElement('span');
    status.setAttribute("id", "status");
    li.setAttribute('data-id',doc.id);
    username.textContent=doc.data().username;
    email.textContent=doc.data().email;
    name.textContent=doc.data().firstname + " " + doc.data().lastname;
    status.textContent=doc.data().status;

    li.append(username);
    li.append(name);
    li.append(email);
    li.append(status);

    memlist.appendChild(li);

}
function updateUser(doc){
    stat=document.getElementById("status");
    stat.textContent=doc.data().status;
}

db.collection('users').orderBy('status').onSnapshot(snapshot=>{
    let changes=snapshot.docChanges();
    changes.forEach(change=>{
        if(change.type=='added'){
            renderUser(change.doc);
        }else if (change.type=='removed'){
            let li=memlist.querySelector('[data-id=' +change.doc.id +']');
            memlist.removeChild(li);
        }else if (change.type == 'modified'){
            updateUser(change.doc);
        }
    });
});


const logout=document.querySelector('#logout');
var id;
logout.addEventListener('click', (e) => {
    e.preventDefault();
    auth.signOut().then(() =>{
        console.log('user signed out');
    })
});

//Login, logout and Update the username in search bar
const setupUI = (user) =>{
    if(user){
        if(user.admin){
            adminItems.forEach(item => item.removeAttribute("class"));
        }
    } else{
        adminItems.forEach(item => item.style.display = "none");
    }
}

auth.onAuthStateChanged(user =>{
    if(user){
        user.getIdTokenResult().then(idTokenResult => {
            user.admin=idTokenResult.claims.admin;
            setupUI(user);
        })    
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
        setupUI(user);
        console.log("setting offline");
        db.collection('users').doc(id).update({
            status:"offline"
        });   
        setTimeout(function(){ window.location.assign("../index.php") },2000);
    }
});
 