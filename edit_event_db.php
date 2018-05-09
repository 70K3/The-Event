<?php 	
			ob_start();

			$objConnect = mysqli_connect("172.26.0.21","s5535512074_267","bYo51tF2") or die("Error Connect to Database");
		  	$objDB = mysqli_select_db($objConnect,"s5535512074_267");

		  	$event_id = $_POST["edit_id"];
      		$event = $_POST["nameevent"];
      		$place = $_POST["place"];
      		$date = $_POST["date"];
      		$stime = $_POST["stime"];
      		$etime = $_POST["etime"];
      		$detail = $_POST["detail"];
      		// $picfile = $_POST["picfile"];
			
      	// 	$strSQL = "SELECT PicFiles FROM event WHERE event_id = $event_id";
      	// 	$objQuery = mysqli_query($objConnect,$strSQL) or die ("Error Query [".$strSQL."]");

      	// 	while ($objResult = mysqli_fetch_array($objQuery)) {
      			
      	// 		if($picfile != $objResult["PicFiles"]){
      	// 			$ext = pathinfo(basename($_FILES["picfile"]["name"]),PATHINFO_EXTENSION); 
		  			// $new_image_name = "img_".uniqid().".".$ext;

		  			// $image_path = "Picture/";
		  			// $upload_path = $image_path.$new_image_name;

		  			// move_uploaded_file($_FILES["picfile"]["tmp_name"],$upload_path);

		  			// $picfile2 = $new_image_name;
      	// 		}
      	// 	}

			 // if($_POST["event"] != NULL && $_POST["place"] != NULL && $_POST["date"] != NULL && $_POST["stime"] != NULL && $_POST["etime"] != NULL && $_POST["detail"] != NULL ){
			 	
				$strSQL2 = "UPDATE event SET 
						Name = '$event',
						Date = '$date',
						Stime = '$stime',
						Etime ='$etime',
						Place ='$place',
						Detail ='$detail'
						 -- PicFiles = '$picfile'
						WHERE event_id = $event_id";

						$objQuery2 = mysqli_query($objConnect,$strSQL2);		

				if($objQuery2){

						ob_end_clean();
						header('Location: detail_event.php?event_id='.$event_id);
								
				}
			  	
			 // }
			  // else if($_POST["event"] == NULL || $_POST["place"] == NULL || $_POST["date"] == NULL || $_POST["stime"] == NULL || $_POST["etime"] == NULL || $_POST["detail"] == NULL ){
						
					// 		ob_end_clean();
					// 		header('Location:edit_event.php?'); 
			  // }
			  else{
					echo "Error Save [".$strSQL."]";
			}
			
			mysqli_close($objConnect);
	?>
