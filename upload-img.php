<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>

<body>


<div class="container">
	<div class="row">
    <form role="form" action="upload_video.php" method="post"  enctype="multipart/form-data" class="form-horizontal11">
    	<div class="col-xs-12 col-sm-12">
            <div class="form-group">
                <label >Image</label> 
                Video no:<input type="number" name="video_no"><br/>
                Video Name:<input type="text" name="video_name"><br/>
                Course Id:<input type="number" name="course_id"><br/>
                <input class="file-control"  type="file" name="fleimage" >
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12">
            <div class="form-group">
                
                <input type="submit" value="Insert Image" class="btn btn-success" />
            </div>
        </div>
    </form>    
    </div>
</div>

</body>
</html>
