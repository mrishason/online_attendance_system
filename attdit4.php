
<?php include "includes/header.php"; ?> 
<div class="container">


              <div class="row">
                    <div class="templatemo-line-header" style="margin-top: 0px;" >
<div class="table-responsive">
<div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Attendence Details</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                 <table class="ui celled table table table-hover">
                  <thead>
                    <tr>          
                      <th>RegNo</th>
                      <th>Course</th>
                      <th>Academic year</th>
                        <th>SubCode</th>
                      <th>Week</th>
                      <th>Date</th>
                      <th>Status</th>
                     
                    </tr>
                  </thead>
<?php 
$dbcon = mysqli_connect("localhost","root","","tpsc_attendance");

$select="SELECT * FROM students WHERE course='dit4'";
$query=mysqli_query($dbcon,$select);
while($row=mysqli_fetch_assoc($query)){
	echo'<tr>';
	echo '<td>'.$row['RegNo'].'</td>';
	echo '<td>'.$row['course'].'</td>';
	echo '<td>'.$row['academic_year'].'</td>';
}
$select="SELECT * FROM subjects";
$query=mysqli_query($dbcon,$select);
while($row=mysqli_fetch_assoc($query)){
   echo'<td>'.$row['subcode'].'</td>';
 }
	echo '<td>'.$row['date'].'</td>';
	 echo'<td><input type="radio" name="present" value="P" />Present
      <input type="radio" name="present" value="A" />Absent<br/></td>';
	echo '</tr>';
}
?></table></div></div>
<button type="submit" name="save" value="Save" class="btn btn-success btn-sm">Save</button>


