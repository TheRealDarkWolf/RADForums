<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>My Profile-RadForums</title>
        <link rel="stylesheet" href="profile.css">
        <link rel="icon" href="../images/logotitle.png" type="image/x-icon">
    </head>
        <?php require('../templates/header.php'); ?>
        <div class="container">
            <h3> My Profile </h3>
            <div id="profile-top">
                <div id="img"></div>
                <div>
                <p id="usern"></p>
                <p id="SRN"></p>
                </div>
            </div>
            <div id="profile-bottom">
                <p class="label">Name:</p>&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;
                <p id="myname" class="value"></p><br/>
                <p class="label">Email:</p>&emsp;&emsp;&emsp;&emsp;&emsp;
                <p id="email" class="value"></p><br/>
                <p class="label">Branch:</p>&emsp;&emsp;&emsp;&emsp;
                <p id="branch" class="value"></p><br/>
                <p class="label">Graduating:</p>&nbsp;&nbsp;&nbsp;
                <p id="gyear" class="value"></p><br/>
                <p class="label">University:</p>&emsp;&emsp;
                <p id="university" class="value"></p><br/>
            </div>

            <form class="admin-actions admin" style="margin: 40px auto; max-width:300px;">
                <input type="email" placeholder="User email" id="admin-email" required /><br/>
                <button class="btn">Make admin</button>
        </div>
        <?php require('../templates/footer.php'); ?>
        <script src="profile.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>