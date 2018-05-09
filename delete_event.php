<?php 	
			ob_start();
			$objConnect = mysqli_connect("172.26.0.21","s5535512074_267","bYo51tF2") or die("Error Connect to Database");
		  	$objDB = mysqli_select_db($objConnect,"s5535512074_267");

		  	$dltSQL = "DELETE FROM event ";
			$dltSQL .="WHERE event_id = '".$_GET["event_id"]."' ";

			$dltQuery = mysqli_query($objConnect,$dltSQL);

			if($dltQuery){
				//echo "Delete success";
				ob_end_clean(); 
    	  		header('Location:index.php');
			}
			else
			{
				echo "Error Delete [".$dltSQL."]";
			}


			mysql_close($objConnect);
?>