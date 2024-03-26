<?php  
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "clinch";
            $name=$_REQUEST["name"];
            $pass=$_REQUEST["password"];
            $gender=$_REQUEST["gender"];
            $date_of_birth=$_REQUEST["date_of_birth"];
            $mobile_no=$_REQUEST["mobile_no"];
            $email=$_REQUEST["email"];
            $image=$_REQUEST["image"];
            $user_type=$_REQUEST["user_type"];
            $skill=$_REQUEST["skill"];
            $qualification=$_REQUEST["qualification"];
            $address=$_REQUEST["address"];
            $message="sign up successfully you can login now!";
            // Create connection
            $conn = new mysqli($servername,$username,$password,$dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
        if($user_type=="Student"){
        $sql = "INSERT INTO Student(name,password,gender,date_of_birth,mobile_no,email,image,qualification,address)
        VALUES('$name','$pass','$gender','$date_of_birth','$mobile_no','$email','$image','$qualification','$address')";
        }
        else{    
        $sql = "INSERT INTO instructor(name,password,gender,date_of_birth,mobile_no,email,image,qualification,skill,address)
        VALUES('$name','$pass','$gender','$date_of_birth','$mobile_no','$email','$image','$qualification','$skill','$address')";
        }
            if ($conn->query($sql) === TRUE) {
                echo "<script type='text/javascript'>alert('$message');</script>";
                echo "<script type='text/javascript'>document.location.assign('signup.php');</script>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
         $conn->close();
        include 'duplicate.php';
?>