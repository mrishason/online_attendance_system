
<?php
 $pagetitle="Subjects Information";
 include "includes/header2.php"; ?>


<div class="container">


              <div class="row">
                    <div class="templatemo-line-header" style="margin-top: 0px;" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Subjects Details</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                </div>
               <p><a href="add_subject.php" class="ui blue tiny button "><i class="glyphicon glyphicon-plus"> </i>Insert</a></p>
                <div class="table-responsive">
                 <table class="ui celled table table table-hover">
                  <thead>
                    <tr>          
                      <th>Subject Code</th>
                      <th>Subject Name</th>
                      <th>Teacher Name</th>
                     
                    </tr>
                  </thead>
      <tbody>
          <?php        
            $conn=mysqli_connect("localhost","root","","tpsc_attendance");
            $sql="SELECT * FROM subjects";
            $query=mysqli_query($conn,$sql);
            while($post=mysqli_fetch_array($query)){
  
            echo '<tr>';        
            echo '<td>'. $post['subcode'] . '</td>';
            echo '<td>'. $post['subname'] . '</td>';
            echo '<td>'. $post['teacher_name'] . '</td>';
           
            }
           ?>
      </tbody>     
             </table>



</div> <!--table-responsive-->
</div><!--container-->

