<?php 
$login=0;
$invalid=0;

if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="SELECT * FROM `registration` WHERE `username`='$username'AND `password`='$password'";
    $result=mysqli_query($conn,$sql);
    if($result){
        $num=mysqli_num_rows($result);
       if($num>0){
        //echo "login successfully ";
        $login=1;
       
        session_start();
        $_SESSION['username']=$username;
        header('location:home.php');



        }
        else{
            $invalid=1;
           // echo "invalid credential";
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
    <title>login form</title>
</head>
<body>
    <?php 
    if($login){
     echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
     <strong>success</strong>login successfully
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
       <span aria-hidden="true">&times;</span>
     </button>
   </div>';}
    
    ?>
    <?php
    if($invalid){
     echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
     <strong>sorry!</strong>invalid credential
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
       <span aria-hidden="true">&times;</span>
     </button>
   </div>';}
    
    
    ?>
    
<div class="container">

<form class="mt-5" action="login.php" method="post">
  <div class="form-row">
    <div class="form-group ścol-md-6">
      <label for="username">Username</label>
      <input type="text" class="form-control" placeholder="enter your username" name="username">
    </div>
    <div class="form-group col-md-6">
      <label for="password">Password</label>
      <input type="password" class="form-control" placeholder="Enter your password" name="password">
    </div>
  
  
  
  
   
  <button type="submit"  class="btn btn-primary container">Login</button>
</form>
</div>
</body>
</html>
