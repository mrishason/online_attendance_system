
<?php include "includes/header2.php"; ?> 
<div class="container">
<center><button  onclick="javascript:window.print()" class="btn-print">Print</button></center> 

              <div class="row">
                    <div class="templatemo-line-header" style="margin-top: 0px;" >
<div class="table-responsive">
<div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">BTCRM 1 Attendence </span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                 <table class="ui celled table table table-hover">
                  <thead>
                    <tr>          
                      <th>RegNo</th>
                      <th>Course</th>
                      <th>SubCode</th>
                      <th>Academic year</th>
                      <th>Week</th>
                      <th>Date</th>
                      <th>Status</th>
                     
                    </tr>
                  </thead>
<?php 
$dbcon = mysqli_connect("localhost","root","","tpsc_attendance");

$select="SELECT * FROM attendance WHERE course='btcrm 1'";
$query=mysqli_query($dbcon,$select);
while($row=mysqli_fetch_assoc($query)){
	echo'<tr>';
	echo '<td>'.$row['RegNo'].'</td>';
	echo '<td>'.$row['course'].'</td>';
	echo '<td>'.$row['subcode'].'</td>';
	echo '<td>'.$row['academic_year'].'</td>';
	echo '<td>'.$row['week'].'</td>';
	echo '<td>'.$row['date'].'</td>';
	echo '<td>'.$row['attend'].'</td>';
	echo '</tr>';
}
?>

