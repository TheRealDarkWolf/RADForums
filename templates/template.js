//Firebase Sign out listener

const logout=document.querySelector('#logout');
var id;
logout.addEventListener('click', (e) => {
    e.preventDefault();
    auth.signOut().then(() =>{
        console.log('user signed out');
    })
});

//Firebase Auth Change listener for both log in and log out

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


//

