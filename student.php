
  <?php
  $pagetitle="student data";
  // include "includes/header2.php";
  include "includes/header2.php"; ?>

  
<div class="container">

            
              <div class="row">
                    <div class="templatemo-line-header" style="margin-top: 0px;" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Students Records</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                </div>
                <p><a href="add_student.php" class="ui blue tiny button "><i class="glyphicon glyphicon-plus"> </i>Insert</a></p>
                <div class="table-responsive">
                 <table class="ui celled table table table-hover">
                  <thead>
                    <tr>
                     <!--  <th>Std Id</th> -->
                      <th>RegNo</th>
                      <th>Student Name</th>
                      <th>Course</th>
                      <th>Academic year</th>
                     
                    </tr>
                  </thead>
     <tbody>
          <?php        
$con=mysqli_connect("localhost","root","","tpsc_attendance");
$select=("SELECT * FROM students");
$query=mysqli_query($con,$select);
while($row=mysqli_fetch_array($query)){
  
          echo '<tr>';

            // echo '<td>'. $post['student_id'] . '</td>';          
            echo '<td>'. $row['RegNo'] . '</td>';
            echo '<td>'. $row['Name'] . '</td>';
            echo '<td>'. $row['course'] . '</td>';
            echo '<td>'. $row['academic_year'] . '</td>';
            
            
         
            
            echo '</td>';    
           echo '</tr>';  
            }
           ?>
      </tbody>     
            </table>
            </div><!--table-responsive-->   
           </div><!--container-->
