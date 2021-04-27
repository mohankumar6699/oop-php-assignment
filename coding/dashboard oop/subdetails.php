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


<br /><br />
<?php
//connecting the database connection file
include_once("oops classes/Crud.php");

$crud = new Crud();

//display the data in descending order
$query = "SELECT * FROM subscription ORDER BY id DESC";
$result = $crud->getData($query);

?>	
<table bgcolor='#CCCCCC' border="10"><tr  style="text-align: center;">
		<th width="5%">Name</th>
	    <th width="7%">Email</th>
	    <th width="5%">Mobile</th>
		<th width="7%">Address</th>
		<th width="5%">Actions</th>
	</tr>
	
 
	<?php //the below code displays the details of subscribers
	foreach ($result as $key => $res) {
	
	?>	
		
		<tr style='background:#fff; text-align: center;'></tr>
		<td align="center"><?php echo $res['name']; ?></td>
		<td align="center"><?php echo $res['email']; ?></td>
		<td align="center"><?php echo $res['mobile']; ?></td>
		<td align="center"><?php echo $res['address']; ?></td>
		
		<td align="center">
		
		<a class="btn btn-info" href="subedit.php?id=<?php echo $res['id']; ?>"> 
										Edit 
									</a>
		<a class="btn btn-info" href="subdel.php?id=<?php echo $res['id']; ?>">
										Delete
									</a>
										
									
		
		<?php	
	}
	?>
	</table>
</div></div>	
	
</center>
</body>
</html>
