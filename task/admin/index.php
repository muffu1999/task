<?php include "../db.php";
session_start();
ob_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <a href="../logout.php" class="btn btn-warning text-left">Logout</a>
	<div class=contanier>
	 <table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>image</th>
        <th>attachment</th>
      </tr>
    </thead>
    <tbody>
      <tr>
          <?php
          $query="select * from info";
          $result=mysqli_query($con,$query);
            while($row=mysqli_fetch_assoc($result))
            {
                $name=$row['name'];
                $email=$row['email'];
                $mobile=$row['mobile'];
                $image=$row['image'];
                echo "<tr>";
                echo "<td>$name</td>";
                echo "<td>$email</td>";
                echo "<td>$mobile</td>";
                echo "<td><img class='img-responsive' src=../uploads/images/$image></td>";
                echo "</tr>";
            }
          
          
          ?>
      </tr>
          </tbody>
  </table>
	</div>
</body>
</html>