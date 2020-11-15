<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css"> </head>


<body>
    <nav id="myNav" class="navbar navbar-dark bg-dark fixed-top  navbar-expand-sm"> <a class="navbar-brand" href="#">Company</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBarMain"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navBarMain">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="#intro" class="nav-link">Welcome</a></li>
                <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                <li class="nav-item"><a href="#info" class="nav-link">Info</a></li>
                <li class="nav-item"><a href="#products" class="nav-link">Products</a></li>
                <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
        </div>
      </nav>



<br>
<br>
<br>



        <div class="w-50 m-auto">
          <form action="userinfo.php" method="post">
          
          <div class="form-group">
         <label>user</label>
         <input type="text" name="user" autocomplete="off" class="form-control">
        </div>

         

         <div class="form-group">
         <label>program</label>
         <input type="text" name="program" autocomplete="off" class="form-control">
        </div>

         <div class="form-group">
         <label>Branch</label>
         <input type="text" name="Branch" autocomplete="off" class="form-control">
        </div>

         <div class="form-group">
         <label>Course_code</label>
         <input type="text" name="Course_code" autocomplete="off" class="form-control"> 
        </div>

        <div class="form-group">
         <label>Add new student</label>
         <button type="submit" name="Submit" autocomplete="off" class="form-control"> </button>
        </div>

    </div>


  
</body>

</html>