<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
  <title>Page Home</title>
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
          <div class="col-sm-3">

          </div>
         
          <div class="col-sm-6">

          	<center><p><h1>แก้ไขข้อมูล</h1></center>

               <?php
                $Event_id = $_GET["event_id"];
                //echo $Event_id;
                $Event = $_GET["Event"];
                $Place = $_GET["Place"];
                $Date = $_GET["Date"];
                $Stime = $_GET["Stime"];
                $Etime = $_GET["Etime"];
                $Detail = $_GET["Detail"];
                $picfile = $_GET["PicFiles"];  
                //echo $picfile;
            ?>

              <form action="edit_event_db.php" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label form="text">ชื่อกิจกรรม:</label>
                    <input name="nameevent" type="text" id="nameevent" class="form-control" value="<?php echo $Event ;?>">
                  </div><p>
    
                  <div class="form-group">
                    <label form="text">วันที่จัดกิจกรรม:</label>
                    <input name="date" type="date" id="date" class="form-control" value="<?php echo $Date ;?>">
                  </div><p>  

                  <div class="form-group">
                    <label form="text">เวลาเริ่มกิจกรรม:</label>
                    <input name="stime" type="time" id="stime" class="form-control" value="<?php echo  $Stime ;?>">
                  </div><p>

                  <div class="form-group">
                     <label form="text">เวลาจบกิจกรรม:</label>
                     <input name="etime" type="time" id="etime" class="form-control" value="<?php echo $Etime ;?>">
                  </div><p>
            
                  <div class="form-group">
                     <label form="text">สถานที่จัดกิจกรรม:</label>
                     <input name="place" type="text" id="place" class="form-control" value="<?php echo $Place ;?>">
                  </div><p>

                  <div class="form-group">
                     <label form="text">รายละเอียดกิจกรรม:</label>
                     <input name="detail" type="text" id="detail" class="form-control " value="<?php echo $Detail ;?>">
                     <!-- <textarea name="detail" type="text" rows="7" id="detail" class="form-control" value="<?php echo $Detail ;?>"></textarea> -->
                  </div><p>

                  <div class="form-group">
                     <label form='text'>รูปภาพ</label>
                     <input name="picfile" type="file" id="picfile" class="form-control" value="<?php echo $picfile ;?>">
                  </div>  
                  
                   <center>
                     <button type="submit" class="btn btn-success" name = "edit_id" id ="edit_id" value="<?php echo $Event_id;?>">
                            <span class="glyphicon glyphicon-ok"></span>
                            แก้ไข
                    </button>
                   </center>
                  
              </form>
              <br>
              <form name="btncancle" action="index.php">
                  <center>
                     <button type="submit" class="btn btn-default" name = "btncancle">
                            <span class="glyphicon glyphicon-remove"></span>
                            ยกเลิก
                    </button>
                   </center>
              </form>
              <br><br><br>
        <div class="col-sm-3">


        </div>
    </div>
</body>
</html>