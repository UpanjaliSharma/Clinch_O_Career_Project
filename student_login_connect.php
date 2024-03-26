<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clinch";
$user_type = $_REQUEST["user_type"];
$user_id = $_REQUEST["mobile_no"];
$pass = $_REQUEST["password"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if($user_type=='admin'){
    $sql = "SELECT * FROM $user_type WHERE admin_id='$user_id'";
}
else{
    $sql = "SELECT * FROM $user_type WHERE mobile_no=$user_id";
}
$result = $conn->query($sql);
$row=$result->fetch_assoc(); 
    if($row["password"]==$pass){
        //do nothing
    }
    else {
        echo '<script>
        alert("userid or password in incorrect");</script>
        <script>
                window.open("login.php","_self");
        </script>';
    
        
    }


 
$conn->close();
?>

