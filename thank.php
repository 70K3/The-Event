<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
  <title>Thank you</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--   <?php 
                $userID= $_SESSION["userID"]  
                //echo $userID;
  ?> -->
<body> <style> body{ background-color: #1a1a1a;} </style>

  <!-- Navbar -->
     <!--  <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">The Event</a>
          </div>
        <div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li><a href="index.html">Home</a></li>
            
            </ul>
          </div>
        </div>
        </div>
      </nav><br><br><br> -->
      <div class="row">
          <div class="col-sm-3">

          </div>
          <center>
          <p><h1>Add data successed. Please click on button for back to Home</h1>
          <div class="col-sm-6">
            <form name="btnback" action="index.php">
              <input type="submit" name="btnback" value="Back" class="btn btn-primary"></p>
              <br>
            </form>
          </div>
          </center>
        <div class="col-sm-3">

        </div>
    </div>
</body>
</html>