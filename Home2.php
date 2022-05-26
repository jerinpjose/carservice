<?php
session_start();
$na=$_SESSION["n"];
if(isset($_SESSION["id"]))
//if($_SESSION["id"]==session_id())
{	
?>
	
			<!DOCTYPE html>

			<link rel="stylesheet" type="text/css" href="style.css">
				<body>
						<header>
							<div class="main">
									<div class="logo">
										<div class="dropdown">
											<button class="dropdown-button"><?php echo $na; ?></button>
											<div class="dropdown-list">
												<a href="#">Purchases</a>
												<a href="uprofile.php">Your Profile</a>
												<a href="logout.php">Logout</a>
											</div>
										</div>
									</div>
							</div>
						</header>
						<br><br><br><br>
						&nbsp;&nbsp;	
						<br><br>		
				</body>
			</html>	

			<?php
				require 'connect.php';	  
			?>

					<?php
						if(isset($_POST["submit_address"]))
						{
							$address = $_POST["address"];
							$address= str_replace( " ", "+", $address);
							?>

							<iframe width="40%" height="250" src="https://maps.google.com/maps?q=<?php echo 
							$address; ?>&output=embed"></iframe>

							<?php
						}
					?>

					<form method="POST">
						<p>
							<label>Enter Your Location: </label><input type="text" name="address"><br><br>


							<label>Choose Your Fuel: </label>
									<select name="fuel" id="fuel">
										<option value="#"></option>
										<option value="Petrol">Petrol</option>
										<option value="Diesel">Diesel</option>
										<option value="Autogas">Autogas</option>
									</select><br><br>
						</p>
						<div class="sub">
							<input type="submit" name="submit_address">
						</div>
					</form>

<?php
}
else
{
	header('location:Login.php');
}
?>