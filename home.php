<?php 
session_start();
if(!isset($_SESSION['username']))
{
    header('location:signup.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >

</head>
<body>
    <h1 class="text-center text-success">welcome <?php echo $_SESSION['username']?></h1>
    <div>
        <a href="logout.php"  class="btn btn-primary">Logout</a>
</div>
    
</body>
</html>