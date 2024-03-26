    <!DOCTYPE html>
<html>
<head>
    <title>HOME PAGE</title>
    <link rel="icon" href="Pics/icon.png">
    <link rel="stylesheet" type="text/css" href="home.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
    <style>
     body {
        font-family: 'Tangerine', serif;
        font-size: 20px;
        text-shadow: 4px 4px 4px #aaa;
      }
        .mail{
            font-family: serif;
            
        }
    </style>
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
                height:200px;
                width:100%;
            }
    </style>
</head>
<body>
    <div id="head">
        <div id="divh1" style="width:36%;"><h3 style="margin-top:-1px;"><img style="height:15px;width:13px" src="Pics/phone.png">         7017024256</h3></div>
        <div id="divh2" class="mail" style="width:36%;"><h3 style="margin-top:-4px;"><img style="height:20px;width:23px" src="Pics/email.png">upanjalisharma@gmail.com</h3></div>
        <a href="login.php" target="_self"><input type="button" name="login" value="Login" class="b1"></a>
        <a href="signup.php" target="_self"><input type="button" name="signup" value="Signup" class="b1"></a>
        </div>
    <div id="header"><a href="home.php"><img id="logo" src="Pics/Logo.jpg"></a>
        <div id="menu" >
                <ul>
                    <li style="background-color: white"><a href="home.php" style="color: black">Home</a></li>
                    <li style="background-color: white"><a href="about_us.php" style="color: black">About us</a></li>
                    <li style="background-color: white"><a href="#footer" style="color: black">Contact us</a></li>
                </ul>
        </div>
    </div>
<section id="slide">
  <img class="mySlides" src="Pics/main1.jpg"style="width:100%;height:500px;">
  <img class="mySlides" src="Pics/main2.jpg"style="width:100%;height:500px;">
  <img class="mySlides" src="Pics/main3.jpg"style="width:100%;height:500px;">
  <img class="mySlides" src="Pics/main4.png"style="width:100%;height:500px;">
  <img class="mySlides" src="Pics/main5.jpg"style="width:100%;height:500px;">
</section>
<script>myslide();</script>
    
    <div id="slots">
        <br>
        <h2 align="center";><u>Courses</u></h2>
        
        <a href="https://www.youtube.com/watch?v=Wtv-iRnWTIY&index=8&list=PLEiPMJpUdbj6a2p9Pt6tBdJhcqmWgX7Oa" target="_blank"><img src="Pics/php.jpg"style="margin:2px; width:250px; height:250px; margin-top:20px;margin-left:120px;"></a>
          
        <a href="https://www.youtube.com/watch?v=9SVw6u5Bt1Y" target="_blank"><img src="Pics/jquery.png"style="margin:1px; width:250px; height:250px;margin-left:40px;"></a>
        
        <a href="https://www.youtube.com/watch?v=GvUTqsAm9vE&index=9&list=PLEiPMJpUdbj6a2p9Pt6tBdJhcqmWgX7Oa" target="_blank"><img src="Pics/csshtml.jpg"style="margin:1px; width:250px; height:250px;margin-left:40px;"></a>
            
        <a href="https://www.youtube.com/watch?v=TwVkNgE2dOc&list=PLEiPMJpUdbj4CsGmenfA2x7wcMKm3xQxB" target="_blank"><img src="Pics/sql.png"style="margin:1px; width:250px; height:250px; margin-left:40px;"></a>
      
          
    </div>
    
    
    
    <div id="footer">
        <div id="div1">
         <h3 align="center"><u>Subscribe Here</u></h3>
        <a href="https://www.facebook.com/household maintenance/" target="_blank"><img src="Pics/fb.png"style="margin:2px; width:50px; height:50px; margin-top:100px;margin-left:40px;"></a>
        <a href="https://www.instagram.com/household maintenance/?hl=en" target="_blank"><img src="Pics/instagram.png"style="margin:1px; width:50px; height:50px;margin-left:40px;"></a>
        <a href="https://www.linkedin.com/in/upanjalisharma/" target="_blank"><img src="Pics/twitter.png"style="margin:1px; width:50px; height:50px;margin-left:40px;"></a>
        <a href="https://www.youtube.com" target="_blank"><img src="Pics/youtube.png"style="margin:1px; width:50px; height:50px; margin-left:40px;"></a>
        </div>
        <div id="div2">
             <h3 align="center"><u>Quick Contact</u></h3>
            <form action="quick_contact.php" method="post">
            <table align="center" style="width:80%" id="quick_contact">
                <tr><td colspan="2"><input type="text" name="name" placeholder="Full Name"></td></tr>
                <tr><td colspan="2"><input type="tel" name="mobile_no" placeholder="Mobile Number"></td></tr>
                <tr><td colspan="2"><input type="email" name="email_id" placeholder="Email id"></td></tr>
                <tr><td colspan="2"><textarea name="comment" placeholder="comment"></textarea></td></tr>
                <tr><td><input type="submit" ></td><td><input type="reset" ></td></tr>
            </table>
            </form>
        </div>
        <div id="div3">
        <h3 align="center"><u>Here you can find more</u></h3>
        
        </div>
    </div>
</body>
</html>