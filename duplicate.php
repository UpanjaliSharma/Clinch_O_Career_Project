<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clinch";
$mobile_no=$_REQUEST["mobile_no"];
$user_type=$_REQUEST["user_type"];
$message="mobile number already exist";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT mobile_no FROM $user_type";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($mobile_no==$row["mobile_no"]){
               echo "<script type='text/javascript'>alert('$message');</script>";
               echo "<script type='text/javascript'> document.location.assign('signup.php');</script>";   
        }
    }
}
$conn->close();
?>