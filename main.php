<?php 
session_start();
header('location:signin.html');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'userregistration');

$name = $_POST['user'];
$pass = $_POST['password'];
$email = $_POST['email'];

$s = "select * from usertable where name ='$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
  echo"user exist";
}else{
  $reg= " insert into usertable(name , password , email) value ('$name','$pass','$email')";
  mysqli_query($con,$reg);
  echo"registration success";
}

?>