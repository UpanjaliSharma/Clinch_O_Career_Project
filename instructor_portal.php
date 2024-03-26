
<html>
<head>
    <link rel="stylesheet" type="text/css" href="student_portal.css">
    <link rel="stylesheet" type="text/css" href="student_register.css">
    <script>
       function coming_soon(){
            alert("This feature is coming soon");
        }
        function confirmation(){
        var i=confirm("Are you want to logout");
            if(i){
                window.open("intermediate_student_logout.php","_self");
            }
        }
    </script>
    <?php include "course_css.php";?>
    <style>
             textarea{
                width:200px;
                border: 1px solid #b2b2b2;
                height: 155px;
                margin-left: 0px;
                border-radius: 5px;
                font-size: 20px;
    }
    </style>
    </head>
    <body>
        <?php 
            session_start();
            $user_id=$_SESSION["id"];
        ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clinch";
$user_id = $_SESSION["id"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM instructor WHERE mobile_no=$user_id OR instructor_id=$user_id";
$result = $conn->query($sql);
$row=$result->fetch_assoc(); 
$instructor_id=$row["instructor_id"];       
?>  
        
   <div style="" class="menu" id="style-7">
       <div style="height:200px;"><img id="im5" src="Pics/<?php echo $row['image'];?>">
             <h3 align="center"><?php echo $row["name"]?><br>User Id :<?php echo $row["instructor_id"];?><br>(Instructor)</h3></div>
       <div  id="nav1">
               <ul>
                   <li><a href="#" class="active">Home</a></li>
                   <li><a href="instructor_e-learning.php">E-Learning Corner</a></li>
                    <li><a href="#" id="upload_course">Upload Course</a></li>
                   <li><a href="teaching_room.php">Teaching Room</a></li>
                   <li><a href="criteria_marks.php">Check Eligibility</a></li> 
                   <!--<li><a href="register_course.php">Register Course</a></li>-->
               </ul>
           
           </div>
       </div>
        <div class="details">
        <div id="header"><div id="ufms"><h3 style="padding:10px;color:white">Clinch'O career Management System</h3></div><li id="logout"><a href="#" onclick="confirmation()">Logout <img src="Pics/logout.png" style="padding-top:20px; width:15px;height:15px;"></a></li> </div>
        <div id="notice"><div id="subheader"><img src="Pics/notice_board.jpg" style="width:40px;height:30px;"><span style="color:white; font-size:30px;">Notice Board</span></div>
            <div>
                <video width="500" height="400" controls>
                    <source src="videoplayback.mp4" type="video/mp4">
                </video>
            </div></div>
        <?php
            $sql = "SELECT count(*) AS s FROM student";
            $result = $conn->query($sql);
            $row=$result->fetch_assoc(); 
            $no_of_student=$row["s"];
            $sql = "SELECT count(*) AS i FROM instructor";
            $result = $conn->query($sql);
            $row=$result->fetch_assoc(); 
            $no_of_instructor=$row["i"];
            ?>
        <div id="team"><div id="subheader"><img src="Pics/hand.png" style="width:40px;height:30px;"><span style="color:white; font-size:30px;">Team</span></div><h3 style=" margin:10px;color:black; font-size:23px;">Core Team : 6 (M=4,F=2)<br></h3></div>
            
        <div id="student"><div id="subheader"><img src="Pics/student.png" style="width:40px;height:30px;"><span style="color:white; font-size:30px;">Students</span></div><h3  style=" margin:10px;color:black; font-size:25px;">Student:<?php echo $no_of_student;?><br><br>Instructor:<?php echo $no_of_instructor;?></h3></div>
            
            <?php

        $sql = "SELECT * FROM instructor WHERE instructor_id=$user_id OR mobile_no=$user_id";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $student_id=$row['instructor_id'];
$sql = "SELECT * FROM question WHERE student_id=$student_id ORDER BY question_id DESC";
$result = $conn->query($sql);

?>
            <div>
                <?php 
                
                    if ($result) {
                        while($row = $result->fetch_assoc()) {
                            echo '<div><h4 style="color:black;font-size:25px;"><span style="color:#660000;">Ques:</span>'.$row["question"].'</h4><h4 style="color:purple; font-size:20px;"><span style="color:#650000;">Ans:</span>'.$row["answer"].'</h4><br><hr></div>';
        
                        }
                    }
                
                
                ?>
            </div>
                        

            
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h1 >Upload New Course</h1>
    </div>
    <div class="modal-body">
      <div id="div1">
        <form action="course_upload.php" method="post">
            <table align="right">
                 <tr><input type="hidden" name="instructor_id" value="<?php echo $instructor_id;?>">
                    </tr>
                <tr>
                    <th><h2>Course Name:</h2></th>
                    <td colspan="2"> 
                        <input type="text" name="course_name" required>
                     </td></tr>
                
                <tr>
                    <th><h2>Description:</h2></th>
                    <td colspan="2"> 
                        <br><textarea name="description" required></textarea>
                     </td></tr>
                <tr><br>
                    <td><br><br><input type="submit" value="Submit"></td>
                     <td><br><br><input type="reset" ></td></tr>
            </table>
        </form>
        </div>
    </div>
    <div class="modal-footer">
      <h3>Query Related Help Desk -9997244087</h3>
    </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("upload_course");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
                        </div>

      <?php $conn->close();?>  
        
    </body>
</html>