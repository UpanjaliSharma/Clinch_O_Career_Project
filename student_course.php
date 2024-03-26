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
    </head>
    <body>
        <?php 
            session_start();
            $user_id=$_SESSION["id"];
            $course_id=$_SESSION["course_id"];
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

$sql = "SELECT * FROM student WHERE mobile_no=$user_id OR student_id=$user_id";
$result = $conn->query($sql);
$row=$result->fetch_assoc(); 
$student_id=$row["student_id"];      
?>        
   <div style="" class="menu" id="style-7">
       <div style="height:200px;"><img id="im5" src="Pics/<?php echo $row['image'];?>">
             <h3 align="center"><?php echo $row["name"]?><br>User Id :<?php echo $row["student_id"];?><br>(student)</h3></div>
       <div  id="nav1">
               <ul>
                   <li><a href="student_portal.php" >Home</a></li>
                   <li><a href="student_e-learning.php">E-Learning Corner</a></li>
                    <li><a href="student_enroll_portal.php" id="upload_video">Register Course</a></li>
                   <li><a href="class_room.php" class="active">Class Room</a></li>
                   <li><a href="criteria_marks.php">Check Eligibility</a></li> 
                   <!--<li><a href="register_course.php">Register Course</a></li>-->
               </ul>
           <?php
           $sql = "SELECT * FROM course WHERE course_id=$course_id ";
           $result = $conn->query($sql);
           $row = $result->fetch_assoc();
           $course_name=$row["course_name"];
           ?>
           </div>
       </div>student_portal.php
        <div class="details" style="margin-top:-20px;">
         <div id="header"><div id="ufms"><h3 style="padding:10px;">Clinch'O Career Management System</h3></div><li id="logout"><a href="#" onclick="confirmation()">Logout <img src="arrow_down3.png" style="padding-top:20px; width:15px;height:15px;"></a></li> </div>
        <div id="notice" style="width:98%; height:auto;"><div id="subheader"><img src="Pics/icon.png" style="width:40px;height:30px;"><span style="color:white; font-size:30px;"><?php echo $course_name; ?></span>
            </div>
            
            <?php
$sql = "SELECT * FROM videos WHERE course_id=$course_id ";
$result = $conn->query($sql);

?>
            <div>
                
                <?php 
                $path ="/Clinch'O career/videos/";
                    if ($result) {
                        while($row = $result->fetch_assoc()) {
                            echo '<div  id="video">
                            <ul>
                                <li><a href="'.$path.''.$row["video_url"].'">Lecture.'.$row["video_no"].': '.$row["video_name"].'</a></li>
                            </ul></div>';
        
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
        <form role="form" action="upload_video.php" method="post"  enctype="multipart/form-data" class="form-horizontal11">
            <table>
    	<tr>
            <th><h2>Video no:</h2></th>
              <td> <input type="number" name="video_no" required></td> 
                
            </tr>
        <tr>
            <th><h2>Video Name:</h2></th>
                <td><input type="text" name="video_name" required></td>
            </tr>
        <tr> 
            <td><input type="hidden" name="course_id" value="<?php echo $course_id;?>"></td>
        </tr>
        <tr>
            <th colspan="2"><input class="file-control"  type="file" name="fleimage" required></th>
            </tr>
        <tr>   
                
         </tr>
        
                </table>
            <input type="submit" value="Upload Video">
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
var btn = document.getElementById("upload_video");

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