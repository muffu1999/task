<?php include "db.php";
session_start();
ob_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Information</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="mydiv">
		<h4 class=text-center>Information</h4>
		<hr>
	<form action="" method="post"  enctype="multipart/form-data">
		<div class="form-group">
			<label for="">Name</label>
			<input type="text" class="form-control" placeholder="enter you name"  required="required" name="name">
		</div>
		<div class="form-group">
			<label for="">email</label>
			<input type="email" class="form-control" placeholder="enter you email"  required="required" name="email">
		</div>
		<div class="form-group">
			<label for="">mobile</label>
			<input type="text" class="form-control" placeholder="enter you name" maxlength="10" required="required" name="mobile">
		</div>
		 <div class="form-group">
        <label for="">Image</label>
        <input type="file" name="image">
         <div class="form-group">
        <label for="">Attachement</label>
        <input type="file" name="attachment">

		<div class="text-center" style="margin-top: 5px">
			<input type="submit" name="submit" class="btn btn-primary" value="Add" >
			<input type="reset"  class="btn btn-primary" value="reset" style="margin-left: 15px" >
		</div>
		</div>
	</div>
		
	</form>
    </div>
    <?php
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        
    $image=$_FILES['image']['name'];
    $image_temp=$_FILES['image']['tmp_name'];
    move_uploaded_file($post_image_temp,"uploads/images/$post_image");
    $attach=$_FILES['attachment']['name'];
    $attach_temp=$_FILES['attachment']['tmp_name'];
    move_uploaded_file($post_image_temp,"uploads/images/$post_image");
        $query="insert into info(name,email,mobile,image,attachment) values('$name','$email','$mobile','$image','$attach')";
        $result=mysqli_query($con,$query);
        if($result)
    {
        echo "<script>alert('record inserted')</script>";
    }
    }
    
    ?>
</body>
</html>