<?php
$con=mysqli_connect("localhost","root","","tpsc_attendance");

$RegNo=$_POST['regno'];
$course=$_POST['course'];
$subcode=$_POST['subcode'];
$academic_year=$_POST['academy'];
$week=$_POST['week'];
$date=$_POST['date'];
$attend=$_POST['present'];

$insert="INSERT INTO `attendance` (`id`,`RegNo`, `course`, `subcode`, `academic_year`,`week`,`date`,`attend`) 
         VALUES (NULL,'$RegNo','$course','$subcode','$academic_year','$week','$date','$attend')";

$query=mysqli_query($con,$insert);
if($query==false){
	echo "fail to register";
}
else{
	header("location:AttendenceForm.php");
}
?>