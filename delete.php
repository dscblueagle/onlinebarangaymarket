<?php

	//connect with SQL
$con = mysqli_connect("localhost", "root", "", "product");
//select database 
mysqli_select_db($con,'product' );
//select query 

$sql = "DELETE FROM cart WHERE c_id='$_GET[c_id]'";

//execute the query 
if( mysqli_query($con,$sql))
header("refresh:0; url=cart2.php");

else 
	echo "not Deleted";




?>