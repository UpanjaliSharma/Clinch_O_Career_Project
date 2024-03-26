<?php
//ini_set('session.save_path', 'php.ini')
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clinch";
$userid=$_REQUEST["mobile_no"];
$_SESSION["uname"]=$_REQUEST["mobile_no"];
$pass=$_REQUEST["password"];
$message="user id or password is incorrect";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT user_id,name,password,image,mobile_no FROM user WHERE mobile_no=$userid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($pass==$row["password"]){
            $p=$row["name"];
            $u=$row["user_id"];
            $_SESSION["pa"] = $row["name"];
            if($row["image"]==''){
                $im='profile.png';
                $_SESSION["im"] = "profile.png";
            }
            else{
                $im=$row["image"];
                $_SESSION["im"] = $row["image"];
            }
        }
        else{
           echo "<script type='text/javascript'>alert('$message');</script>";
           echo "<script type='text/javascript'>document.location.assign('login.php');</script>";
        }
    }
}
$conn->close();
require 'invalid_mobile_no.php';
?>