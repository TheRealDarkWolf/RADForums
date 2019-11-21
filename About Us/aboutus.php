<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>About us-RadForums</title>
        <link rel="stylesheet" href="aboutus.css">
        <link rel="icon" href="../images/logotitle.png" type="image/x-icon">
    </head>
        <?php require('../templates/header.php'); ?>
                <div class="container">
                    <h3>About Us</h3>
                    <p>
                                    As Mini-Project for Web Technologies-1,we propose to develop a unique
                                    academic resource forums site that allows students belonging to a given
                                    university to interact among themselves.<br/>The users can have academic
                                    discussions,post blogs,exam particulars,syllabus details,notes, preparation
                                    tips etc.,In addition to containing the usual features of a forum, it will serve
                                    as a one-stop destination for all kinds of notes required for various
                                    semesters.<br/><br/>
                                    This prevents the inconvenience of organising notes files in different
                                    Google Drive folders for different courses and gives every student a single
                                    source to easily access all the academic resources they’ll require.
                                    At RADForums, each teacher will be given an account for posting their
                                    presentations,handwritten notes and other material that can then be viewed
                                    by all the students of that branch.
                                    For each course there will be a dedicated webpage which displays all the
                                    uploaded files pertaining to that course.Such pages will be loaded with
                                    
                                    information that will aid students in preparing for Examinations-<br/>
                                    1.Syllabus details for the next test <br/>               
                                    2.Frequently asked questions in the exam<br/>
                                    3.Previous years’ question papers<br/>
                                    4.Name of the current Anchor and the material provided by the anchor
                                    and so on.<br/><br/>
                                    These details can be posted either by a teacher or a student with a good
                                    reputation in the forums or even the moderators of the website.
                                    Making all the information available in one site will prove very useful for
                                    students to learn a particular subject. Because the site works on an
                                    upvote/downvote rating system, users can access the most useful/accurate
                                    study material/tips/schedules easily.
                                    There are many other features that will come up on the site as depicted in
                                    the wireframes.
                                    <br/><br/>
                                    Why RADForums is unique?<br/><br/>
                                    1.With the forums site, students can stay updated on academics-related
                                    information from study material to exam notifications.<br/>
                                    2. Unlike other student forums, our forums site will be dedicated to
                                    providing students a single source for accessing all the academic
                                    resources they’ll need and get all their doubts clarified directly from the
                                    teachers, eliminating the need for multiple google drive links and mailing
                                    the teachers to get doubts clarified.<br/>
                                    3.When a user uploads a file,details regarding source,subject it is related
                                    to,year in which the material was prepared etc. will be collected.This helps
                                    in filtering of files and can also can relieve students of the efforts to check
                                    multiple WhatsApp groups/Google Drive folders for the most relevant
                                    notes.<br/>
                                    
                                    4. A comment system under each file will allow the students to get their
                                    doubts cleared quickly and easily and will also serve as an additional
                                    resource to learn from doubts that other students might have had.
                                    5. The rating system will help to provide students with the most useful/
                                    accurate resources preventing the upload system from being abused.<br/>        
                        </p>
                    </br>                                       
                </div>
        <?php require('../templates/footer.php'); ?>
        <script>
const logout=document.querySelector('#logout');
var id;
logout.addEventListener('click', (e) => {
    e.preventDefault();
    auth.signOut().then(() =>{
        console.log('user signed out');
    })
});

//Login, logout and Update the username in search bar

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
        </script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>