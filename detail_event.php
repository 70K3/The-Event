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
          <div class="col-sm-2">

          </div>
          
          <div class="col-sm-8">
            <div class="row">
              <center><h1 class="w3-text-teal">ข้อมูลกิจกรรม</h1></center><br>
                          
              <?php

                  $event_id = $_GET["event_id"];
                  //echo $event_id;

                  $objConnect = mysqli_connect("172.26.0.21","s5535512074_267","bYo51tF2") or die("Error Connect to Database");
                  $objDB = mysqli_select_db($objConnect,"s5535512074_267");
                  $strSQL = "SELECT event_id,Name,Place,Date,Stime,Etime,Detail,PicFiles FROM event WHERE event_id = $event_id";
                  $objQuery = mysqli_query($objConnect,$strSQL) or die ("Error Query [".$strSQL."]");
              ?>

                  <?php
                       while($objResult = mysqli_fetch_array($objQuery))
                  {
                  ?>
                      
                        <div class="well"><h4> ชื่อกิจกรรม : </h4> <?php echo $objResult["Name"];?></div>
                        <div class="well"><h4> สถานที่ : </h4> <?php echo $objResult["Place"];?></div>
                        <div class="well"><h4> วันที่จัดงาน : </h4> <?php echo $objResult["Date"];?></div>
                        <div class="well"><h4> เวลาเริ่มกิจกรรม : </h4> <?php echo $objResult["Stime"];?></div>
                        <div class="well"><h4> เวลาจบกิจกรรม : </h4> <?php echo $objResult["Etime"];?></div>
                        <div class="well"><h4> รายละเอียดกิจกรรม : </h4> <br> <?php echo $objResult["Detail"];?></div>
              </div>

              <div class="row">
                <div class="col-sm-2">
                      <form action="index.php?">   
                          <button type="submit" class="btn btn-success" name = "event_id" value="<?php echo $objResult["event_id"];?>">
                              <span class="glyphicon glyphicon-chevron-left"></span>
                              ย้อนกลับ
                        </button>
                      </form>
                      <br>
                </div>
                <div class="col-sm-6">      
                      <form action="edit_event.php" method='get'>
                          <input type="hidden" name="Event" value="<?php echo $objResult["Name"];?>">
                          <input type="hidden" name="Place" value="<?php echo $objResult["Place"];?>">
                          <input type="hidden" name="Date" value="<?php echo $objResult["Date"];?>">
                          <input type="hidden" name="Stime" value="<?php echo $objResult["Stime"];?>">
                          <input type="hidden" name="Etime" value="<?php echo $objResult["Etime"];?>">
                          <input type="hidden" name="Detail" value="<?php echo $objResult["Detail"];?>">
                          <input type="hidden" name="PicFiles" value="?php <?php echo $objResult["PicFiles"]; ?>">
                          <button type="submit" class="btn btn-warning" name = "event_id" value="<?php echo $objResult["event_id"];?>">
                                <span class="glyphicon glyphicon-edit"></span>
                                  แก้ไขข้อมูล
                         </button>
                      </form>
                      <br>

                </div>      
              </div>                        
                  <?php
                  }
                  ?>
              
               <?php
                    mysqli_close($objConnect);
               ?>

          </div>
          
        <div class="col-sm-2">


        </div>
    </div>
</body>
</html>