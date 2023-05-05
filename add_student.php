<?php include "includes/header.php"; ?> 


<html>
<head>
<title>Reg student</title>
</head>
<body>
<div class="container">
             <div class="row">
                    <div class="templatemo-line-header" style="margin-top: 0px;" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Students Entry</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                </div>

<div class="form_container">
<form action="sinsert.php" method="POST"role="form">
  <div class="container">
  <div class="row">
  <div class="col-lg-4">
  <div class="form-group">
  <lable>RegNo</lable>
   <input type="text" class="form-control" required id="regno" placeholder="RegNo"  name="regno">
          </div>
          </div>
    <div class="col-lg-4">
    <div class="form-group">
    <lable>Student Name</lable>
    <input type="text" class="form-control" required id="name"placeholder="Student name" name="name">
    </div></div></div></div>

    <div class="container">
    <div class="row">
    <div class="col-lg-4">
    <div class="form-group">
    <label>Course</label>
    <input type="text" class="form-control" required id="course" placeholder="Course" name="course"></input>
    </div></div>
    <div class="col-lg-4">
    <div class="form-group">
    <label>Academic year</label>
    <input type="text" class="form-control" required id="academy" placeholder="Academic year" name="academy"></input>
    </div></div></div></div>
      <div class="ui mini buttons col-sm-offset-3 col-sm-3">
          <button type="submit" class="ui mini positive button" name="register">Register</button>
          <div class="or"></div>
          <button type="reset" class="ui mini red button" name="back">Clear</button>
          </div> </form></div></div></body></html>

    