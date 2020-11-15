<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css"> </head>

<body>

  <button class="btn blue-gradient p-2 row-1 col-4 col-md-4" type="submit" name='Logout'><a href=logout.php>Logout</a></button>
<!--admin login-->
<form method='post' class="text-center border border-light p-5 col-6 col-md-4" role="group" aria-label="Vertical button group" >

    <p class="h4 mb-4">Register Student/Admin Dash</p>

    

    
     <button class="btn btn-info btn-block" type="submit" name='Insert'>INSERT StudentDetails</button>

      <button class="btn btn-info btn-block" type="submit" name='Update'>UPDATE StudentDetails</button>

    <button class="btn btn-info btn-block" type="submit" name='Delete'>DELETE StudentDetails</button>

    <button class="btn btn-info btn-block" type="submit" name='InsertC'>INSERT CourseDetails</button>

</form>
</body>
</html>
<?php
session_start();

if(isset($_POST['Insert'])){
  header('location:addstudent.php');
  }

if(isset($_POST['Update'])){
  header('location:updatestudent.php');
  }

if(isset($_POST['Delete'])){
  header('location:deletestudent.php');
  }

if(isset($_POST['InsertC'])){
  header('location:Course.php');
  }





if(isset($_SESSION['uid']))
{
    echo "USER ID = ".$_SESSION['uid']." LOGIN SUCCESS";
}
else{
	header('location:login.php');
}
?>
