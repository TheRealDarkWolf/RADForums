
<?php
    include('../templates/db_connect.php');

    if(isset($_POST['submit'])){
        $ux= $_POST['ux'];
        $use= $_POST['use'];
        $rel= $_POST['rel'];
        $con= $_POST['con'];
        $gen= $_POST['gen'];

        $sql="INSERT INTO feedback(ux,academics,content,connect,gen) VALUES('$ux','$use','$rel','$con','$gen')";

        if(mysqli_query($conn, $sql)){
            header('Location: feedback.php');
        }else{
            echo 'query error:' . mysqli_error($conn);
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Feedback Form-RadForums</title>
        <link rel="stylesheet" href="feedback.css">
        <link rel="icon" href="../images/logotitle.png" type="image/x-icon">
    </head>
        <?php require('../templates/header.php'); ?>
            <div class="container">
                <h3>Feedback Form</h3>                    
                <div id="fbform">
                        <form action="feedback.php" method="POST" id="ff">
                            <b>Please provide a honest feedback of the site</b>
                            <br><br>
                            <label>General User Experience</label>&emsp;
                            <input type="radio" value="1" name="ux">1
                            &nbsp;
                            <input type="radio" value="2" name="ux">2
                            &nbsp;
                            <input type="radio" value="3" name="ux">3
                            &nbsp;
                            <input type="radio" value="4" name="ux">4
                            &nbsp;
                            <input type="radio" value="5" name="ux">5
                            &nbsp;
                            <br><br>
                            <label>Usefulness in academics</label>&emsp;
                            <input type="radio" value="1" name="use">1
                            &nbsp;
                            <input type="radio" value="2" name="use">2
                            &nbsp;
                            <input type="radio" value="3" name="use">3
                            &nbsp;
                            <input type="radio" value="4" name="use">4
                            &nbsp;
                            <input type="radio" value="5" name="use">5
                            &nbsp;
                            <br><br>
                            <label>Content Relevance</label>&emsp;&nbsp;&emsp;&emsp;&nbsp;
                            <input type="radio" value="1" name="rel">1
                            &nbsp;
                            <input type="radio" value="2" name="rel">2
                            &nbsp;
                            <input type="radio" value="3" name="rel">3
                            &nbsp;
                            <input type="radio" value="4" name="rel">4
                            &nbsp;
                            <input type="radio" value="5" name="rel">5
                            &nbsp;
                            <br><br>
                            <label>Connectivity</label>&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;
                            <input type="radio" value="1" name="con">1
                            &nbsp;
                            <input type="radio" value="2" name="con">2
                            &nbsp;
                            <input type="radio" value="3" name="con">3
                            &nbsp;
                            <input type="radio" value="4" name="con">4
                            &nbsp;
                            <input type="radio" value="5" name="con">5
                            &nbsp;
                            <br><br>
                            General Feedback(With in 50 words):
                            <br>
                            <textarea maxlength="50" name="gen" rows="3" cols="45" placeholder="Enter feedback"></textarea>
                            <br>
                            <input type="submit" value="Submit" style="margin:10px 120px"  name="submit" class="btn btn-primary">
            
                        </form>
                    
                </div>
            </div>
            <?php require('../templates/footer.php'); ?>
            <script src="feedback.js"></script>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        </body>
    </html>