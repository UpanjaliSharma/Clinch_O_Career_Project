<!DOCTYPE html>
<html>
    <?php include'login_connect.php'; ?> 
    <head>
        <title>welcome</title>
        <link rel="stylesheet" type="text/css" href="login_portal.css">
        <link rel="stylesheet" type="text/css" href="my_profile.css">
        <script>                
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
            .myslides{
                height:100px;
                width:100%;
            }
    </style>
        <style>
            /* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 30%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}
      
/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #efc9c9;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #efc9c9;
    color: white;
}
        </style>
        <script>
             window.onload=function(){
            var b = document.getElementById('sk');
            b.onchange = function(){
                if(b.value=='plumber'){
                
               }
            }
            }
            function confirmation(){
                var i=confirm('are you want to logout');
                if(i){
                    <?php session_destroy();?>
                    window.open("login.php","_self");
            }
        }
            function valid(){
                var u = document.getElementById('ut');
                var v = document.getElementById('sk');
                var w = document.getElementById('location');
                if(u.value=='client'){
                    if(v.value!='choose me if you are a client!' || v.value=='Select'){
                        alert('choose last option');
                        return false;
                    }
                    else{
                        return true;
                    }
                }
                if(u.value=='worker'){
                    if(v.value=='choose me if you are a client!' || v.value=='Select'){
                        alert('choose any skill');
                        return false;
                    }
                    }
                    else{
                        return true;
                    }
                if(w.value=='Select'){
                    alert("choose any location");
                    return false;
                }
                else{
                    return true;
                }
                }
        </script>
    </head>
    <body>

        <div id="main">
        <div id="header">
            <h2 align="center" style="margin-top:5px;">STUDENT PORTAL</h2>
            <button type="button" id="logout" onclick="confirmation()">Logout<img id="logimg" src="Pics/logout.png"></button>
        </div>
    <div class="menu" >
       <div style="height:200px;"><img style="height:155px; width:155px; border-radius:300px;" src="<?php echo "$im";?>">
             <h3 align="left" style="margin-top:-5px; text-align:center;"><?php echo "$p";?>
                 <br><?php echo "$u";?></h3></div>
       <div  id="nav1" >
               <ul style="margin-top:98px;list-style-type: none;">
                   <li><a id="my_profile"  href="#" class="active"><img id="im5" style="height:20px; border-radius:90px;" src="Pics/profile.png">My Profile</a></li>
                   <li><a href="#" class="active"><img id="im5" style="height:20px; border-radius:90px;" src="Pics/mncstkr.png">Top MNC's</a></li>
                   <li><a href="#" class="active"><img id="im5" style="height:20px; border-radius:90px;" src="Pics/collgstickr.png">Top Colleges</a></li>
                   <li><a href="#" class="active"><img id="im5" style="height:20px; border-radius:90px;" src="Pics/register.png">Register course</a></li>
                   <li><a href="#" class="active"><img src="Pics/quiz.png" style="height:20px; border-radius:90px;" src="Pics/feedback.png">Quiz</a> </li>
                   <li><a href="#" class="active"><img src="Pics/help.png" style="height:20px; border-radius:90px;" src="Pics/feedback.png">Help</a> </li>

                   <!-- 
                  <li><a href="#" id="book_worker" class="active"><img id="im5" style="height:20px; border-radius:90px;" src="Pics/feedback.png">Book Worker</a></li> 
                  -->
               </ul>
           </div>
       </div>
        <section id="slide"> 
        <img class="mySlides" src="Pics/mnc1.jpg"style="width:108.5%;height:300px;">
        <img class="mySlides" src="Pics/mnc2.jpg"style="width:108.5%;height:300px;">
        <img class="mySlides" src="Pics/lib1.jpg"style="width:108.5%;height:300px;">
        <img class="mySlides" src="Pics/lib2.jpg"style="width:108.5%;height:300px;">
        <img class="mySlides" src="Pics/abrd1.jpg"style="width:108.5%;height:300px;">        
        </section>
        <script>myslide();</script>
        <div id="notice">
        <!--<div id="dashboard"><img style="height:40px; border-radius:90px; margin-top:3px;" src="Pics/finger.png"><h2 style="margin-top:-40px; margin-left:55px;">Dashboard</h2></div>
        <div id="info"><img src="Pics/employee.png" style="height:40px;"><h3 style="margin-top:-45px; margin-left:60px;">Employees</h3>
        </div> -->
            
            <div id="board1" ><h2 style="margin-top:-3px;"><input type="search" placeholder="search here..."></h2></div>
                    <?php
            //this is for booking worker display
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clinch";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
            //reply
$sql1 = "SELECT booking_id,problem,worker_type,worker_name,fees,worker_reply,customer_location,customer_feedback FROM book_worker WHERE worker_id=$u AND worker_reply='pending...'";
$result = $conn->query($sql1);                
                    if ($result) {
                        while($row = $result->fetch_assoc()) {
                            echo'<div style="border:2px solid #efc9c9; margin:5px;"><h2 style="color:#664422;">'.$row["worker_name"].'<span style="font-size:20px;color:#664488;">('.$row["worker_type"].')</span></h2>
            <h3 style="color:#886644;">problem:<span style="font-size:15px;color:#664488;">'.$row["problem"].'</span></h3>
            <h3 style="color:#886644;">Address:<span style="font-size:15px;color:#664488;">'.$row["customer_location"].'</span></h3>
            <h3 style="color:#886644;">worker Reply:<span style="font-size:15px;color:#664488;"><form action="reply_send.php" method="post">
                              <table >
                                <tr><input type="hidden" name="booking_id" value="'.$row["booking_id"].'">
                                <td><textarea name="reply" placeholder="reply"></textarea></td></tr>
                                <tr><td><input type="submit"></td></tr>
                                    </table>
                                    </form></span></h3>
            </div>';
                            
                        }
                    }

$sql1 = "SELECT booking_id,problem,worker_type,worker_name,fees,worker_reply,customer_location,customer_feedback FROM book_worker WHERE (worker_id=$u AND worker_reply!='pending...') OR (customer_id=$u)";
$result = $conn->query($sql1);                
                    if ($result) {
                        while($row = $result->fetch_assoc()) {
                            echo'<div style="border:2px solid #efc9c9; margin:5px;"><h2 style="color:#664422;">'.$row["worker_name"].'<span style="font-size:20px;color:#664488;">('.$row["worker_type"].')</span></h2>
            <h3 style="color:#886644;">problem:<span style="font-size:15px;color:#664488;">'.$row["problem"].'</span></h3>
            <h3 style="color:#886644;">Address:<span style="font-size:15px;color:#664488;">'.$row["customer_location"].'</span></h3>
            <h3 style="color:#886644;">worker Reply:<span style="font-size:15px;color:#664488;">'.$row["worker_reply"].'</span></h3>
            </div>';
                            
                        }
                    }
?>
            </div> */
     /*   <!-- <div id="board2"><h2 style="background-color:#efc9c9;"> Top Companies:</h2>
            <img style="height:30px;width: 80px; "id="company" src="Pics/infosys.png">
            <img style="height:40px; width:60px;" id="company" src="Pics/dell.png">
            <img style="height:40px; width:60px;" id="company" src="Pics/hp.png">
            <img style="height:40px; width:60px;" id="company" src="Pics/wipro.png">
            <img style="height:40px; width:60px;" id="company" src="Pics/apple.png">
            <img style="height:30px;width: 100px;" id="company" src="Pics/tcs.png">
            <img style="height:30px;width: 100px;" id="company" src="Pics/google.png">
            <img style="height:30px;width: 100px;" id="company" src="Pics/Deloitte.png">
        </div> 
        <div id="board3"><h2 style="background-color:#efc9c9;">Top Indian Colleges:</h2>
            <img style="height:50px;width: 80px;" id="company" src="Pics/IIT_Madras_Logo.svg.png">
            <img style="height:50px;width: 80px;" id="company" src="Pics/iitbLogo.png">
            <img style="height:50px;width: 80px;" id="company" src="Pics/Gla.png">
            <img style="height:50px;width: 80px;" id="company" src="Pics/Amity.png">
            <img style="height:50px;width: 80px;" id="company" src="Pics/lpu-logo.png">
            <img style="height:50px;width: 80px;" id="company" src="Pics/Bits.png">
            <img style="height:50px;width: 80px;" id="company" src="Pics/Vit.png">
            <img style="height:50px;width: 80px;" id="company" src="Pics/IIT_Delhi.png">
        </div>
            
        <div id="board4"><h2 style="background-color:#efc9c9;">Top Abroad Colleges:</h2>
            
            <img style="height:50px;width: 80px;" id="company" src="Pics/Howard.png">
            <img style="height:50px;width: 80px;" id="company" src="Pics/stanford.png">
            >
            <img style="height:50px;width: 80px;" id="company" src="Pics/Duke.png">
            <img style="height:50px;width: 80px;" id="company" src="Pics/Princeton.png">
        </div> -->
            */
            
            <!-- The Modal -->
