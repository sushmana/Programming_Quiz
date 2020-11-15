
<?php 
session_start();
if (!isset($_SESSION['username'])){
     header('location:login.php');
  }
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'quizdbase');
 ?>


        
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>PHP Quizzer!</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>
  <body>
    <div id="container">
      <header>
        <div class="container">
          <h1>PHP Quizzer</h1>
  </div>
      </header> 


<div class="col-lg-g m-auto d-block" >
      <div class="container">


        <h2>Welcome <?php echo $SESSION['username']; ?>,This is a multiple choice quize to test your knowledge about something </h2>
      </div>
      <br>
     <form acction="result.php"method="post">
      <?php
     for($i=1; $i<6; $i++){
      $q = " select * from questions where question id = $i";
      $query = mysqli_query($con, $q);
      while($rows = mysqli_fetch_array($query) )  {
     ?>
    <div class="container">
       <h3 class="container-header"> <?php echo $rows['questions'] ?> </h3>
      
       <?php
      $q = " select * from answers where question ans_id = $i";
      $query = mysqli_query($con, $q);
      while($rows = mysqli_fetch_array($query) )  {
      ?>
      <div class="container-body">
       <input types="radio " names="checkquiz[]" values="<?php echo $rows['aid']; ?>">

        <?php echo $rows['answers']; ?>


       </div>
       
<?php
}
}
}
?>
         <input type="submit" name="submit" value="Submit" > 
</form> 
</div>
</div>
          <a href="logout.php" > logout </a>
    </div>
    </main>


    
  </body>
</html>

