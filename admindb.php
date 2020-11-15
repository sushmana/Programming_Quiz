<!--INSERT ADMIN-->
<?php

$con=mysqli_connect('localhost','root');

if($con){
	echo"connection Successful";
}else{
	echo"No Connection";
}

mysqli_select_db($con,'bsc_lab');

$Username=$_POST["Username"];
$Password=$_POST['Password'];


$query="INSERT INTO admin(Username,Password)VALUES ('$Username','$Password')";



if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

mysqli_query($con,$query,$qu);
header('location:adminregister.php');
?>