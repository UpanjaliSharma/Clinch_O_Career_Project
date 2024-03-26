<?php     
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "clinch";
            $name=$_REQUEST["name"];
            $mobile_no=$_REQUEST["mobile_no"];
            $email_id=$_REQUEST["email_id"];
            $comment=$_REQUEST["comment"];
            // Create connection
            $conn = new mysqli($servername,$username,$password,$dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            $sql = "INSERT INTO quick_contact(name,mobile_no,email_id,comment)
            VALUES ('$name','$mobile_no','$email_id','$comment')";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
?>
   <script>
     alert("Query submit successfully !");
</script>
    <script>
        window.open("home.php","_self");
    </script>
    