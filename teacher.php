
<?php
 $pagetitle="Teacher Records";
 include "includes/header.php"; ?>
  


<div class="container">


              <div class="row">
                    <div class="templatemo-line-header" style="margin-top: 0px;" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Teacher Record</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                </div>
               <p><a href="add_teacher.php" class="ui blue tiny button "><i class="glyphicon glyphicon-plus"> </i>Insert</a></p>
                <div class="table-responsive">
                 <table class="ui celled table table table-hover">
                  <thead>
                    <tr>
                  
                      <th>Name</th>
                      <th>Gender</th>
                      <th>Email</th>
					            <th>Phone</th>
                    
                    </tr>
                  </thead>
     <tbody>
          <?php        
          $con=mysqli_connect("localhost","root","","tpsc_attendance");
		  $sql="SELECT * FROM teachers";
		  $query=mysqli_query($con,$sql);
		  
		  while($row=mysqli_fetch_array($query))
		  {
  
          echo '<tr>';

                     
            echo '<td>'. $row['Name'] . '</td>';
            echo '<td>'. $row['gender'] . '</td>';
            echo '<td>'. $row['email'] . '</td>';
            echo '<td>'. $row['phone'] . '</td>';
           
            
            
            
            
            echo "</div>";
            echo '</td>';    
           echo '</tr>';  
            }
           ?>
      </tbody>     
            </table>
            </div><!--table-responsive-->
            </div><!--row-->   
           </div><!--container-->	  

