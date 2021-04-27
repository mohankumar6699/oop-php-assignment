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
	
	
	$email = $crud->escape_string($_POST['email']);
	$name = $crud->escape_string($_POST['name']);
	$subject = $crud->escape_string($_POST['subject']);
	$message = $crud->escape_string($_POST['message']);
	
	
			
		//this will insert data to database	
		$result = $crud->execute("INSERT INTO conatct(email,name,subject,message) VALUES('$email','$name','$subject','$message')");
		
		//this will display the success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='condetails.php'>View Result</a>";

}
?>
	
</body>
</html>
