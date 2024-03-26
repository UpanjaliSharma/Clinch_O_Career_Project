<?php 
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "db1";
            $user=$_REQUEST["user_id"];
            $u_type=$_REQUEST["user_type"];
            $skill=$_REQUEST["skill"];
            $fee=$_REQUEST["fees"];
            $location=$_REQUEST["location"];
            $im = $_REQUEST["image"];
            $message="profile successfully updated!";
            // Create connection
            $conn = new mysqli($servername,$username,$password,$dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 

            $sql = "UPDATE customer SET user_type='$u_type',skill='$skill',fees=$fee,location='$location',image='$im' WHERE mobile_no=$user";
            if ($conn->query($sql) === TRUE) {
                echo "<script type='text/javascript'>alert('$message');</script>";
                echo "<script type='text/javascript'>document.location.assign('login.php');</script>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
         $conn->close();
?>