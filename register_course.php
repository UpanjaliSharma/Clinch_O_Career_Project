<html>
<head>
<title>Courses</title>
    <link rel="icon" href="Pics/icon.png">
    <link rel="stylesheet" type="text/css" href="register_course.css">
    
    <style>
     body {
        font-family: 'Tangerine', serif;
        font-size: 20px;
        text-shadow: 4px 4px 4px #aaa;
      }
    #slide{
        position: inherit;
        margin-top:100px;
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
                top: 1000px
                height:100px;
                width:100%;
                }
    </style>
</head>
    <body>
    <div id="header"><a href="home.php"><img id="logo" src="Pics/Logo.jpg"></a>
        <div id="menu" >
                <ul>
                    
                    <li style="background-color: white"><a href="#" style="color: black">Video lectures</a></li>
                    <li style="background-color: white"><a href="about_us.php" style="color: black">Practice Papers</a></li>
                    
                </ul>
        </div>
    </div>
<section id="slide">
  <img class="mySlides" src="Pics/faculty01.jpg"style="width:100%;height:400px;">
  <img class="mySlides" src="Pics/faculties02.jpg"style="width:100%;height:400px;">
  <img class="mySlides" src="Pics/faculties03.PNG"style="width:100%;height:400px;">
  <img class="mySlides" src="Pics/main4.png"style="width:100%;height:400px;">
  <img class="mySlides" src="Pics/main5.jpg"style="width:100%;height:400px;">
</section>
<script>myslide();</script>
    <div id="content">
        <li >  <h1> Best Video Lectures To Help You Score Better Marks</h1></li> 
        <p>Video Lectures are becoming a very powerful preparation tool for JEE &amp; NEET exams. Students preparing for JEE 2018, JEE 2019, NEET 2018 &amp; NEET 2019 can use video lectures to grasp the concepts and revise the chapters at the convenience of their homes. EntrancePrime offers recorded video lectures for IIT JEE &amp; NEET preparation by top Kota Faculty at very affordable fees. Students can opt for free video lecture trial for 2 days after successful signup. Physics, Chemistry and Maths/Mathematics video lectures of JEE&nbsp;and &nbsp;NEET by the Experienced faculty of Kota can be accessed over the internet or in a pen drive without the need of internet. Medical entrance exam aspirants can opt for Physics video lectures and Chemistry Video Lectures to strengthen these subjects and score higher marks.</p>
    </div>
     <div  id="nav1" >
         <div id="board1" style="position:relative;float:left;">
               <ul style="margin-top:98px;list-style-type: none;">
                   <li><a id="my_profile"  href="#" class="active"><img id="im5" style="height:20px; border-radius:90px;" src="Pics/profile.png">My Profile</a></li>
                   <li><a href="#" class="active"><img id="im5" style="height:20px; border-radius:90px;" src="Pics/mncstkr.png">Top MNC's</a></li>
                   <li><a href="#" class="active"><img id="im5" style="height:20px; border-radius:90px;" src="Pics/collgstickr.png">Top Colleges</a></li>
                   <li><a href="#" class="active"><img id="im5" style="height:20px; border-radius:90px;" src="Pics/register.png">Register course</a></li>
                   <li><a href="#" class="active"><img src="Pics/quiz.png" style="height:20px; border-radius:90px;" src="Pics/feedback.png">Quiz</a> </li>
                   <li><a href="#" class="active"><img src="Pics/help.png" style="height:20px; border-radius:90px;" src="Pics/feedback.png">Help</a> </li>
                </ul>
           </div>
        <div id="board2" style="position:relative;float:left;margin-top:70px;">
        <img src="Pics/course1.PNG">
        </div>
         <div id="board2" style="position:relative;float:left;margin-top:70px;">
        <img src="Pics/course1.PNG">
        </div>
        </div>
        
</body>
</html>