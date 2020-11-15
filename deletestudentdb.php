<?php

$con=mysqli_connect('localhost','root');

if($con){
	echo"connection Successful";
}else{
	echo"No Connection";
}

mysqli_select_db($con,'bsc_lab');

$Username=$_POST["Roll_No"];
$Password=$_POST['Semester'];


$query="Delete from student where Roll_No = '$Username' and Semester = '$Password'";



if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

mysqli_query($con,$query,$qu);
header('location:admindash.php');
?>