<div id="5yModal" cla8="modal">

  <!-- Mo5al content 8>
  <div class="modal-content">
    <div 5lass="modal8eader">
      <span class="close">&times;</span>
      <h1 >Book Your Worker</h1>
    </div>
    <div class="modal-body">
      <div id="div1">
        <form action="book_worker_connect.php" method="post">
            <table align="right">
                <tr>
                    <input type="hidden" name="user_id" value="<?php echo $_SESSION["uname"];?>">
                </tr>
                <tr>
                    <th>Select Worker</th>
                    <td colspan="2"> 
                        <select name="worker_type" id="sk" required>
                        <option>Select</option>   
                        <option>painter</option>
                        <option>electrician</option>
                        <option>sweeper</option>
                        <option>plumber</option>
                        <option>carpenter</option>
                        </select>
                     </td></tr>
                <tr>
                    <th>Select Location</th>
                    <td colspan="2">
                         <select name="location" required>
                        <option>Select</option>   
                        <option>agra</option>
                        <option>firozabad</option>
                         </select>
                    </td>
                </tr>
                
                <tr>
                    <th>Worker Name</th>
                    <td colspan="2">
                        <select id="name" name="worker_name" required>
                        <option>Select</option>   
                        <option>balveer singh</option>
                            <option>vikash jain</option>
                         </select>
                    </td>
                </tr>
                <tr>
                    <th>Enter Problem</th>
                    <td colspan="2"><input type="text" name="problem"></td>
                </tr>
                <tr>
                    <th>Enter Your Address</th>
                    <td colspan="2"><input type="text" name="customer_location"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="hidden" name="customer_id" value="<?php echo $u;?>"></td>
                </tr>
                <tr>
                    <th></th>
                    <td><input type="submit" value="Submit" onclick="return valid()"></td>
                     <td><input type="reset" ></td></tr>
            </table>
        </form>
        </div>
    </div>
    <div class="modal-footer">
      <h3>Query Related Help Desk -8171575996</h3>
    </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("book_worker");

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
            
            
            
            
            
