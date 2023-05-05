<?php
session_start();

             if(isset($_SESSION['id'])){
              $username=($_SESSION['username']);
              $userId=($_SESSION['id']);
            }
            else{
              header("Location:login.php");
            }

 $pagetitle="Home";
 include "includes/header.php";
     
      ?>
        <div class="templatemo-welcome" id="templatemo-welcome">
            <div class="container">
                <div class="templatemo-slogan text-center">
                    <span class="txt_darkgrey">Welcome to Tpsc Attendence Management System</span>
                    <p class="txt_slogan">

            </div>
        </div>   
         <center>BENEIFITS OF THIS SYSTEM?
        <p class="txt_slogan">
        <span>&#8608;</span>  it save time and etc etc etc some more about<br/>
        Developed By Dynes Damas  with the HELP of my Supervisor ....</p>
           </center>      

    <div id="templatemo-blog">
            <div class="container">
                <div class="row">
                
                <div class="blog_box">
                    <div class="col-sm-5 col-md-6 blog_post">
                        <ul class="list-inline">
                        <li>    
                        <div class="clearfix"> </div>
                        <p class="blog_text">
					
                            </li>
                        </ul>
                    </div> <!-- /.blog_post 1 --> 
                </div>
              </div>
           </div>
    </div>
