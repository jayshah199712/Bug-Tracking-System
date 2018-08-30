<?php
session_start();
require 'css/css.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Medico</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="./js/jquery.smoothwheel.js"></script>
   <script>
       $(document).ready(function(){
           // $("#wrapper1").smoothWheel()
            $("#cover123").fadeIn();
            // $("#cover123").slideDown("1000");
       });

   </script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */

     /* #wrapper1{
            overflow:auto;
            -webkit-overflow-scrolling: touch;
            position:relative;
    } */


    .navbar {
      margin-bottom: 0;
      border-radius: 5px;
    }


    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}

    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }

    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }
  </style>
</head>
<body style="background-image: url('./img/trial2.jpg');background-size:content;">
<!-- <div id="wrapper1"> -->




<nav class="navbar navbar-inverse" style="background-color:rgb(6,80,115)">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Home</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="report.php">Report Bug</a></li>
        <li><a href="status.php">Status Reports</a></li>
        <li><a href="project.php">Explore Projects</a></li>
        <li><a href="admin.php">Contact Administrator</a></li>
        <li><a href="details.php">About us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">

        <?php
        if(isset($_SESSION['username'])){

          echo "<li><a href='./test-login/index.html'><span></span>Welcome" . " ". $_SESSION['username'] . "</a></li>";
          echo "<li><a href='./test-login/logout.php'><span class='glyphicon glyphicon-log-in'></span>Logout</a></li>";
        }
        else {
          echo "<li><a href='./test-login/index.html'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
        }

         ?>


      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-sm-2">
      <div class="thumbnail">
      <a href="project.php">
        <img src="./img/side1.jpg" alt="Projects" style="width:100%">
        <div class="caption">
          <p>Explore through various registered Projects</p>
        </div>
      </a>
    </div>
    <div class="thumbnail">
    <a href="report.php">
      <img src="./img/side3.jpg" alt="Report" style="width:100%">
      <div class="caption">
        <p>Found a bug ?? Report it here to get it solved by our team of best Developers</p>
      </div>
    </a>
  </div>
  <div class="thumbnail">
  <a href="doctor.php">
    <img src="./img/side2.jpg" alt="Status" style="width:100%">
    <div class="caption">
      <p>Check status for all your reported bugs here !!</p>
    </div>
  </a>
</div>
    </div>
    <div class="col-sm-8 text-center" style="background-color:white">
      <h1>Bug Tracking System</h1>
      <h3>The future of Quality Assurance</h3>
      <br>
      <img src="./img/main1.jpg" class="img-rounded img-responsive" alt="Main Image">
      <hr>
      <div class="text-left">
        <p style="font-size:200%">The Bug Tracking System provides a platform to all Software Testers and Developers
          to make their respective projects as Bug free as possible.
          This system also provides a ton of resoures to use for all users with extremely easy to interface.
        </p>
      </div>
      <br>
    </div>
  </div>
</div>

<footer class="container-fluid text-center" style="background-color:rgb(6,80,115)">
  <p>The Complete Bug Tracking System</p>
</footer>
<!-- </div> -->
</body>
</html>
