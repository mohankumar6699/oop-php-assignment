<html>
<head>
	<title>Add Data</title>
</head>

<body>

<?php
//connecting the database connection file
include_once("oops classes\Crud.php");


$crud = new Crud();


if(isset($_POST['Submit'])) {	
	
	$name = $crud->escape_string($_POST['name']);
	$email = $crud->escape_string($_POST['email']);
	$mobile = $crud->escape_string($_POST['mobile']);
	$address = $crud->escape_string($_POST['address']);
	
	
			
		//insert data to database	
		$result = $crud->execute("INSERT INTO subscription(name,email,mobile,address) VALUES('$name','$email','$mobile','$address')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='subdetails.php'>View Result</a>";

}
?>
	
</body>
</html>
