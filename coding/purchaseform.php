<!DOCTYPE html>
<html>
<?php
$servername = "localhost";
$database = "login";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
if (isset($_POST['insert']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$address=$_POST['address'];
$zipcode = $_POST['zipcode'];
$nameoncard = $_POST['nameoncard'];
$cardnumber = $_POST['cardnumber'];
$cvv = $_POST['cvv'];
$res="insert into buy(name,email,address,zipcode,nameoncard,cardnumber,cvv)values('$name','$email','$address','$zipcode','$nameoncard','$cardnumber','$cvv')";
if(!mysqli_query($conn,$res))
{
die("error".mysqli_error($conn));
}
header("location:thankyou.php");

}
	
?>

