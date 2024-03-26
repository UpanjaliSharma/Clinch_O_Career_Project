<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clinch";
$userid=$_REQUEST["mobile_no"];
$message="mobile number is not valid";
$f=0;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT mobile_no FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($userid==$row["mobile_no"]){
              $f=1; 
        }
    }
    if($f==0){
         echo "<script type='text/javascript'>alert('$message');</script>";
         echo "<script type='text/javascript'> document.location.assign('login.php');</script>"; 
    }
}
$conn->close();
?>