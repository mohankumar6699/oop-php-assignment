<?php
//including the database connection file
include_once("oops classes/Crud.php");

$crud = new Crud();

//getting id of the data from url
$id = $crud->escape_string($_GET['id']);

//deleting the row from table
$result = $crud->delete($id, 'subscription');

if ($result) {
	//redirecting to the display page
	header("Location:subdetails.php");
}
?>

