<?php     
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "clinch";
            $instructor_id=$_REQUEST["instructor_id"];
            $course_name=$_REQUEST["course_name"];
            $description=$_REQUEST["description"];
            // Create connection
            $conn = new mysqli($servername,$username,$password,$dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            $sql = "INSERT INTO course(instructor_id,course_name,description)
            VALUES ('$instructor_id','$course_name','$description')";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
?>
   <script>
     alert("Course uploaded successfully !");
</script>
    <script>
     window.open("teaching_room.php","_self");
    </script>
    