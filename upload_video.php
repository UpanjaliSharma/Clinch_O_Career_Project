<?php
$servername = "localhost";
$username = "root"; // when you work in your computer then use username name "root"
$password = ""; // when you work in your computer then use password Empty
$dbname = "clinch";//Type Your Database Name Here
$host = $_SERVER['DOCUMENT_ROOT'];
$currentUrl = $host;
$path = $currentUrl."/Clinch'O career/videos/";
// Create connection 
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_FILES['fleimage'])){
    $video_no=$_REQUEST["video_no"];
    $video_name=$_REQUEST["video_name"];
    $course_id=$_REQUEST["course_id"];
    
	$imagefleimage 		= $_FILES['fleimage']['name']; 
	$imagefleimage_tmp 	= $_FILES['fleimage']['tmp_name'];

	function getExtension($str) {
		$i = strrpos($str,".");
         if (!$i) { return ""; } 

         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
	}
	//choes path where you want to upload file
	echo $Path = "$path"; 
	//get image extension
	$extension = getExtension($imagefleimage); 
	//check extension
	$extension = strtolower($extension);
	if (($extension != "avi") && ($extension != "mkv") && ($extension != "mp4") ) {
			echo "only selec t jpg,jpeg,png formate";
	}
	$no = rand(1,999);
	$newfile1=$no.$imagefleimage;
	//upload image
	move_uploaded_file($_FILES["fleimage"]['tmp_name'], "$Path".$newfile1);
	
	
	//Insert Record Query 
	$sql = mysqli_query($conn,"INSERT INTO videos (video_no,video_name,video_url,course_id ) VALUES ($video_no,'$video_name','$newfile1',$course_id)") or die(mysqli_query($conn));
	//check record insert or not 
	if(mysqli_affected_rows($conn) >0) {
		   $message="Your video successfully";
            echo "<script type='text/javascript'>alert('$message');</script>";
            echo "<script type='text/javascript'>document.location.assign('instructor_course.php');</script>";
	} else {
		echo "Your image record has Not been Inserted successfully";
	}
}

?>
