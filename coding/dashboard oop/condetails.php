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
	<!--the below code will show logo and website name-->
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
//connecting to the database connection file
include_once("oops classes/Crud.php");

$crud = new Crud();

//this will fetch the data in descending order
$query = "SELECT * FROM conatct ORDER BY id DESC";
$result = $crud->getData($query);
?>	
<table bgcolor='#CCCCCC' border="0"><tr  style="text-align: center;">
		
	    <th width="7%">Email</th>
	    
	     <th width="5%">Name</th>
	     <th width="5%">Subject</th>
		 <th width="7%">Message</th>
		 <th width="5%">Actions</th>
	</tr>
	
	<?php //for displaying the details of users who filled contact form
	foreach ($result as $key => $res) {
	
	?>	
		
		<tr style='background:#fff; text-align: center;'></tr>
		
		<td align="center"><?php echo $res['email']; ?></td>
		<td align="center"><?php echo $res['name']; ?></td>
	    <td align="center"><?php echo $res['subject']; ?></td>
		<td align="center"><?php echo $res['message']; ?></td>
		
		<td align="center">
		
		<a class="btn btn-info" href="conedit.php?id=<?php echo $res['id']; ?>">
										Edit 
									</a>
		<a class="btn btn-info" href="condel.php?id=<?php echo $res['id']; ?>">
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
