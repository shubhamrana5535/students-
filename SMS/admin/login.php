<?php
include'titleheader.php';

?>
<?php
session_start();
include'config.php';
if(isset($_POST['submit'])){
    $user = $_POST['username'];

    $pwd = $_POST['password'];
   
    $query = "SELECT* FROM arun WHERE email='$user' && password ='$pwd' " ;
    $data = mysqli_query($conn,$query);
    $res = mysqli_num_rows($data);
    $row = mysqli_fetch_array($data);
	
	if($row['email'] === $user  && $row['password'] === $pwd){
		echo"login";
		echo $_SESSION['email'] = $row['email'];
		echo $_SESSION['password'] = $row['password'];
		header("location:newpage.php");
		exit();
	}
	else{
		echo"problem";
}}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
    <link  rel="stylesheet" href="css/style.css">
    <title>Hello, world!</title>
  </head>
  <body style="background:#DAF7A6">
  <div class="container p-4">
<div class="row">
<div class="col-md-4 text-white" style="background:#581845">
<form name="" action="" method="POST">
<div class="form-group">
<label><b>Username</b></label>
<input type="text" value="" name="username" class="form-control">
</div>
<div class="form-group">
<label><b>Password</b></label>
<input type="text" value="" name="password" class="form-control">

</div>
<input class="btn btn-success" type="submit" value="submit" name="submit"><br><br>
</form>
</div>
<div class="col-md-4" ></div>
<div class="col-md-4">
<img src="adminimg/050-GDU-MET-Blog-Prom-Animation-JH_1.gif" alt="" height="400px" width="400px">

</div>
</div>
</div><br>

<section class="bg-info  text-center text-warning p-5 ">
    <h3>
      Thanks to you
    </h3>
  </section>

        
    

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" ></script>
</body>
</html>

	