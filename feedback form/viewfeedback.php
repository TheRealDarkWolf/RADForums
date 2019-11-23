<?php
  include('../templates/db_connect.php');
  //write query for all feedbacks
  $sql = 'SELECT * FROM feedback';

  //make query and get result
  $result = mysqli_query($conn, $sql);
  //fetch resulting rows in an array
  $feedback=mysqli_fetch_all($result,MYSQLI_ASSOC);

  mysqli_free_result($result);
  mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>View Feedbacks-RadForums</title>
        <link rel="stylesheet" href="feedback.css">
        <link rel="icon" href="../images/logotitle.png" type="image/x-icon">
    </head>
    <?php require('../templates/header.php'); ?>
        <div class="container">
            <h3>Feedback</h3>
            <?php foreach($feedback as $feed){ ?>
                <div class="card">
                    <h5 class="card-header">Submitted on: <?php echo htmlspecialchars($feed['created_at']); ?></h5>
                    <div class="card-body">
                        <p class="card-text">General User Experience: <?php echo htmlspecialchars($feed['ux']); ?></p>
                        <p class="card-text">Usefulness in academics: <?php echo htmlspecialchars($feed['academics']); ?></p>
                        <p class="card-text">Content relevance: <?php echo htmlspecialchars($feed['content']); ?></p>
                        <p class="card-text">Connectivity: <?php echo htmlspecialchars($feed['connect']); ?></p>
                        <p class="card-text">General feedback: <?php echo htmlspecialchars($feed['gen']); ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>

        <?php require('../templates/footer.php'); ?>
        <script src="feedback.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>