<?php 
session_start();
$user_id=$_SESSION["id"];
$course_name=$_POST["course_name"];
$start_date=$_POST["start_date"];
$pay_method=$_POST["pay_method"];

$db=new mysqli ("127.0.0.1","root","","korochki");
$q="INSERT INTO courses (user_id,course_name,start_date,pay_method) VALUES ('$user_id','$course_name','$start_date','$pay_method')";
$db->query($q);
?>

 <script>
 	location.href="../pages/dashboard.php"
 </script>