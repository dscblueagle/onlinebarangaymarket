<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "product");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    // Get image name
      $name=mysqli_real_escape_string($db,$_POST['product_name']);
    $image = $_FILES['image']['name'];
    // Get text
 
    $price=mysqli_real_escape_string($db,$_POST['product_price']);

    // image file directory
    $target = "admin/images".basename($image);

    $sql = "INSERT INTO images (p_name,image, p_price) VALUES ('$name','$image', '$price')";
    // execute query
    mysqli_query($db, $sql);
  }
  $result = mysqli_query($db, "SELECT * FROM images");
?>
<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
<title>Add Product</title>
<style type="text/css">
   #content{
    width: 50%;
    margin: 20px auto;
    border: 1px solid #cbcbcb;
   }
   form{
    width: 50%;
    margin: 20px auto;
   }
   form div{
    margin-top: 5px;
   }
   #img_div{
    width: 80%;
    padding: 5px;
    margin: 15px auto;
    border: 1px solid #cbcbcb;
   }
   #img_div:after{
    content: "";
    display: block;
    clear: both;
   }
   img{
    float: left;
    margin: 5px;
    width: 300px;
    height: 140px;
   }
 input {
padding:13px;
border-radius: 12px;
 }
 button {

 padding:12px;
 border-radius: 12px; 
 }
body {
font-family: 'Sen', sans-serif;
  font: 14px sans-serif;
            background-image: url('images/background2.jif');
            background-repeat: no-repeat;
            background-size: 100%;
}

.box {
  text-align:center;
 width: 350px; 
         padding: 20px;
         margin-top:100px;
         min-width: 520px;
         margin-right: auto;
         margin-left: auto;
         background-color: red;
         background-image: linear-gradient(-90deg, #0F2027, #203A43,#2C5364);
         color:white;
         border-radius: 12px;

}
h1{
color: white;

}
</style>

</head>
<body>
  <a href="customer_orders.php" style="text-decoration: none;"><h1>ADMIN</h1></a>

  <form method="POST"enctype="multipart/form-data" >
    <input type="hidden" name="size" value="1000000">
    <div class="box">
  <h1>Add Product</h1>
      <h2>Product Name:
         <input type="text" name="product_name" class="form-control" placeholder="Enter Product Name"></h2> 

        <h2>Product Price:
    <input type="number" name="product_price" class="form-control" placeholder="Enter Product Price"></h2>    

      <h2>Upload Picture:
      <input type="file" name="image"><br>
</h2> 
 <button type="submit" name="upload">Upload Product</button>
  
    </div>


 
     
  </form>
</div>
</body>
</html>