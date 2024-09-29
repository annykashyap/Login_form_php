<?php

$user=0;
$success=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';

    $username=$_POST['username'];
    $password=$_POST['password'];
   /* $sql="INSERT INTO `registration`(`username`,`password`)VALUES('$username','$password')";
$result=mysqli_query($conn,$sql);
if($result){
    echo "signed up successfully";
}
else{
    die(mysqli_error($conn));
}*/

$sql="SELECT * FROM `registration` WHERE username='$username'";
$result=mysqli_query($conn,$sql);
if($result){
    $num=mysqli_num_rows($result);
    if($num>0){
       // echo "user already exist";
        $user=1;
    }
    else{
        $sql="INSERT INTO `registration`(`username`,`password`)VALUES('$username','$password')";
$result=mysqli_query($conn,$sql);
if($result){
    //echo "signed up successfully";
    $success=1;
    header('location:login.php');
}
else{
    die(mysqli_error($conn));

    }
}
}
}






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
    <title>sign up form</title>
</head>
<body>
    <?php
    if($user){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>oh no sorry!</strong> user already exist
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
    
    
    ?>
<?php
    if($success){
        echo '<div class="alert alert-successr alert-dismissible fade show" role="alert">
        <strong>success</strong> user signed up successfully
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';

    }
    
    
    ?>


<div class="container">

<form class="mt-5" action="signup.php" method="post">
  <div class="form-row">
    <div class="form-group ścol-md-6">
      <label for="username">Username</label>
      <input type="text" class="form-control" placeholder="enter your username" name="username">
    </div>
    <div class="form-group col-md-6">
      <label for="password">Password</label>
      <input type="password" class="form-control" placeholder="Enter your password" name="password">
    </div>
  
  
  
  
   
  <button type="submit"  class="btn btn-primary container">Sign up</button>

</form>
</div>

    
</body>
</html>