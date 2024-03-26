<!DOCTYPE html>
<html>
    <head>
        <title>Criteria</title>
        <link rel="icon" href="Pics/login.png">
        <link rel="stylesheet" href="login.css">
        <link rel="stylesheet" href="home.css">
        <style type="text/css">
            @keyframes myani{
                0%{
                    background-image: url("Pics/deloitte.jpg");
                }
                20%{
                    background-image: url("Pics/build1.jpg");
                }
                40%{
                    background-image: url("Pics/build2.jpeg");
                }
                60%{
                    background-image: url("Pics/build3.jpg");
                }
                80%{
                    background-image: url("Pics/build4.jpg");
                }
                100%{
                    background-image: url("Pics/build5.webp");
                }
            }
            
            #background{
                animation: myani 20s linear infinite;
                width: 100%;
                height: 100%;
                position: absolute;
                top: 0;
                right: 0;
                z-index: -1;
            }
        </style>
        
    </head>
    <body>
        <div id="background"></div>
        <div id="head">
        <div id="divh1"><h3 style="margin-top:-1px;"><img style="height:19px;width:23px" src="Pics/phone.png">         9760022725</h3></div>
        <div id="divh2"><h3 style="margin-top:-3px;"><img style="height:20px;width:23px" src="Pics/email.png">vivekyadavformal@gmail.com</h3></div>
        <a href="student_portal.php"><input id="b1" type="button" value="Home" style="margin-left:60px; margin-top:2px;"></a>
    </div>
        <div id="form">
            <form  method="post" action="check_eligibility_portal.php">
                <table cellspacing="20px" align="center" id="t1">
                    <h1 align="center">Check Eligibility!!</h1>
                    
                    <td>
                            <input id="user_id" type="text" name="10th %" required maxlength="15" placeholder="10th %">
                    </td>
                    <tr>
                    <td>
                            <input id="user_id" type="text" name="12th%" required maxlength="15" placeholder="12th %">
                    </td>    
                    </tr>
                    <tr>
                    <td>
                            <input id="user_id" type="text" name="Graduation%" required maxlength="15" placeholder="Graduation %">
                    </td>    
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="submit" onclick="valid()">
                        </td>
                    </tr>
                   <!-- 
                    <tr>
                    <td><b>Not a Member ?<a href="signup.php" target="_blank" href="signup.html">Signup</a></b></td>
                    </tr>-->
                </table>
            </form>
        </div> 
    <!--    <div id="footer" style="margin-top:590px;">
        <div id="div1" align="left">
         <h3 align="center"><u>Subscribe Here</u></h3>
        <a href="https://www.facebook.com/household maintenance/" target="_blank"><img src="Pics/fb.png"style="margin:2px; width:50px; height:50px; margin-top:100px;margin-left:40px;"></a>
        <a href="https://www.instagram.com/household maintenance/?hl=en" target="_blank"><img src="Pics/instagram.png"style="margin:1px; width:50px; height:50px;margin-left:40px;"></a>
        <a href="https://twitter.com/household maintenance" target="_blank"><img src="Pics/twitter.png"style="margin:1px; width:50px; height:50px;margin-left:40px;"></a>
        <a href="https://www.youtube.com" target="_blank"><img src="Pics/youtube.png"style="margin:1px; width:50px; height:50px; margin-left:40px;"></a>
        </div> 
        <div id="div2" style="margin-left:450px;">
             <h3 align="center"><u>Quick Contact</u></h3>
            <form action="quick_contact.php" method="post">
            <table align="right" style="width:80%" id="quick_contact">
                <tr><td colspan="2"><input type="text" name="name" placeholder="Full Name"></td></tr>
                <tr><td colspan="2"><input type="tel" name="contact_no" placeholder="Mobile Number"></td></tr>
                <tr><td colspan="2"><input type="email" name="email" placeholder="Email id"></td></tr>
                <tr><td colspan="2"><textarea name="comment" placeholder="comment"></textarea></td></tr>
                <tr><td><input type="submit" ></td>
                    <td><input type="reset"></td>
                </tr>
            </table>
            </form>
        </div>
    </div>-->
    </body>
</html>