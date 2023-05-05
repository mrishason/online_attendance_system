<?php include "includes/header.php"; ?> 


<html>
<head>
<title>Reg Teacher</title>
</head>
<body>
<div class="container">
             <div class="row">
                    <div class="templatemo-line-header" style="margin-top: 0px;" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Teacher Entry</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                </div>

<div class="form_container">
<form action="tinsert.php" method="POST"role="form">
  <div class="container">
  <div class="row">
  <div class="col-lg-4">
  <div class="form-group">
  <lable>Name</lable>
   <input type="text" class="form-control" required id="name" placeholder="Name"  name="name">
          </div>
          </div>
    <div class="col-lg-4">
    <div class="form-group">
    <lable>Gender</lable>
    <select class="form-control" required id="gender" name="gender">
    <option>---select---</option>
    <option>Male</option>
    <option>Female</option>
    </select>
    </div></div></div></div>

    <div class="container">
    <div class="row">
    <div class="col-lg-4">
    <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" required id="email" placeholder="Email" name="email"></input>
    </div></div>
    <div class="col-lg-4">
    <div class="form-group">
    <label>Phone</label>
    <input type="number" class="form-control" required id="phone" placeholder="Phone number" name="phone"></input>
    </div></div></div></div>
      <div class="ui mini buttons col-sm-offset-3 col-sm-3">
          <button type="submit" class="ui mini positive button" name="register">Register</button>
          <div class="or"></div>
          <button type="reset" class="ui mini red button" name="back">Clear</button>
          </div> </form></div></div></body></html>

    