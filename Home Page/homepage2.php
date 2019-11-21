<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Home-RadForums</title>
        <link rel="stylesheet" href="homepage2.css">
        <link rel="icon" href="../images/logotitle.png" type="image/x-icon">
    </head>
    <?php require('../templates/header.php'); ?>
        <div id="row-1">
                    <div id="r1-col-2">
                        <div id="upcom-events">
                            <h3>Upcoming events</h3>
                        </div>
                        <div id="upload-files">    
                            <h3>Add a new document to the forums</h3>
                            <center>
                                <select size="1" id="upload-sub" name="subject">
                                    <option value="2020">UE18CS201</option>
                                    <option value="2021">UE18CS202</option>
                                    <option value="2022">UE18CS203</option>
                                    <option value="2023">UE18CS204</option>
                                    <option value="2023">UE18CS205</option>        
                                </select>
                                <progress value="0" max="100" id="uploader">0%</progress>
                                <input type="file" style="margin:10px 50px"  value="upload" id="fileButton" />
                            </center>
                        </div>
                    </div>
            
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img class="d-block w-100" src="image1c.jpg" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                        <h5>All the resources you'll ever need</h5>
                                        <p>Filtered by subjected and curated just for you</p>
                                </div>
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="image3c.jpg" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                        <h5>Interact with the community</h5>
                                        <p>Gets your doubts intantly clarified</p>
                                </div>
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="image2c.jpg" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                        <h5>Become the most popular user</h5>
                                        <p>Upload material to gain upvotes and climb up the ladder of democracy</p>
                                </div>
                              </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>


                </div>
                <div id="row-2">
                    <div id="popular">
                        <h4>Popular contributors of the week</h4>
                    </div>
                    <div id="gd-upload">
                        <h3>LATEST GENERAL DISCUSSION THREADS</h3>
                        <div class="upload-container">
                            <div class="card">
                                <div class="card-header">
                                    Featured
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text" style="float:right">23 minutes ago</p>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">View File</a>
                                    <a href="#" class="btn btn-primary">Download</a>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    Featured
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text" style="float:right">23 minutes ago</p>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">View File</a>
                                    <a href="#" class="btn btn-primary">Download</a>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    Featured
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text" style="float:right">23 minutes ago</p>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">View File</a>
                                    <a href="#" class="btn btn-primary">Download</a>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
                <div id="row-3">
                    <div id="forum-stat">
                        <h4>FORUM STATISTICS</h4>
                        <div id="total-user">
                            <h4>Total users</h4>
                        </div>
                        <div id="total-post">
                            <h4>Total posts</h4>
                        </div>
                    </div>
                    <div id="online-users">
                        <h4>Users online in the past 24 hours</h4>
                    </div>
                </div>
        <?php require('../templates/footer.php'); ?>
        <script src="home-auth.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>