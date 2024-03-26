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
$instructor_name=$row["name"];  
    
?>        
   <div style="" class="menu" id="style-7">
       <div style="height:200px;"><img id="im5" src="Pics/<?php echo $row['image'];?>">
             <h3 align="center"><?php echo $row["name"]?><br>User Id :<?php echo $row["instructor_id"];?><br>(Instructor)</h3></div>
       <div  id="nav1">
               <ul>
                   <li><a href="instructor_portal.php" >Home</a></li>
                   <li><a href="instructor_e-learning.php">E-Learning Corner</a></li>
                    <li><a href="#" id="upload_course">Upload Course</a></li>
                   <li><a href="teaching_room.php" class="active">Teaching Room</a></li>
                   <li><a href="criteria_marks.php">Check Eligibility</a></li> 
                   <!--<li><a href="register_course.php">Register Course</a></li>-->
               </ul>
           
           </div>
       </div>student_portal.php
        <div class="details" style="margin-top:-20px;">
         <div id="header"><div id="ufms"><h3 style="padding:10px;">Clinch'O Career Management System</h3></div><li id="logout"><a href="#" onclick="confirmation()">Logout <img src="arrow_down3.png" style="padding-top:20px; width:15px;height:15px;"></a></li> </div>
        <div id="notice" style="width:98%; height:auto;"><div id="subheader"><img src="Pics/icon.png" style="width:40px;height:30px;"><span style="color:white; font-size:30px;">Your Courses</span>
            </div>
            
            <?php

$sql = "SELECT * FROM course WHERE instructor_id=$instructor_id ORDER BY course_id DESC";
$result = $conn->query($sql);

?>
            <div>
                <?php 
                
                    if ($result) {
                        while($row = $result->fetch_assoc()) {
                            $course_id=$row["course_id"];
                            // for find the no of student in that course
                            $sql1 = "SELECT count(*) AS c FROM enroll WHERE course_id=$course_id";
                            $result1 = $conn->query($sql1);
                            $row1 = $result1->fetch_assoc();
                            $no_of_student=$row1["c"];
                            // for find the no of videos in that course
                            $sql1 = "SELECT count(*) AS v FROM videos WHERE course_id=$course_id";
                            $result1 = $conn->query($sql1);
                            $row1 = $result1->fetch_assoc();
                            $no_of_video=$row1["v"];
                            echo '<div style="width:380px; height:250px; border:2px solid #b54564; padding:10px; margin:5px;position:relative;
                            float:left;"><h4 style="color:black;font-size:25px;"><span style="color:#660000;"></span>'.$row["course_name"].'</h4><h5 style="color:purple; font-size:20px;"><span style="color:#650000;">Instructor Name:</span>'.$instructor_name.'</h5>Enrolled Students:'.$no_of_student.'<br>#videos:'.$no_of_video.'<h4>'.$row["description"].'</h4><div id="course"><form action="instructor_go_to_course.php" method="post">
                              <table >
                                <tr><input type="hidden" name="course_id" value="'.$course_id.'">
                                </tr>
                                  <br><br>
                                <tr><td><input type="submit" value="Go To Course"></td></tr>
                                    </table>
                                    </form></div>
                                    <div id="course"><form action="delete_instructor_course.php" method="post">
                              <table >
                                <tr><input type="hidden" name="course_id" value="'.$course_id.'">
                                </tr>
                                  <br><br>
                                <tr><td><input type="submit" value="Delete Course"></td></tr>
                                    </table>
                                    </form></div>
                                    </div>';
        
                        }
                    }
                
                
                ?>
                
            </div>
            
                        </div>
            

            
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h1 >Ask Question</h1>
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
                        <textarea name="description" required></textarea>
                     </td></tr>
                <tr>
                    <td><input type="submit" value="Submit"></td>
                     <td><input type="reset" ></td></tr>
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