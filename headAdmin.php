<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css"> </head>


<body>
    <!-- Default form subscription -->
<form class="text-center border border-light p-5 col-6 col-md-4" role="group" method="post" action="admindb.php">
<p class="h4 mb-4">HeadAdmin Login</p>

    <!-- Name -->
    
    <input type="text" id="defaultSubscriptionFormPassword" class="form-control mb-4" placeholder="Username" name="Username">


    <input type="password" id="defaultSubscriptionFormEmail" class="form-control mb-4" placeholder="Password" name="Password">

    <!-- Sign in button -->
    <button class="btn btn-info btn-block" name="submit" type="submit">Sign Up</button>


</form>
<!-- Default form subscription -->
  
</body>

</html>
<?php
session_start();
 if(isset($_POST['Password'])){
  header('location:adminregister.php');
     }
 ?>