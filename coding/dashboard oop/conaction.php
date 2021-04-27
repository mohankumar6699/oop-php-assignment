<?php
// connecting the database connection file
include_once("oops classes/Crud.php");

$crud = new Crud();

//for the details of updated information of user
if(isset($_POST['update']))
{	
	$id = $crud->escape_string($_POST['id']);
	
	
	$email = $crud->escape_string($_POST['email']);
	$name = $crud->escape_string($_POST['name']);
	$subject = $crud->escape_string($_POST['subject']);
	$message = $crud->escape_string($_POST['message']);
	
	
	
	
		//updating the table
		$result = $crud->execute("UPDATE conatct SET email='$email',name='$name',subject='$subject',message='$message' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: condetails.php");
	}
?>
