<?php
$conn=mysqli_connect("localhost","root","","tpsc_attendance");

//capture form data
$regno=$_POST['regno'];
$name=$_POST['name'];
$course=$_POST['course'];
$academy=$_POST['academy'];

$insert="INSERT INTO `students` (`RegNo`, `Name`, `course`, `academic_year`) VALUES ('$regno','$name','$course','$academy')";
$query=mysqli_query($conn,$insert);
if($query==false){
	echo "fail to register";
}
else{
	header('location:add_student.php');
}
?>