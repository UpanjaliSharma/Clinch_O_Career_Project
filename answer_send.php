<?php     
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "clinch";
            $answer=$_REQUEST["answer"];
            $question_id=$_REQUEST["question_id"];
            // Create connection
            $conn = new mysqli($servername,$username,$password,$dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 

            $sql = "UPDATE question SET answer='$answer' WHERE question_id='$question_id'";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
?>
 <script>
     alert("Answer uploaded successfully !");
</script>
<script>
        window.open("instructor_e-learning.php","_self");   
</script>