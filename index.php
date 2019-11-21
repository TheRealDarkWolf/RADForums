<html>
    <head>
        <title>Login-RADForums</title>
        <link rel="stylesheet" href="Login Page/logincss.css">
        <link rel="icon" href="images/logotitle.png" type="image/x-icon">
    </head>
    <body>
        <div class="container">
            <div id="col" style="float:left; background:white; opacity:0.7;">
                <h1>RAD</h1>
                <div id="left-text" align="left">
                    <h1>Welcome to RADForums</h1>
                    <h3>Your classmates are closer than you think</h3>
                    <p>Dont have the correct study material?</p>
                    <p>Want to get doubts clarified quickly?</p>
                    <p>Need all the notes in one place?</p><br><br>
                    <p id="then">Then look no further, this is the place for you</p>
                </div>
            </div>
            <div id="col" style="float:right; background:coral; opacity:0.9;">
                <div class="login-box">
                    <h1>Login</h1>
                    <form id="LoginForm">
                        <div class="textbox">
                            <i class="fa fa-user"></i>
                            <input type="text" placeholder="Email" id="email" name="email" value="">
                        </div>

                        <div class="textbox">
                            <i class="fa fa-lock"></i>
                            <input type="password" placeholder="Password" id="psw" name="psw" value="">
                        </div>

                        <input class="button" type="submit" name="Signin" value="Sign in">  
                    </form>
                    <p>Dont have an account?<a href="Signup/signup.html">Sign up</a></p>
                </div>
            </div>
        </div>
        <!-- The core Firebase JS SDK is always required and must be listed first -->
        <script src="https://www.gstatic.com/firebasejs/7.3.0/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.3.0/firebase-auth.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.3.0/firebase-firestore.js"></script>

        <!-- TODO: Add SDKs for Firebase products that you want to use
        https://firebase.google.com/docs/web/setup#available-libraries -->
        <script src="https://www.gstatic.com/firebasejs/7.3.0/firebase-analytics.js"></script>
                    
        <script>
            // Your web app's Firebase configuration
            var firebaseConfig = {
                apiKey: "AIzaSyCQ2E0UUN0VHrsDRsIkRa7b5dnsomqaxWg",
                authDomain: "radforums-420ez.firebaseapp.com",
                databaseURL: "https://radforums-420ez.firebaseio.com",
                projectId: "radforums-420ez",
                storageBucket: "radforums-420ez.appspot.com",
                messagingSenderId: "308327911724",
                appId: "1:308327911724:web:4c2c2ca9a2b2574a985c89",
                measurementId: "G-WDQMS6T904"
            };
            // Initialize Firebase
            firebase.initializeApp(firebaseConfig);
            firebase.analytics();

            //make auth and firestore references
            const auth=firebase.auth();
            const db=firebase.firestore();
        </script>
        <script src="login-auth.js"></script>
    </body>
</html>