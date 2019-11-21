<div id="bottompage">
                    <p>Switch theme:</p>
                    <div class="redirects" id="icons">
                        <a href=""><i class="fa fa-facebook-f fa-2x"></i></a>
                        <a href=""><i class="fa fa-github fa-2x"></i></a>
                        <a href=""><i class="fa fa-envelope fa-2x"></i></a>
                    </div>
                    <div class="redirects" id="tc">
                        <a href="">Terms & Conditions</a>
                        <a href="">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </div>
               <!-- The core Firebase JS SDK is always required and must be listed first -->
        <script src="https://www.gstatic.com/firebasejs/7.3.0/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.3.0/firebase-auth.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.3.0/firebase-firestore.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.3.0/firebase-storage.js"></script>

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
            const storage=firebase.storage();
        </script>
        <script>
            var preloader=document.getElementById("loader");
            function loading(){
                preloader.style.display='none';
            }
            setTimeout(loading,1500);
        </script>
