<!DOCTYPE html>
<html>
    <head>
        <title>welcome</title>
        <link rel="stylesheet" type="text/css" href="login_portal.css">
        <link rel="stylesheet" type="text/css" href="my_profile.css">
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
    background-color: deepskyblue;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: deepskyblue;
    color: white;
}
        </style>
        <script>
            window.onload=function(){
            var b = document.getElementById('ut');
            b.onchange = function(){
                if(b.value=='client'){
                    document.getElementById('fe').readOnly = true;
                    document.getElementById('fe').style.backgroundColor = "black";
               }
                if(b.value=='worker'){
                    document.getElementById('fe').readOnly = false;
                    document.getElementById('fe').style.backgroundColor = "white";
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
        <div id="header"><h2 align="center" style="margin-top:5px;">HOUSEHOLD MAINTENANCE MANAGEMENT SYSTEM</h2>
            <button type="button" id="logout" onclick="confirmation()">Logout<img id="logimg" src="logout.png"></button>
        </div>
        <div class="menu">
       <div style="height:200px;"><img style="height:155px; width:155px; border-radius:300px;" src="<?php echo "$im";?>">
             <h3 align="left" style="margin-top:-5px; text-align:center;"><?php echo "$p";?>
                 <br><?php echo "$u";?></h3></div>
       <div  id="nav1">
               <ul style="margin-top:50px; list-style-type: none;">
                   <li><a href="#" class="active"><img id="im5" style="height:20px; border-radius:90px;" src="home.png">Home</a></li>
                   <li><a id="my_profile" href="#" class="active" ><img id="im5" style="height:20px; border-radius:90px;" src="profile.png">Edit Profile</a></li>
               </ul>
           </div>
       </div>
        <div id="notice">
        <div id="dashboard"><img style="height:40px; border-radius:90px; margin-top:3px;" src="finger.png"><h2 style="margin-top:-40px; margin-left:55px;">Dashboard</h2></div>
        <div id="info"><img src="employee.png" style="height:40px;"><h3 style="margin-top:-45px; margin-left:60px;">Employees</h3>
        </div>
        <div id="board1"><h1 style="background-color:deepskyblue;">Notice Board:</h1><br>
            
                               <?php
            //this is for booking worker display
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db1";
$u=$_SESSION["uname"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
            //reply
$sql1 = "SELECT name,user_id,email FROM customer WHERE mobile_no=$u";
$result = $conn->query($sql1);                
                    if ($result) {
                        while($row = $result->fetch_assoc()) {
                            echo'<div style="border:2px solid deepskyblue; margin:5px;"><h2 style="color:#664422;">'.$row["name"].'<span style="font-size:20px;color:#664488;">('.$row["user_id"].')</span></h2>
            <h3 style="color:#886644;">problem:<span style="font-size:15px;color:#664488;">'.$row["email"].'</span></h3>
            <h3 style="color:#886644;">Address:<span style="font-size:15px;color:#664488;">'.$row["email"].'</span></h3>
            </div>';
                            
                        }
                    }
?>
            
            </div>
        <div id="board2"><h2 style="background-color:deepskyblue;"> Top Companies:</h2>
            <img style="height:30px;width: 80px; "id="company" src="infosys.png">
            <img style="height:40px; width:60px;" id="company" src="dell.png">
            <img style="height:40px; width:60px;" id="company" src="hp.png">
            <img style="height:40px; width:60px;" id="company" src="wipro.png">
            <img style="height:40px; width:60px;" id="company" src="apple.png">
            <img style="height:30px;width: 100px;" id="company" src="tcs.png">
            <img style="height:30px;width: 100px;" id="company" src="google.png">
        </div>
        <div id="board3"><h2 style="background-color:deepskyblue;">Top Worker:</h2></div>
        <div id="board4"><h2 style="background-color:deepskyblue;">Top Jobs:</h2></div>
        </div>
            <!-- The Modal -->
<div id="myModal_profile" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h1 >Edit your profile</h1>
    </div>
    <div class="modal-body">
      <div id="div1">
        <table>
            <tr>
                <th style="padding-top:20px; font-size:20px;">Name:</th>
                <td style="padding-top:20px; font-size:20px;">vikash jain</td>
                <td style="padding-top:20px; font-size:20px;" rowspan="3"><img style="width:80px;height:80px;border-radius:100px;" src="profile.png"></td>
            </tr>
            <tr>
                <th style="padding-top:20px; font-size:20px;">Gender:</th>
                <td style="padding-top:20px; font-size:20px;">male</td>
            </tr>
            <tr>
                <th style="padding-top:20px; font-size:20px;">DOB:</th>
                <td style="padding-top:20px; font-size:20px;">20/02/1999</td>
            </tr>
            <tr>
                <th style="padding-top:20px; font-size:20px;">Mobile No:</th>
                <td style="padding-top:20px; font-size:20px;">8171575996</td>
            </tr>
            <tr>
                <th style="padding-top:20px; font-size:20px;">email:</th>
                <td style="padding-top:20px; font-size:20px;">vikasjain9817@gmail.com</td>
            </tr>
            <tr>
                <th style="padding-top:20px; font-size:20px;">address:</th>
                <td style="padding-top:20px; font-size:20px;">fariha firozabad</td>
            </tr>
            <tr>
                <th style="padding-top:20px; font-size:20px;">User Type:</th>
                <td style="padding-top:20px; font-size:20px;">worker</td>
            </tr>
            <tr>
                <th style="padding-top:20px; font-size:20px;">Skill:</th>
                <td style="padding-top:20px; font-size:20px;">Electrician</td>
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
var modal = document.getElementById('myModal_profile');

// Get the button that opens the modal
var btn_profile = document.getElementById("my_profile");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn_profile.onclick = function() {
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
    </body>
</html>