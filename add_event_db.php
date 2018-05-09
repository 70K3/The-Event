<?php 	
			ob_start();
			$objConnect = mysqli_connect("172.26.0.21","s5535512074_267","bYo51tF2") or die("Error Connect to Database");
		  	$objDB = mysqli_select_db($objConnect,"s5535512074_267");

		  	//upload pic
		  	$ext = pathinfo(basename($_FILES["picfile"]["name"]),PATHINFO_EXTENSION); 
		  	$new_image_name = "img_".uniqid().".".$ext;

		  	$image_path = "Picture/";
		  	$upload_path = $image_path.$new_image_name;

		  	move_uploaded_file($_FILES["picfile"]["tmp_name"],$upload_path);

		  	$picfile = $new_image_name;

			$strSQL = "INSERT INTO event";
			$strSQL .="(Name,Date,Stime,Etime,Place,Detail,PicFiles)";
			$strSQL .="VALUES";
			$strSQL .="('".$_POST["nameevent"]."','".$_POST["date"]."','".$_POST["stime"]."','".$_POST["etime"]."','".$_POST["place"]."','".$_POST["detail"]."','".$picfile."')";
			
			
			if($_POST["nameevent"] != NULL && $_POST["date"] != NULL && $_POST["stime"] != NULL && $_POST["etime"] != NULL && $_POST["place"] != NULL && $_POST["detail"] != NULL && $picfile != NULL){
				$objQuery = mysqli_query($objConnect,$strSQL);
				if($objQuery){
					//echo "Save Done.Click";
					 ob_end_clean();
					 header("Location:index.php");
					 // 	echo "name" .$_FILES["picfile"]["name"]. "<br>" ;
						// echo "tmp_name" .$_FILES["picfile"]["tmp_name"]. "<br>";
						
											
    			}
			}
			else if($_POST["nameevent"] == NULL || $_POST["date"] == NULL || $_POST["stime"] == NULL || $_POST["etime"] == NULL || $_POST["place"] == NULL || $_POST["detail"] == NULL || $picfile == NULL){ //Check have or not data
					//echo "กรุณากรอกข้อมูลให้ครบถ้วน 
					ob_end_clean();
    				header("Location:add_event.php");
    				

			}
			else{
				echo "Error Save [".$strSQL."]";
			}
			mysqli_close($objConnect);
?>