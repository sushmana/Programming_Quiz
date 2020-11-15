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
<form method="post" class="text-center border border-light p-5" action="updatestudent.php">

    <p class="h4 mb-4">UpdateDetails</p>

    
    <!-- Name -->
    <input type="text" id="defaultSubscriptionFormPassword" class="form-control mb-4" placeholder="Roll_No">

    <!-- Email -->
    <input type="text" id="defaultSubscriptionFormEmail" class="form-control mb-4" placeholder="Semester">

    <!-- Sign in button -->
    <button class="btn btn-info btn-block" type="submit">Search</button>


</form>
</body>
</html>
<table>
	<tr>
		<th>S_No</th>
		<th>Name</th>
		<th>Roll_No</th>
		<th>DOB</th>
		<th>Semester</th>
</tr>
</table>


<?php
if(isset($_POST['submit']))
{
	include('dbcon.php');
	$Roll_No=$_POST['Roll_No'];
	$Semester=$_POST['Semester'];
	$sql="Select from student WHERE Roll_No='$Roll_No' AND Semester='$Semester'";
	$run=mysqli_query($con,$sql);

if(mysqli_num_rows($run)<1){
	echo"<tr><td>NO RECORD FOUND</td></tr>";
}
else{
	$count=0;
	while($data=mysqli_fetch_assoc($run))
	{
		$count++;
		?>

	<tr>
		<th><?php echo $count; ?></th>
		<th><?php echo $data['Name']; ?></th>
		<th><?php echo $data['Roll_No']; ?></th>
		<th><?php echo $data['DOB']; ?></th>
		<th><?php echo $data['Semester']; ?></th>
</tr>

	<?php	
	}
}

}
?>