<!-- The Modal -->

            <div id="myModal_profile" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h1 >My profile</h1>
    </div>
    <div class="modal-body">
      <div id="div1">
        
          <?php
          
            $sql1 = "SELECT * from customer WHERE mobile_no=$userid";
            $result = $conn->query($sql1);                
                    if ($result) {
                        $row = $result->fetch_assoc();
                    }
          
          ?>
        <table>
            <tr>
                <th style="padding-top:10px; font-size:20px;">Name:</th>
                <td style="padding-top:10px; font-size:20px;"><?php echo $row["name"]; ?></td>
                <td style="padding-top:10px; font-size:20px;" rowspan="3"><img style="width:80px;height:80px;border-radius:100px;" src="<?php echo $im; ?>"></td>
            </tr>
            <tr>
                <th style="padding-top:10px; font-size:20px;">Gender:</th>
                <td style="padding-top:10px; font-size:20px;"><?php echo $row["gender"]; ?></td>
            </tr>
            <tr>
                <th style="padding-top:10px; font-size:20px;">DOB:</th>
                <td style="padding-top:10px; font-size:20px;"><?php echo $row["dob"]; ?></td>
            </tr>
            <tr>
                <th style="padding-top:10px; font-size:20px;">Mobile No:</th>
                <td style="padding-top:10px; font-size:20px;"><?php echo $row["mobile_no"]; ?></td>
            </tr>
            <tr>
                <th style="padding-top:10px; font-size:20px;">email:</th>
                <td style="padding-top:10px; font-size:20px;"><?php echo $row["email"]; ?></td>
            </tr>
            <tr>
                <th style="padding-top:10px; font-size:20px;">address:</th>
                <td style="padding-top:10px; font-size:20px;"><?php echo $row["location"]; ?></td>
            </tr>
            <tr>
                <th style="padding-top:10px; font-size:20px;">User Type:</th>
                <td style="padding-top:10px; font-size:20px;"><?php echo $row["user_type"]; ?></td>
            </tr>
            <tr>
                <th style="padding-top:10px; font-size:20px;">Skill:</th>
                <td style="padding-top:10px; font-size:20px;"><?php echo $row["skill"]; ?></td>
            </tr>
          </table>
        </div>
    </div>
    <div class="modal-footer">
      <h3>Query Related Help Desk -8171575996</h3>
    </div>
  </div>

</div>

<script>
// Get the modal
var modal1 = document.getElementById('myModal_profile');

// Get the button that opens the modal
var btn_profile = document.getElementById("my_profile");

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal1
btn_profile.onclick = function() {
    modal1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal1
span1.onclick = function() {
    modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal1, close it
window.onclick = function(event1) {
    if (event1.target == modal1) {
        modal1.style.display = "none";
    }
}
 */
</script>            
            </div>
    </body>
</html>