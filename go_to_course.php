        <?php 
            session_start();
            $_SESSION["course_id"]=$_REQUEST["course_id"];
        ?>
<script>
        window.open("course.php","_self");   
</script>