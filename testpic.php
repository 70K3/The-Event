 <?php
                $objConnect = mysqli_connect("172.26.0.21","s5535512074_267","bYo51tF2") or die("Error Connect to Database");
               
                $strSQL = "SELECT PicFiles FROM event" ;
                $objQuery = mysqli_query($objConnect,$strSQL) or die ("Error Query [".$strSQL."]");

                While($info = mysqli_fetch_array( $objQuery )){

                	echo $info["PicFiles"];
                }

?> 