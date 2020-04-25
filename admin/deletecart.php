<?php

	//connect with SQL
$con = mysqli_connect("localhost", "root", "", "product");
//select database 
mysqli_select_db($con,'product' );
//select query 

$sql = "DELETE FROM images WHERE p_id='$_GET[p_id]'";

//execute the query 
if( mysqli_query($con,$sql))
header("refresh:0; url= viewproducts.php");

else 
	echo "not Deleted";




?>