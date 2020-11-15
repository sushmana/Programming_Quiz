<?php
session_start();
if(isset($_SESSION['uid']))
{
    echo "USER ID = ".$_SESSION['uid']." LOGIN SUCCESS";
}
else{
	echo"";

}

?>


<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css"> </head>
<body>
<!-- Default form subscription -->
<form method="post" class="text-center border border-light p-5" action="deletestudentdb.php">

    <p class="h4 mb-4">Delete Details</p>

    
    <!-- Name -->
    <input type="text" id="defaultSubscriptionFormPassword" class="form-control mb-4" placeholder="Roll_No" name="Roll_No">

    <!-- Email -->
    <input type="text" id="defaultSubscriptionFormEmail" class="form-control mb-4" placeholder="Semester" name="Semester">

    <!-- Sign in button -->
    <button class="btn btn-info btn-block" type="submit">Delete</button>


</form>
</body>
</html>
