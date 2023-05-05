<?php
$conn=mysqli_connect("localhost","root","","tpsc_attendance");

$Name=$_POST['name'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$insert="INSERT INTO `teachers` (`id`, `Name`, `gender`, `email`, `phone`) VALUES (NULL, '$Name', '$gender', '$email', '$phone')";
$query=mysqli_query($conn,$insert);
if($query==false){
	echo "fail to register";
}
else{
	header('location:add_teacher.php');
}
?>