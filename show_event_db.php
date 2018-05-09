<?php

		ini_set('display_errors', 1);
		error_reporting(~0);

		$serverName = "172.26.0.21";
		$userName = "s5535512074_267";
		$userPassword = "bYo51tF2";
		$dbName = "s5535512074_267";

		$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
		$sql = "SELECT * FROM event ORDER BY Date DESC";
		$query = mysqli_query($conn,$sql);

		if (!$query) {
			printf("Error: %s\n", $conn->error);
			exit();
		}

		$resultArray = array();
				
		while($result = mysqli_fetch_array($query,MYSQLI_ASSOC))
		{
			array_push($resultArray,$result);
		}

		$obj["master"] = $resultArray;	

		mysqli_close($conn);

 		echo json_encode($obj);

?>