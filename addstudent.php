
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

	<form method='post' class="text-center border border-light p-5 col-6 col-md-4" role="group" aria-label="Vertical button group" action="addstudent.php">

    <p class="h4 mb-4">Insert StudentDetails</p>
    <input type="text" id="defaultSubscriptionFormEmail" class="form-control mb-4" name='Name' placeholder="Name">

    <!-- Name -->
    <input type="text" id="defaultSubscriptionFormPassword" class="form-control mb-4" name='Username' placeholder="Username">

 
    <!-- Email -->
    <input type="password" id="defaultSubscriptionFormEmail" class="form-control mb-4" name='Password' placeholder="Password">

   

    <input type="text" id="defaultSubscriptionFormEmail" class="form-control mb-4" name='Semester' placeholder="Semester">

    
    <!-- Sign in button -->
    <button class="btn btn-info btn-block" type="submit" name='Submit'>Submit</button>


</form>

</body>
</html>
<?php
if(isset($_POST['Submit']))
{
    include('dbcon.php');


$Name=$_POST["Name"];
$Username=$_POST["Username"];
$Password=$_POST["Password"];
$Semester=$_POST["Semester"];

$query1="INSERT INTO student(Name,Roll_No,DOB,Semester)VALUES ('$Name','$Username','$Password','$Semester')";


if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

mysqli_query($con,$query1);
echo $query1;
header('location:addstudent.php');


}

?>