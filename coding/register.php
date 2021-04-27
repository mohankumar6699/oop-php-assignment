<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if( isset($_POST['email']) ) :

$sql = "INSERT INTO  register (name, address, email, pass)
VALUES ('{$_POST['name']}', '{$_POST['address']}', '{$_POST['email']}', '{$_POST['psw-repeat']}')";

if ($conn->query($sql) === TRUE) {

   echo '<p style="text-align: center; margin-top: 20px;">One Record Added Successfully</p>';
   echo '<p style="text-align: center; margin-top: 20px;"><a href="login.html">click for Login</a></p>';
  
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

endif;

$conn->close();
ob_end_flush();
