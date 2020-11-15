<!--admin login-->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css"> </head>


<body>
<!--admin login-->
<form method='post' class="text-center border border-light p-5 col-6 col-md-4" role="group" aria-label="Vertical button group" >

    <p class="h4 mb-4">Student Login</p>

    <!-- Name -->
    <input type="text" id="defaultSubscriptionFormPassword" class="form-control mb-4" name='Username' placeholder="Username">

    <!-- Email -->
    <input type="password" id="defaultSubscriptionFormEmail" class="form-control mb-4" name='Password' placeholder="Password">

    <!-- Sign in button -->
    <button class="btn btn-info btn-block" type="submit" name='Sign_in'>Sign in</button>


</form>

  
</body>

</html>

<?php

$con=mysqli_connect('localhost','root');

if($con){
    echo"connection Successful";
}else{
    echo"No Connection";
}
mysqli_select_db($con,'bsc_lab');


if(isset($_POST['Sign_in'])){
    
$Username=$_POST['Username'];
$Password=$_POST['Password'];
$query="Select * from student where Roll_No='$Username' AND DOB='$Password'";
$run=mysqli_query($con,$query);
if ( false===$run) {
  printf("error: %s\n", mysqli_error($con));
}
$row=mysqli_num_rows($run);
if($row<1)
{ 
    ?>
    <script type="text/javascript">
        alert("Wrong user");
        window.open("Student_Login.php",'_self');
    </script>
    <?php
}
else{
    $data=mysqli_fetch_assoc($run);
    echo $data;
    $id=$data['S_no'];
    $_SESSION['uid']=$id;
    header('location:home(web) page.php');
}

}
?>