<?php session_start();
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

$sql = "SELECT * FROM  register WHERE email='{$_POST['email']}' AND pass='{$_POST['psw']}'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

   $name;
   while($row = mysqli_fetch_assoc($result)) {
        $name = $row["name"];
    }
    $_SESSION['name'] = $name;

    echo  '<p style="margin-top: 20px; text-align: center;">Login Successful <a href="dashboard.php">Click Here for go to Dashboard</a>';
   

	
}  else {

    echo "0 results";
}

endif;

$conn->close();
