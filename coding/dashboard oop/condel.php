<?php
//connecting the database connection file
include_once("oops classes/Crud.php");

$crud = new Crud();

//for getting id of the data from url
$id = $crud->escape_string($_GET['id']);

//for deleting the row from table
$result = $crud->delete($id, 'conatct');

if ($result) {
	//this will redirec to the display page
	header("Location:condetails.php");
}
?>

