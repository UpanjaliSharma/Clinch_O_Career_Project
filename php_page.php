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
    <style>
        #notice{
            top:60px;
        }
    </style>
    <style>
        #video{
            padding: 10px;
            margin-left: 100px;
            font-size: 20px;
            text-decoration:underline;
            
        }
        #video ul li{
            padding: 10px;
            font-size: 20px;
            text-decoration:underline;
            list-style: square;
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

$sql = "SELECT * FROM student WHERE mobile_no=$user_id OR student_id=$user_id";
$result = $conn->query($sql);
$row=$result->fetch_assoc(); 
        
?>        
   <div style="" class="menu" id="style-7">
       <div style="height:200px;"><img id="im5" src="Pics/<?php echo $row['image'];?>">
             <h3 align="center"><?php echo $row["name"]?><br>User Id :<?php echo $row["student_id"];?><br>(Student)</h3></div>
       <div  id="nav1">
               <ul>
                   <li><a href="c_programming.php">C Programming</a></li>
                   <li><a href="c++_programming.php">C++ Programming</a></li>
                   <li><a href="java_programming.php" >Java Programming</a></li>
                   <li><a href="python.php">Python </a></li>
                   <li><a href="dbms.php"  >DBMS</a></li>
                   <li><a href="php_page.php" class="active" >PHP</a></li>
                   <li><a href="classroom.php">Back</a></li>
               </ul>
           
           </div>
       </div>student_portal.php
        <div class="details" style="margin-top:-20px;">
         <div id="header"><div id="ufms"><h3 style="padding:10px;">Clinch'O career Management System</h3></div><li id="logout"><a href="#" onclick="confirmation()">Logout <img src="arrow_down3.png" style="padding-top:20px; width:15px;height:15px;"></a></li> </div>
        <div id="notice" style="width:98%; height:auto;"><div id="subheader"><img src="Pics/php.png" style="width:40px;height:40px;"><span style="color:white; font-size:30px;"></span>
            </div>
            
                <div  id="video">
                <ul>
                   <li><a href="/DBMS/Lecture%201%20What%20is%20Data%20in%20DBMS%20Hindi%20-%20YouTube.WEBM">Lecture:1  What is Data in DBMS ?</a></li>
                   <li><a href="/DBMS/Lecture%202%20What%20is%20Data%20Persistence%20in%20DBMS%20Hindi%20-%20YouTube.mp4">Lecture:2   What is Data Persistence in DBMS ?</a></li>
                   <li><a href="/DBMS/Lecture%203%20What%20is%20Database%20in%20DBMS%20Hindi%20-%20YouTube.mp4">Lecture:3  What is Database in DBMS ?</a></li>
                   <li><a href="/DBMS/Lecture 4 What is DBMS Hindi - YouTube.mp4">Lecture:4  What is DBMS ?</a></li>
                   <li><a href="/DBMS/Lecture 5 DBMS vs Traditional File Handling in DBMS Hindi - YouTube.mp4">Lecture:5  DBMS vs Traditional File Handling in DBMS ?</a></li>
                   <li><a href="/DBMS/Lecture 6 Database Architecture in DBMS Hindi - YouTube.mp4">Lecture:6  Database Architecture in DBMS ?</a></li>
                   <li><a href="/DBMS/Lecture 7 Database Models in DBMSHindi - YouTube.mp4">Lecture:7  Database Models in DBMS ?</a></li>
                   <li><a href="/DBMS/Lecture 8 RDBMS concepts in DBMS Hindi - YouTube.mp4">Lecture:8  RDBMS concepts in DBMS  ?</a></li>
                   <li><a href="/DBMS/Lecture 9 Codd's 12 Rules in DBMS Hindi - YouTube.mp4">Lecture:9  Codd's 12 Rules in DBMS ?</a></li>
                   <li><a href="/DBMS/Lecture 10 Database Keys in DBMS Hindi - YouTube.mp4">Lecture:10 Database Keys in DBMS ?</a></li>
                   <li><a href="/DBMS/Lecture 11 ER Diagram in DBMS Hindi.mp4">Lecture:11  ER Diagram in DBMS ?</a></li>
                   <li><a href="/DBMS/Lecture 12 First Normal Form in DBMS Hindi.mp4">Lecture:12 First Normal Form in DBMS ?</a></li>
                   <li><a href="/DBMS/Lecture 13 Second Normal Form in DBMS Hindi.mp4">Lecture:13  Second Normal Form in DBMS ?</a></li>
                   <li><a href="/DBMS/Lecture 14 Third Normal form in DBMS Hindi.mp4">Lecture:14 Third Normal form in DBMS ?</a></li>
                   <li><a href="/DBMS/Lecture 15 Introduction to SQL in DBMS Hindi.mp4">Lecture:15 Introduction to SQL in DBMS ?</a></li>
                   <li><a href="/DBMS/Lecture 16 Integrity Constraints in DBMS Hindi.mp4">Lecture:16 Integrity Constraints in DBMS ?</a></li>
                 
               </ul>
                </div>
            </div>
            
        </div>

      <?php $conn->close();?>  
        
    </body>
</html>