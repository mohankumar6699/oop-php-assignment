<!DOCTYPE html>
<html lang="en">
	
<style type="text/css">
<!--
.style3 {color: #CC0033}
-->
</style>
<head>
  <title>Dashboard</title>
  <link rel="stylesheet" href="style.css">
</head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
	<!--code for showing logo and website name-->
<body>
<div class="jumbotron text-center" style="margin-bottom:0" class="jumbotron text-center">
 <img src="../w3images/logo.png" height="110px" width="140px" align="left"> <h4 align="center"> Dashboard</h4>
  </div>

	</div>
	
	<table width="1350" border="0" align="center" bgcolor="#000000">
  <tr>
 
		
		 <td width="130"> <a class="nav-link" href="subadd.php">Subscription</a></td>
		 <td width="130"> <a class="nav-link" href="subdetails.php">Subscription Details</a></td>
	     <td width="130"> <a class="nav-link" href="conadd.php">Contact</a></td>
		 <td width="130"> <a class="nav-link" href="condetails.php">Contact Details</a></td>
		 <td width="130"> <a class="nav-link" href="../index.php">Main Website</a></td>
    
  </tr>
</table>



<?php
// connecting the database connection file
include_once("oops classes/Crud.php");

$crud = new Crud();

//getting id from url
$id = $crud->escape_string($_GET['id']);

//selecting the data of a specific id
$result = $crud->getData("SELECT * FROM subscription WHERE id=$id");

foreach ($result as $res) {
	$name = $res['name'];
	$email = $res['email'];
	$mobile = $res['mobile'];
	$address = $res['address'];
	
}
?>

	
	<form name="form1" method="post" action="subaction.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $name;?>" required></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $email;?>" required></td>
			</tr>
			
			<tr> 
				<td>Mobile</td>
				<td><input type="text" name="mobile" value="<?php echo $mobile;?>" required></td>
			</tr>
			<tr> 
				<td>Address</td>
				<td><input type="text" name="address" value="<?php echo $address;?>" required></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?> ></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
	
</body>
</html>
