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

auth.onAuthStateChanged(user =>{
    if(user){
        function renderUser(doc){
            const user=document.querySelector('#sb-user');
            user.textContent=doc.data().username;
        }
        //var user-email=window.localStorage.getItem('user')
         db.collection('users').where('email','==', window.localStorage.getItem('user')).get().then(snapshot =>{
            snapshot.docs.forEach(doc=>{
                renderUser(doc);
            });
        });        
    }
    /*
    else{
        window.location.assign("../index.php")
    }
    */
});