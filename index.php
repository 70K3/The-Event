<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
  <title>Event</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body> <style> body{ background-color: #E8EAF6;} </style>

  <!-- Navbar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #283593">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">The Event</a>
          </div>
        <div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li><a href="index.php">Home</a></li>
             <!--  <li><a href="">Score</a></li> -->
            <!--   <li><a href="index.html">Log Out</a></li> -->
            </ul>
          </div>
        </div>
        </div>
      </nav><br><br><br>
      <div class="row">
          <div class="col-sm-1">

          </div>
          <center>
          <div class="col-sm-10">

            <div class="container" background="#3F51B5">

              <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                    <img src="http://student.coe.phuket.psu.ac.th/~s5535512074/TheEvent/Slide/PSU-1.jpg" alt="PSU-1" style="width:720px; height: 360px;">
                </div>

                <div class="item">
                    <img src="http://student.coe.phuket.psu.ac.th/~s5535512074/TheEvent/Slide/PSU-2.jpg" alt="PSU-2" style="width:720px; height: 360px;">
                </div>
    
                <div class="item">
                    <img src="http://student.coe.phuket.psu.ac.th/~s5535512074/TheEvent/Slide/PSU-3.jpg" alt="PSU-3" style="width:720px; height: 360px;">
                </div>
                <div class="item">
                    <img src="http://student.coe.phuket.psu.ac.th/~s5535512074/TheEvent/Slide/PSU-7.jpg" alt="PSU-7" style="width:720px; height: 360px;">
                </div>
                <div class="item">
                    <img src="http://student.coe.phuket.psu.ac.th/~s5535512074/TheEvent/Slide/PSU-5.jpg" alt="PSU-5" style="width:720px; height: 360px;">
                </div>
              </div>

              <!-- Left and right controls -->
              <!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a> -->
            </div>
          </div>
            
          	<h1 class="w3-text-teal">เพิ่มข้อมูลกิจกรรม</h1>
            <div class="well">
            <form name="btnAdd" action="add_event.php">
              <!-- <input type="submit" name="btnAdd" value="คลิกเพื่อเพิ่มข้อมูล" class="btn btn-primary"> -->
              <button type="submit" class="btn btn-primary" name="btnAdd">
                  <span class="glyphicon glyphicon-plus"></span>
                  คลิกเพื่อเพิ่มข้อมูล
              </button>
            </form>
            </div>

            <h1 class="w3-text-teal">ข้อมูลกิจกรรม</h1>
              <div class="well">
              
              <?php
                  $objConnect = mysqli_connect("172.26.0.21","s5535512074_267","bYo51tF2") or die("Error Connect to Database");
                  $objDB = mysqli_select_db($objConnect,"s5535512074_267");
                  $strSQL = "SELECT * FROM event ORDER BY Date DESC";
                  $objQuery = mysqli_query($objConnect,$strSQL) or die ("Error Query [".$strSQL."]");
              ?>

              <table class="table table-hover">
               <thead>
                  <tr>
                    <th><div align="center">กิจกรรม</div></th>
                    <th><div align="center">รายละเอียด</div></th>
                    <th><div align="center">ลบ</div></th>
                  
                  </tr>
               </thead>
               <tbody>
                  <?php
                       while($objResult = mysqli_fetch_array($objQuery))
                  {
                  ?>
                  <tr>
                      <td><div align="center"><?php echo $objResult["Name"];?></td>

                      <td><form action="detail_event.php" method='get'>
                        <div align="center">
                          <button type="submit" class="btn btn-info" name = "event_id" value="<?php echo $objResult["event_id"];?>">
                              <span class="glyphicon glyphicon-file"></span>
                          </button>
                        </div>
                      </form></td>

                      <td><form action="delete_event.php?">   
                        <div align="center">
                          <button type="submit" class="btn btn-danger" name = "event_id" value="<?php echo $objResult["event_id"];?>">
                              <span class="glyphicon glyphicon-remove"></span>
                          </button>
                        </div>
                      </form></td>
                  </tr>
                  <?php
                  }
                  ?>
               </tbody>
              </table>
             
               <?php
                    mysqli_close($objConnect);
               ?>

          </div>
         
        <div class="col-sm-1">


        </div>
    </div>
    
</body>
</html>