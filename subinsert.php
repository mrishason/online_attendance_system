<?php
$con=mysqli_connect("localhost","root","","tpsc_attendance");

$subcode=$_POST['subcode'];
$subname=$_POST['subname'];
$tname=$_POST['teacher_name'];

$sql="INSERT INTO `subjects` (`subcode`, `subname`, `teacher_name`) VALUES ('$subcode', '$subname', '$tname')";
$query=mysqli_query($con,$sql);
if($query==false){
	echo "fail to register";
}
else{
	header('location:add_subject.php');
}
?>