<?php
session_start();
$id = $_GET['id'];
//Connect DB
//Create query based on the ID passed from you table
//query : delete where Staff_id = $id
// on success delete : redirect the page to original page using header() method
$dbname = "product";
$conn = mysqli_connect("localhost", "usernname", "password", $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM cart WHERE c_id = $id"; 

if (mysqli_query($connect, $sql)) {
    mysqli_close($connect);
    header('Location: cart2.php'); //If book.php is your main page where you list your all records
    exit;
} else {
    echo "Error deleting record";
}
?>