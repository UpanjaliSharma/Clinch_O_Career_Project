<!DOCTYPE html>
<html>
    <head>
        <title>Signup</title>
        <link rel="stylesheet" type="text/css" href="signup.css">
        <style>
            .id0{
                width:95%;
                border: 1px solid #b2b2b2;
                height: 30px;
                margin-left: 10px;
                border-radius: 5px;
            }
        </style>
        <script>
            window.onload=function(){
            var b = document.getElementById('ut');
            b.onchange = function(){
                if(b.value=='Student'){
                    document.getElementById('skill').readOnly = true;
                    document.getElementById('skill').style.backgroundColor = "black";
               }
                if(b.value=='Instructor'){
                    document.getElementById('skill').readOnly = false;
                    document.getElementById('skill').style.backgroundColor = "white";
                }
            }
            }
            function valid(){
            var pass=document.getElementById('p');
            var cpass=document.getElementById('cp');
            var m=document.getElementById('mob');
            var u = document.getElementById('ut');
            var v = document.getElementById('sk');
            var w = document.getElementById('location');
            if(m.value.length!=10){
                alert('invalid mobile number');
                return false;
            }
            if(pass.value!=cpass.value){
                alert('password did not match with the confirm password!');
                return false;
            }
                if(u.value=='client'){
                    if(v.value!='choose me if you are a client!' || v.value=='Select'){
                        alert('choose last option');
                        return false;
                    }
                }
                if(u.value=='worker'){
                    if(v.value=='choose me if you are a client!' || v.value=='Select'){
                        alert('choose any skill');
                        return false;
                    }
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
        <div class="d0">
            <a href="home.php" style="margin-left: 1150px;"><input type="button" value="Home" class="b"></a>
            <a href="login.php"><input type="button" value="Login" class="b"></a>
        </div>
        <h1 style="margin-left: 900px;">CREATE YOUR ACCOUNT</h1>
        <div id="d1">
        <form  method="post" action="signup_connect.php">
            <table id="t1">
                
                 <tr>
                    <td><b>Name</b></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: left;"><input class="id0" name="name" type="text" required></td>
                </tr>
                <tr>
                    <td><b>Create a password</b></td>
                </tr>
                 <tr>
                    <td colspan="2" style="text-align: left;"><input class="id0" id="p" name="password" type="password" required></td>
                </tr>
                <tr>
                    <td><b>Confirm your password</b></td>
                </tr>
                 <tr>
                    <td colspan="2" style="text-align: left;"><input class="id0" id="cp" name="confirm_password" type="password" required>
                    </td>
                </tr>
                 <tr>
                    <td><b>Gender</b></td>
                </tr>
                 <tr>
                     <td colspan="2" style="text-align: left;"> 
                        <select class="id0" name="gender">
                         <option>Select</option>   
                         <option>Male</option>
                         <option>Female</option>
                         <option>Rather not say</option>
                         </select>
                     </td>
                </tr>
                <tr>
                        <td><b>Date of birth</b></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: left;"><input class="id0" name="date_of_birth" type="date" required></td>
                </tr>
                <tr>
                    <td><b>Mobile phone</b></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: left;"><input id="mob" class="id0" name="mobile_no" type="tel" maxlength="10" required></td>
                </tr>
                 <tr>
                    <td><b> your current E-mail address</b></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: left;"><input class="id0" name="email" type="email" required></td>
                </tr>
                
                <tr>
                    <th>user type</th></tr>
                <tr>
                    <td colspan="2"> 
                        <select  class="id0" name="user_type" id="ut" required>
                        <option>Select</option>   
                        <option>Student</option>
                        <option>Instructor</option>
                         </select>
                     </td></tr>
                <tr>
                    <th>Educational Qualification</th>
                </tr>
                <tr>
                    <td colspan="2"> 
                        <select class="id0" name="qualification" id="sk" required>
                        <option>Select</option>   
                        <option>Graduate</option>
                        <option>Intermediate</option>
                        <option>High School</option>
                    <!--    <option>plumber</option>
                        <option>carpenter</option>
                        <option>choose me if you are a Student</option> -->
                         </select>
                     </td></tr>
                <tr>
                    <th>Skill</th>
                </tr>
                
                <tr>
                    <td colspan="2"><input class="id0" id="skill" type="text" name="skill" maxlength="50" minlength="2" required/></td></tr>
                <tr>
                    <th>Address</th>
                </tr>
                <tr>
                    <td colspan="2">
                        <select class="id0" id="location" name="address" required>
                        <option>Select</option>   
                        <option>Andhrapradesh</option>
                        <option>Bihar</option>
                        <option>Goa</option>
                        <option>Haryana</option>
                        <option>Jharkhand</option>
                        <option>Kerala</option>
                        <option>Uttarpradesh</option>
                         </select>
                    </td>
                </tr>
                
                <tr>
                    <th>upload an image:</th>
                </tr>
                 <tr>
                     <td><input class="id0" type="file" name="image"></td>
                </tr>
                
                 
                 <tr>
                    <td><input id="sub" type="submit" value="Register" onclick="return valid()"></td>
                     <td><input id="res" style="margin-right:80px;" type="reset"></td>
                     
                </tr>
            </table>
        </form>
        </div>
        <div id="d2">
            <h1 align="center" style="margin-top: -35px;">Get Yourself Registered!</h1>
        </div>
    </body>
</html>