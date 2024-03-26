<?php include 'student_login_connect.php';?>
        <?php 
            session_start();
            $_SESSION["id"]=$user_id;
        ?>
<script>
        window.open("<?php echo $user_type?>_portal.php","_self");   
</script>