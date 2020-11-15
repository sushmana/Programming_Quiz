
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

	<form method='post' class="text-center border border-light p-5 col-6 col-md-4" role="group" aria-label="Vertical button group" action="Course.php">

    <p class="h4 mb-4">Register Course</p>
    <input type="text" id="defaultSubscriptionFormEmail" class="form-control mb-4" name='Course_Name' placeholder="Course_Name">

    <!-- Name -->
    <input type="text" id="defaultSubscriptionFormPassword" class="form-control mb-4" name='Course_Code' placeholder="Course_Code">

 
    <!-- Email -->
    <input type="text" id="defaultSubscriptionFormEmail" class="form-control mb-4" name='Language' placeholder="Language">

   

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


$Course_Name=$_POST["Course_Name"];
$Course_Code=$_POST["Course_Code"];
$Language=$_POST["Language"];
$Semester=$_POST["Semester"];

$query2="INSERT INTO course(C_Code,C_Name,Language,Semester)VALUES ('$Course_Code','$Course_Name','$Language','$Semester')";


if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

mysqli_query($con,$query2);
echo $query2;
header('location:Course.php');


}

?>