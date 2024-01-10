<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" >
    <link  rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body style="background:lightgray">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Student Management</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item active">
        <a class="nav-link" href="register.php">Admin Register </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="login.php">Admin Login </a>
      </li>
      
  
</ul>
</nav>
<div class="container p-3">
  <div class="row">
  <div class="col-sm-3 bg-warning text-center">
    <form action="index.php" method="POST">
    <div class="form-group">
        <table class="form-table m-2 " >
          <tr class="bg-success"><th><pre class="text-light"><b>Student Information</b></pre></th></tr>
          

        
       
          <tr><td class="form-control m-2">Name</td>
        <td><input type="text" class="form-control m-2" value="" name="name" Required></td></tr>
		<tr><td class="form-control m-2">Class</td>
        <td><input type="text" class="form-control m-2" value="" name="class" Required></td></tr>
        </table>
        <input type="submit" class="btn btn-success" name="submit" value="Show Details" >
        <a class="btn btn-danger" href="index.php">Cancel</a>
  
</form>
  </div>
  </div>
  <div class="col-sm-3"></div>
  <div class="col-sm-3">
    <img src="dataimg/Classes.gif" alt="" width="500px" height="500px">
  </div>
</div></div>


<?php

if(isset($_POST['submit'])){
	/*echo"<pre>";
	print_r($_POST);
	echo"</pre>";*/
	include'config.php';
	$name = $_POST['name'];
	$class = $_POST['class'];
	
	include'function.php';
	showdetails($name,$class);
}
?>
<footer class="bg-dark p-5"><h2 class="text-center text-light">Have a great day</h2> </footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" ></script>
	
	</body>
	</html>
	
