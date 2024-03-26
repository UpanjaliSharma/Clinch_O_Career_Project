<?php     
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "clinch";
            $instructor_name=$_REQUEST["instructor_name"];
            $question=$_REQUEST["question"];
            $student_id=$_REQUEST["student_id"];
            // Create connection
            $conn = new mysqli($servername,$username,$password,$dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            $sql = "SELECT instructor_id FROM instructor WHERE name='$instructor_name'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $instructor_id=$row["instructor_id"];
            $sql = "INSERT INTO question(instructor_id,question,student_id)
            VALUES ('$instructor_id','$question',$student_id)";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
?>
   <script>
     alert("Question uploaded successfully !");
</script>
    <script>
        window.open("student_e-learning.php","_self");
    </script>
    