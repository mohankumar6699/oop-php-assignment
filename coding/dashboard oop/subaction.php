<?php
// including the database connection file
include_once("oops classes/Crud.php");

$crud = new Crud();

//for updating the fields 
if(isset($_POST['update']))
{	
	$id = $crud->escape_string($_POST['id']);
	
	$name = $crud->escape_string($_POST['name']);
	$email = $crud->escape_string($_POST['email']);
	$mobile = $crud->escape_string($_POST['mobile']);
	$address = $crud->escape_string($_POST['address']);
	
	
	
	
		//updating the table
		$result = $crud->execute("UPDATE subscription SET name='$name',email='$email',mobile='$mobile',address='$address' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: subdetails.php");
	}
?>
