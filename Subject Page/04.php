<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!--<script src="https://kit.fontawesome.com/6d93c457af.js" crossorigin="anonymous"></script>-->
        <title>WT-RADForums</title>
        <link rel="stylesheet" href="subject-page.css">
        <link rel="icon" href="../images/logotitle.png" type="image/x-icon">
    </head>
    <?php require('../templates/header.php'); ?>
            <h1 id="subject-title">Web Technologies-UE18CS204</h1>
            <div class="container">
                <div class="left-container">
                    <div id="info-block">
                    <h3>IMPORTANT DATES</h3>
                        <p>ISA-1: Completed in September</p>
                        <p>ISA-2: Completed on 8 November</p>
                        <p>ESA: To begin on 27 November</p>
                        <p>ASSIGNMENT WEEK: 17 November to 23 November</p>
                    </div>
                    <div class="thread uploads">
                        <h3>LATEST UPLOADS IN UE18CS204</h3>
                        <div class="upload-container" id="upload-container">
                        </div>    
                    </div>
                    <div class="thread uploads">
                        <h3>LATEST THREADS ON UE18CS204</h3>
                        <div class="upload-container">
                            <div class="card">
                                <div class="card-header">
                                    UE18CS201 General Thread
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">What are the grading criteria for the DML Assignment?</h5>
                                    <p class="card-text" style="float:right">23 minutes ago</p>
                                    <p class="card-text">Uploaded By: Rakshith Jayanth</p>
                                    <a href="#" class="btn btn-primary">View Thread</a>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    UE18CS204 General thread
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Can someone explain Russel's paradox</h5>
                                    <p class="card-text" style="float:right">23 minutes ago</p>
                                    <p class="card-text">Started By: Krishna S.</p>
                                    <a href="#" class="btn btn-primary">View Thread</a>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    UE18CS204 General thread
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Can someone solve this problem?</h5>
                                    <p class="card-text" style="float:right">23 minutes ago</p>
                                    <p class="card-text">Started By: Krishna S.</p>
                                    <a href="#" class="btn btn-primary">View Thread</a>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    UE18CS204 General thread
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
                <div class="right-container">
                    <div id="upcoming">
                        <h3>SUBJECT DETAILS</h3>
                        <p>COURSE CODE: UE18CS204</p>
                        <p>SEMESTER: 3</p>
                        <p>ANCHOR: Vidhu Rojit</p>
                    </div>
                    
                    <div id="new-thread">
                        <h5>Start a thread on Web tech</h5>
                        <input type="text" placeholder="Enter Text">
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
                </div>
                <div id="buttons">
                        <button>Download Course Information</button>
                        <button>Download Syllabus for Next Semester</button>
                    </div>
                    <?php require('../templates/footer.php'); ?>
        <script src="subject.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="subject.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>