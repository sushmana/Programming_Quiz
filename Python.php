<!DOCTYPE html>
<html lang="en">
<head>
<title>Python</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 80px;
  text-align: center;
  background: #1abc9c;
  color: white;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
}

.navbar {
  overflow: hidden;
  background-color: #333;
  position: sticky;
  position: -webkit-sticky;
  top: 0;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}


/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Active/current link */
.navbar a.active {
  background-color: #666;
  color: white;
}

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}


@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="header">
  <h1> PROGRAMMING WEB </h1>

  <p>A <b>Programming</b> website created by KKS.</p>

  <h2> WELCOME IN Python </h2>
</div>

<div class="navbar">
  <a href="web.php " class="active">Home</a>
  
  <a href="search.php">Search</a>
 
</div>

        </br><li class="nav-item">
          <a class="nav-link active" href="#"> QUESTION 1 </a>
        </li></br>
        <li class="nav-item">
          <a class="nav-link active" href="#"> QUESTION 2 </a>
        </li></br>
        <li class="nav-item">
          <a class="nav-link active" href="#"> QUESTION 3 </a>
        </li></br>
        <li class="nav-item">
          <a class="nav-link active" href="#"> QUESTION 4 </a>
        </li></br>
        <li class="nav-item">
          <a class="nav-link active" href="#"> QUESTION 5 </a>
        </li></br>
        <li class="nav-item">
          <a class="nav-link active" href="#"> QUESTION 6 </a>
        </li></br>
        <li class="nav-item">
          <a class="nav-link active" href="#"> QUESTION 7 </a>
        </li></br>
        <li class="nav-item">
          <a class="nav-link active" href="#"> QUESTION 8 </a>
        </li></br>
        <li class="nav-item">
          <a class="nav-link active" href="#"> QUESTION 9 </a>
        </li></br>
        <li class="nav-item">
          <a class="nav-link active" href="#"> quiz </a>
        </li></br>



<div class="footer">
  
</div>

</body>
</html>