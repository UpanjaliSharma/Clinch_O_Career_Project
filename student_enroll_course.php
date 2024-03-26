<?php     
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "clinch";
            $student_id=$_REQUEST["student_id"];
            $course_id=$_REQUEST["course_id"];
            // Create connection
            $conn = new mysqli($servername,$username,$password,$dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            $sql = "INSERT INTO enroll (student_id,course_id)
            VALUES ($student_id,$course_id)";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
?>
   <script>
     alert("Course enrolled successfully !");
</script>
    <script>
        window.open("class_room.php","_self");
    </script>
    