<?php
$con=mysqli_connect('localhost','root');

if($con){
	echo"connection Successful";
}else{
	echo"No Connection";
}
mysqli_select_db($con,'bsc_lab');

?>
