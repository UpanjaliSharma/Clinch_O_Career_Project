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
        
?>        
   <div style="" class="menu" id="style-7">
       <div style="height:200px;"><img id="im5" src="Pics/<?php echo $row['image'];?>">
             <h3 align="center"><?php echo $row["name"]?><br>User Id :<?php echo $row["instructor_id"];?><br>(Instructor)</h3></div>
       <div  id="nav1">
               <ul>
                   <li><a href="instructor_portal.php" class="active">Home</a></li>
                 <!--  <li><a id="ask_question" href="#">Ask Question</a></li> -->
                   <li><a href="#" onclick="coming_soon()">My Library</a></li>
               </ul>
           
           </div>
       </div>student_portal.php
        <div class="details" style="margin-top:-20px;">
         <div id="header"><div id="ufms"><h3 style="padding:10px;">Clinch'O Career Management System</h3></div><li id="logout"><a href="#" onclick="confirmation()">Logout <img src="arrow_down3.png" style="padding-top:20px; width:15px;height:15px;"></a></li> </div>
        <div id="notice" style="width:98%; height:auto;"><div id="subheader"><img src="hand.svg" style="width:40px;height:30px;"><span style="color:white; font-size:30px;">Question History</span>
            </div>
            
            <?php
            //this is for Question display
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clinch";
$user_id=$_SESSION["id"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

        $sql = "SELECT * FROM instructor WHERE instructor_id=$user_id OR mobile_no=$user_id";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $instructor_id=$row['instructor_id'];
$sql = "SELECT * FROM question WHERE instructor_id=$instructor_id AND answer='pending' ORDER BY question_id DESC";
$result = $conn->query($sql);

?>
            <div>
                <?php 
                
                    if ($result) {
                        while($row = $result->fetch_assoc()) {
                            echo '<div><h4 style="color:black;font-size:25px;"><span style="color:#660000;">Ques:</span>'.$row["question"].'</h4>'.'<h4 style="color:purple; font-size:20px;"><span style="color:#650000;">Ans:</span>'.'<form action="answer_send.php" method="post">
                              <table >
                                <tr><input type="hidden" name="question_id" value="'.$row["question_id"].'">
                                <td><textarea name="answer" placeholder="enter your answer" required></textarea></td></tr>
                                <tr><td><input type="submit"></td></tr>
                                    </table>
                                    </form>
                            '.'</h4><br><hr></div>';
                        }
                    }
                
                
                ?>
            </div>
    <?php
            $sql = "SELECT * FROM question WHERE instructor_id=$instructor_id AND answer !='pending' ORDER BY question_id DESC";
            $result = $conn->query($sql);    
     ?>
            
             <div>
                <?php 
                
                    if ($result) {
                        while($row = $result->fetch_assoc()) {
                            echo '<div><h4 style="color:black;font-size:25px;"><span style="color:#660000;">Ques:</span>'.$row["question"].'</h4>'.'<h4 style="color:purple; font-size:20px;"><span style="color:#650000;">Ans:</span>'.$row["answer"].'</h4><br><hr></div>';
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
        <form action="question_send.php" method="post">
            <table align="right">
                 <tr><input type="hidden" name="student_id" value="<?php echo $instructor_id;?>">
                    </tr>
                <tr>
                    <th>Instructor</th>
                    <td colspan="2"> 
                        <select name="instructor_name" required>
                <?php 
                        $sql = "SELECT * FROM instructor";
                        $result = $conn->query($sql);                
                ?>
                            
                        <option>Select</option>   
                        <?php 
                            if ($result) {
                                while($row = $result->fetch_assoc()) {
                                    echo '<option>'.$row["name"].'</option>';
                                    }
                            }
                        ?>
                         </select>
                     </td></tr>
                <tr>
                    <th>QuesTion</th>
                    <td colspan="2"><textarea name="question" type="text" maxlength="30" required></textarea></td></tr>
                <tr>
                    <th></th>
                    <td><input type="submit" value="Submit" onchange="question_send()"></td>
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
var btn = document.getElementById("ask_question");

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