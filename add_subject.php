<?php include "includes/header.php"; ?> 


<html>
<head>
<title>Reg subject</title>
</head>
<body>
<div class="container">
             <div class="row">
                    <div class="templatemo-line-header" style="margin-top: 0px;" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Subjects Entry</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                </div>

<div class="form_container">
<form action="subinsert.php" method="POST"role="form">
  <div class="container">
  <div class="row">
  <div class="col-lg-4">
  <div class="form-group">
  <lable>Subj code</lable>
   <input type="text" class="form-control" required id="subcode" placeholder="Subject code"  name="subcode">
          </div>
          </div>
    <div class="col-lg-4">
    <div class="form-group">
    <lable>Subject Name</lable>
    <input type="text" class="form-control" required id="subname"placeholder="Subject name" name="subname">
    </div></div></div></div>

    <div class="container">
    <div class="row">
    <div class="col-lg-4">
    <div class="form-group">
    <label>Teacher name</label>
    <select type="text" class="form-control" required id="teacher_name" placeholder="Teacher name" name="teacher_name">
    <option>---select---</option>
    <?php 
    $con=mysqli_connect("localhost","root","","tpsc_attendance");
    $sql="select * from teachers";
    $query=mysqli_query($con,$sql);
    while ($row=mysqli_fetch_assoc($query)) {
      echo '<option value="'.$row['Name'].'">'.$row['Name'].'</option>';
    }
    ?>
      

    </select>
    </div></div>
   
      <div class="ui mini buttons col-sm-offset-3 col-sm-3">
          <button type="submit" class="ui mini positive button" name="register">Register</button>
          <div class="or"></div>
          <button type="reset" class="ui mini red button" name="back">Clear</button>
          </div> </form></div></div></body></html>

    