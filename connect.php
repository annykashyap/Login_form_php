<?php
$hostname="localhost";
$username="root";
$password="";
$database="php_project";
$conn=mysqli_connect($hostname,$username,$password,$database);
if(!$conn){
     die(mysqli_query("connection uncessefull"));
}
/*
else{
    die(mysqli_query("connection uncessefull"));

}*/


?>