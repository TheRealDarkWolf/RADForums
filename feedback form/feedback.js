const adminItems = document.querySelectorAll('.admin');

const logout=document.querySelector('#logout');
logout.addEventListener('click', (e) => {
    e.preventDefault();
    auth.signOut().then(() =>{
        console.log('user signed out');
        window.location.assign("../index.php");
    })
});

//const user=document.querySelector('#sb-user');

 /*
 //listening to auth status
 auth.onAuthStateChanged(user =>{
    console.log(user)
 })
 */ 
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
 