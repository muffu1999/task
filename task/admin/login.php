<?php include "../db.php";
session_start();
ob_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<div class="mydiv">
		<h4 class=text-center>Login</h4>
		<hr>
	<form action="" method="post">
		<div class="form-group">
			<label for="">Username</label>
			<input type="text" class="form-control" placeholder="enter you username"  required="required" namae="username">
		</div>
		<div class="form-group">
			<label for="">Password</label>
			<input type="password" class="form-control" placeholder="enter you password"  required="required" name="pass">
		</div>
		<div class="text-center" style="margin-top: 5px">
			<input type="submit" name="submit" class="btn btn-primary" value="login" >
			<input type="reset"  class="btn btn-primary" value="reset" style="margin-left: 15px" >
		</div>
	
	</form>
	</div>
	<?php
                    if(isset($_POST['submit']))
                    {
                        $username=$_POST['username'];
                        $password=$_POST['pass'];
                        $user=mysqli_real_escape_string($con,$username);
                        $pass=mysqli_real_escape_string($con,$password);
                        $query="select * from users where username='{$user}' and password='{$pass}'"; 
                        $select=mysqli_query($con,$query);
                        $count=mysqli_num_rows($select);
                        if($count==0)
                        {
                            echo "<script>alert(' either  username or password is not  correct');</script>";
                        }
                        else{
                        
                        
                        while($row=mysqli_fetch_array($select))
                        {
                            
                            $user_name=$row['username'];
                            $user_password=$row['user_password'];
                            $user_role=$row['user_role'];
                        }
                           
                             $_SESSION['username']=$user_name;
                             $_SESSION['role']=$user_role;
                              if(isset($_SESSION['role'])&& $_SESSION['role']=='Admin')
                              {
                             header("Location:admin/index.php");
                              }
                               else
                               {
                                header("Location:index.php");
                               }
                        
                          }
                            
                       
                        
                 
                    }
    
                     ?>
    <?php  ?>
	
</body>
</html>
