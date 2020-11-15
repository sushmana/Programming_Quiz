<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design for Bootstrap</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!-- start your project here-->


<!--navigation bar-->
<!-- Image and text -->
<nav class="navbar navbar-dark primary-color">
  <a class="navbar-brand" href="#">
  </a>
</nav>





<!--Search Navigantion-->

<nav class="navbar navbar-dark default-color">
  <form class="form-inline" method="post">
    <div class="md-form my-0 ">
      <input class="form-control mr-sm-2 " type="text" placeholder="Search" aria-label="Search">
    </div>
    <button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Search</button>
    <ul class="sign_in">


      <div id="box">
     <button id="button" class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" name="Login" type="submit">Admin_Login</button>
   </div>
    <div id="box">
     <button id="button" class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" name="ogin" type="submit">Student_Login</button>
   </div>

   <div id="box">
     <button id="button" class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" name="RegisterAdmin" type="submit">RegisterAdmin</button>
   </div>

   </div>
  </form>
</nav>



<br>
​



<img src="./owl.png" class="img-fluid img-thumbnail float-right" width="500px" height="200px">

<!-- Basic dropdown -->
<a class="btn btn-primary dropdown-toggle mr-4" type="button" data-toggle="dropdown" aria-haspopup="true"
  aria-expanded="false">Basic dropdown</a>

<div class="dropdown-menu">
  <a class="dropdown-item" href="#">Action</a>
  <a class="dropdown-item" href="#">Another action</a>
  <a class="dropdown-item" href="#">Something else here</a>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="#">Separated link</a>
</div>
<!-- Basic dropdown -->

<div class="row">

  <div class="btn-group-vertical col-6 col-md-4" role="group" aria-label="Vertical button group">
    <button type="button" class="btn peach-gradient">Semester 1</button>
    <button type="button" class="btn purple-gradient">Semester 2</button>
    <button type="button" class="btn blue-gradient">Semester 3</button>
    <button type="button" class="btn aqua-gradient">Semester 4</button>
    <button type="button" class="btn young-passion-gradient">Semester 5</button>
    <button type="button" class="btn morpheus-den-gradient">Semester 6</button>

  </div>
  
  
</div>

 <picture>
  <source srcset="x" type="image/svg+xml">
 
</picture>




 <!-- End your project here-->

  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>
</html>
<?php
session_start();

if(isset($_POST['Login'])){
  header('location:login.php');
  }
  if(isset($_POST['ogin'])){
  header('location:Student_Login.php');
  }
  if(isset($_POST['RegisterAdmin'])){
  header('location:headAdmin.php');
  }
?>