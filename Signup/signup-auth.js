//signup
const signupForm = document.querySelector("#signup-form")
signupForm.addEventListener('submit', (e) => {
    e.preventDefault();
     //get user info
    var e =document.getElementById("uni");
    var f =document.getElementById("branch");
    var g= document.getElementById("gyear");
    db.collection('users').add({
        firstname: signupForm.fname.value,
        lastname: signupForm.lname.value,
        username: signupForm.username.value,
        university: e.options[e.selectedIndex].text,
        branch: f.options[f.selectedIndex].text,
        gyear: g.options[g.selectedIndex].text,
        email: signupForm.email.value,
        srn: signupForm.srn.value,
        status:"offline"
    });

    const email= signupForm['email'].value;
    const password=signupForm['pword'].value;

     //signup the user
    auth.createUserWithEmailAndPassword(email, password).then(cred =>{
        console.log(cred);
        window.location.assign("../index.php");
    });
})



/*
const logout=document.querySelector('#logout')
logoout.addEventListener('click', (e) => {
    e.preventDefault();
    auth.signOut().then() =>{
        console.log('user signed out')
    }
})

const loginForm= document.querySelector('#login-form');
loginForm.addEventListener('submit' (e) =>{
    g.preventDefault();
    const email= loginForm['login-email'].value;
    const password = loginForm['login-password'].value;

    auth.signInWithEmailAndPassword(email, password).then(cred =>{
        console.log(cred.user);
        window.location.assign("../Home Page/homepage2.php");
    })
})


*/