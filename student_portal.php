<html>
<head>
    <link rel="stylesheet" type="text/css" href="student_portal.css">
    <script>
        function coming_soon(){
            alert("This feature is coming soon");
        }
        function confirmation(){
        var i=confirm("Are you sure, You want to logout !!");
            if(i){
                window.open("intermediate_student_logout.php","_self");
            }
        }
     // Automatic Slideshow - change image every 3 seconds
         var myIndex = 0;
        function myslide() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i=0;i<5;i++){
               x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex>5){myIndex=1}
            x[myIndex-1].style.display = "block";
            setTimeout(myslide, 3000);
        }
    </script>
    <style>
        #notice{
            top:60px;
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

$sql = "SELECT * FROM student WHERE mobile_no=$user_id";
$result = $conn->query($sql);
$row=$result->fetch_assoc(); 
        
?>   
   <div style="" class="menu" id="style-7">
       <div style="height:200px;"><img id="im5" src="Pics/<?php echo $row['image'];?>" alt="login.png">
             <h3 align="center"><?php echo $row["name"];?><br>User Id :<?php echo $row["student_id"];?><br>(Student)</h3></div>
       <div  id="nav1">
               <ul>
                   <li><a href="#" class="active">Home</a></li>
                   <li><a href="student_e-learning.php">E-Learning Corner</a></li>
             <!--  <li><a href="#" onclick="coming_soon()">Top MNC's</a></li>-->
                   <li><a href="student_enroll_portal.php">Register Course</a></li>
                   <li><a href="check_eligibility.php" >Check Eligibility</a></li> 
                   <li><a href="class_room.php" >Class Room</a></li>
                     
                   <!--
                   <li><a href="#" onclick="coming_soon()">My Time-Table</a></li>
                   <li><a href="#" onclick="coming_soon()">My Syllabus</a></li>
                   <li><a href="#" onclick="coming_soon()">My Library</a></li>
                   <li><a href="#" onclick="coming_soon()">My Resume</a></li>
                   <li><a href="#" onclick="coming_soon()">Leave Request</a></li>
                   <li><a href="#" onclick="coming_soon()">Book Meeting</a></li>
                   -->
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
        </div>
    </body>
</html>