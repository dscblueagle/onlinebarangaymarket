
<?php session_start(); ?>
<?php include_once("./templates/top.php"); ?>
<?php include_once("./templates/navbar.php"); ?>

<div class="container-fluid">
  <div class="row">
    
    <?php include "./templates/sidebar.php"; ?>

      <div class="row">
      	<div class="col-10">
      		<h2>Product List</h2>
      	</div>
      </div>
      
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Product ID</th>
              <th>Product Name</th>
              <th>Product image</th>
              <th>Price</th>
              <th>Action</th>
        
            </tr>
          </thead>
          <tbody id="customer_order_list">
           
  <?php 
  //connect with SQL
include "config.php";
//select database 
mysqli_select_db($link,'product');
$totalPrice = 0;
//select query 
$sql="SELECT * FROM images";

//execute the query 
$records= mysqli_query($link,$sql);
if($records->num_rows>0)
{

while ($row= mysqli_fetch_array($records)){
echo "<tr>";
echo "<td>" . $row['p_id']."</td>";
echo "<td>" . $row['p_name']."</td>";
echo "<td>" . $row['image']."</td>";
echo "<td>"."₱". $row['p_price']."</td>";
echo "<td><a href=deletecart.php?p_id=".$row['p_id'].">Remove</a></td>";
}  
}
?> 
 </tbody>
  <tr>
             
             
            </tr>
        </table>
      </div>
    </main>
  </div>
</div>

<?php include_once("./templates/footer.php"); ?>



<script type="text/javascript" src="./js/customers.js"></script>