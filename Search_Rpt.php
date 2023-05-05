<?php
$pagetitle="Search Report";
include "includes/header.php"; 
error_reporting(E_ALL ^ E_DEPRECATED);
$name=$_POST['name'];
$session=$_POST['session'];
$date=$_POST['date'];


include("config.php");

?>
<div class="container">
 <div class="row">
                    <div class="templatemo-line-header" style="margin-top: 0px;" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Individual Report </span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                </div>
	<div class="table-responsive">
                 <table class="ui celled table table table-hover">
                  <thead>
                    <tr>
                  
                      <th>StudentRollNumber</th>
                      <th>StudentName</th>
                      <th>Subject</th>
                      <th>Program</th>
                      <th>Semester</th>
                      <th>Date</th>
                      <th>Percentage</th>
                      
                    </tr>
                  </thead>
     <tbody>
          <?php    
            $con=mysqli_connect("localhost","root","","attendance_db");		  
            $qls=("Select (Select count(*) from tbl_attendence Where attendence='P')/ count(studentrollNumber) *100 as Percentage from tbl_attendence ");
			$query=mysqli_query($con,$qls);
			$sql=("Select * from tbl_attendence T 
inner join Student_Table st on st.std_roll_no=T.StudentRollNumber
inner join Subject_table S on t.subjectID=S.Subject_No Where st.Student_Name like '%$name%' and T.date like '%$date%' and st.Session like '%$session%'  group by S.Subject_Name ");
$query3=mysqli_query($con,$sql);
while($row=mysqli_fetch_row($query3))
{
  echo"<tr>";
           echo '<td>'. $row[1] . '</td>';
            echo '<td>'. $row[6] . '</td>';
			echo '<td>'. $row[16] . '</td>';
			echo '<td>'. $row[13] . '</td>';
			echo '<td>'. $row[14] . '</td>';
			echo '<td>'. $row[4] . '</td>';
           $sql1=("Select  (select count(*) from tbl_attendence where Attendence='P' and studentRollNumber='$row[1]' and subjectId='$row[2]')/(Select count(attendence) from tbl_attendence where studentRollNumber='$row[1]' and subjectId='$row[2]')*100 as per from tbl_attendence where studentrollNumber='$row[1]' and subjectid='$row[2]' group by per asc ");
		   $query=mysqli_query($con,$sql1);
		while ($row2=mysqli_fetch_row($query))
		   {
			   echo '<td>'. $row2[0] . '%</td>';
			   }
			   echo"</tr>";
}
           ?>
       </tbody>     
            </table>
            </div><!--table-responsive-->
            </div><!--row-->  
            </div><!--container-->    
        




