// signin
const loginForm= document.querySelector('#LoginForm');
loginForm.addEventListener('submit', (e) =>{
    e.preventDefault();
    const email= loginForm['email'].value;
    const password = loginForm['psw'].value;

    auth.signInWithEmailAndPassword(email, password).then(cred =>{
        //console.log(cred.user.email);
        //var user-email=window.localStorage.getItem('user')
        /* db.collection('users').where('email','==', window.localStorage.getItem('user')).get().then(snapshot =>{
            snapshot.docs.forEach(doc=>{
                window.localStorage.setItem('user', doc.data().username);
            });
        }); */
        window.localStorage.setItem('user', cred.user.email);
        window.location.assign("../Home Page/homepage2.html");
    })
})

//on login only take in email and cross check later? or store everything in json stringify
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