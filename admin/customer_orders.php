
<?php session_start(); ?>
<?php include_once("./templates/top.php"); ?>
<?php include_once("./templates/navbar.php"); ?>

<div class="container-fluid">
  <div class="row">
    
    <?php include "./templates/sidebar.php"; ?>

      <div class="row">
      	<div class="col-10">
      		<h2>Customers Order</h2>
      	</div>
      </div>
      
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
                <th>Customer ID</th>
              <th>Product Name</th>
              <th>Quantity</th>
              <th>Price</th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody id="customer_order_list">
           
  <?php 
  //connect with SQL
include "config.php";
//select database 
mysqli_select_db($link,'product' );
$totalPrice = 0;
//select query 
$sql="SELECT * FROM cart,users";

//execute the query 
$records= mysqli_query($link,$sql);
if($records->num_rows>0)
{

while ($row= mysqli_fetch_array($records)){
echo "<tr>";
echo "<td>" . $row['u_id']."</td>";
echo "<td>" . $row['c_name']."</td>";
echo "<td>" . $row['c_quantity']."</td>";
echo "<td>"."₱". $row['c_price']."</td>";
echo "<td>"."₱" . $row['c_total']."</td>";
 $price = $row['c_total'];
 $totalPrice += $price; 

}  
}
?> 
 </tbody>
  <tr>
              <td colspan="3" align="right">Total</td>
              <td align="right">$ <?php echo number_format($totalPrice, 2); ?></td>
              <td></td>
            </tr>
        </table>
      </div>
    </main>
  </div>
</div>

<?php include_once("./templates/footer.php"); ?>



<script type="text/javascript" src="./js/customers.js"></script>