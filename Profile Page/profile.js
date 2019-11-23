const adminItems = document.querySelectorAll('.admin');
//add admin cloud function
const adminForm = document.querySelector('.admin-actions');
adminForm.addEventListener('submit',(e)=>{
    e.preventDefault();
    const adminEmail= document.querySelector('#admin-email').value;
    const addAdminRole = functions.httpsCallable('addAdminRole');
    addAdminRole({ email: adminEmail}).then(result =>{
        console.log(result);
    })
})



const logout=document.querySelector('#logout');
var id;
logout.addEventListener('click', (e) => {
    e.preventDefault();
    auth.signOut().then(() =>{
        console.log('user signed out');
    })
});

const setupUI = (user) =>{
    if(user){
        if(user.admin){
            adminItems.forEach(item => item.removeAttribute("class"));
        }
    } else{
        adminItems.forEach(item => item.style.display = "none");
    }
} 

//Login, logout and Update the username in search bar

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


//Add profile details into page
function renderprofile(doc){
    myname=document.getElementById('myname');
    username=document.getElementById('usern');
    university=document.getElementById('university');
    email=document.getElementById('email');
    gyear=document.getElementById('gyear');
    branch=document.getElementById('branch');
    srn=document.getElementById('SRN');
    myname.textContent=doc.data().firstname + " " + doc.data().lastname;
    university.textContent=doc.data().university;
    gyear.textContent=doc.data().gyear;
    email.textContent=doc.data().email;
    branch.textContent=doc.data().branch;
    srn.textContent=doc.data().srn;
    username.textContent=doc.data().username;
}

db.collection('users').where('email','==',window.localStorage.getItem('user')).get().then(snapshot=>{
    snapshot.docs.forEach(doc=>{
        renderprofile(doc);
    })
});