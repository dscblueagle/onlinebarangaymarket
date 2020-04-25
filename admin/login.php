	<?php include "./templates/top.php"; ?>

	<?php include "./templates/navbar.php"; ?>






<div class="container">
	<div class="row justify-content-center" style="margin:100px 0;">
		<div class="col-md-4">
			<p class="message"></p>
		<form method="post">
			<div class="box"> 
				<br>
				<h3 style="text-align:center; color: black; font-weight:bold; text-decoration:none">ONLINE BARANGAY MARKET</h3>
			<h3 style="text-align:center; color: black; font-weight:bold; text-decoration:none">ADMIN LOGIN</h3>
			
				<table height="100" align="center">
					<div>
					<tr>
						<br>
						<td>Username: </td>
						<td style="padding-bottom: 10px;"><input type="text" name="uname" placeholder="Enter Username" style="border-radius: 12px;  padding:10px;" required></td>
					
					</tr>
				</div>
				<div>
				<tr >
						
						<td >Password:</td>
						<td><input type="password" name="pass" placeholder="Enter Password"style="border-radius: 12px;  padding:10px;" required></td>

					</tr>
					<tr >
						<td style="color: white; text-align:center; padding-top: 30px" ><input type="submit" name="login" value="Login Here" style="border-radius:12px"></td>
					</tr>
				</div>


				</table>
			</div>
			</form>
		</div>
		</div>
	</div>
</div>


			<?php
				if(isset($_POST['login'])){
					include 'config.php';
					
					$uname = $_POST['uname'];
					$pass = $_POST['pass'];
					
					$query = "SELECT * FROM admin WHERE uname = '$uname' AND pass = '$pass'";
					$rs = $link->query($query);
					$num = $rs->num_rows;
					$rows = $rs->fetch_assoc();
					if($num > 0){
						session_start();
						$_SESSION['uname'] = $rows['uname'];
						$_SESSION['pass'] = $rows['pass'];
						echo "<script type = \"text/javascript\">
									alert(\"Login Successful. Welcome Admin\");
									window.location = (\"customer_orders.php\")
									</script>";
					} else{
						echo "<script type = \"text/javascript\">
									alert(\"Login Failed. Try Again!\");
									window.location = (\"login.php\")
									</script>";
					}
				}
			?>
			</div>
	
		</div>



<?php include "./templates/footer.php"; ?>

