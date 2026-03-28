<?php 
$login=$_POST['login'];
$password=$_POST['password'];
$full_name=$_POST['full_name'];
$phone=$_POST['phone'];
$email=$_POST['email'];

$db=new mysqli ("127.0.0.1","root","","korochki");

$q="INSERT INTO users (login,password,full_name,phone,email) VALUES ('$login','$password','$full_name','$phone','$email')";

$db->query($q);
 ?>