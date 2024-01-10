<?php
include('config.php');
if(isset($_POST['insert_patient'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
//     $insert_query=  "insert into admin(email,password) values('$email','$password')";
//     $result = mysqli_query($conn, $insert_query);
//     if($result){
//         echo'<script>
//         alert("Inserted succesfully");
//         </script>';
//     }
// }
$sql = "INSERT INTO admin(username,password)
			VALUES('".$username."','".$password."')";
			
			if($conn->query($sql)===TRUE){
				
				?>
				
				<?php
				// header("location:index.php");
				echo'<script>
         alert("Inserted succesfully");
         window.open("register.php");
         </script>';
				
			}else{
				echo"error:".$sql."<br>".$conn->error;
			}
			$conn->close();
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hospital</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
   <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <link  rel="stylesheet" href="style.css">
</head>
<body class="bg-light" >
    <div class="conainter-fluid bg-dark" >

    <nav class = "navbar  navbar-expand-sm navbar-center  ">  
      
<ul class ="navbar-nav">  
<li class = "nav-item">  
<a class = "nav-link text-light" href = "index.php"><b>Back</b> </a>  
</li>  



</ul>
</div>
<div class="container bg-light p-5">
    <div class="row">
        <div class="col-md-4"><img src="dataimg/Happy-Kids-in-front-of-School-Animation.gif" alt=""></div>
        <div class="col-md-4"></div>
        <div class="col-md-4 bg-warning p-3"><form action="" method="POST" class="mb-2">
<div class = "input-group">
<input type = "text" class = "form-control" name="username" value="" placeholder = "Enter Email" require>  
</div><br>
<div class = "input-group">
<input type = "text" class = "form-control" name="password" value="" placeholder = "Enter Password" require>  
</div><br>

<div class = "input-group p-1"> 

<button class="bg-info"><input type = "submit" class = "form-control bg-info " name="insert_patient" value="Register" class="">  </button>
</div><p>Already have an account?</p>
<div class = "input-group p-1"> 

<a href="login.php" class="btn btn-succesOs">Login Here</a>
</form></div>
    </div>
</div>
</div>
<footer class="bg-dark p-5"><h2 class="text-center text-light">Have a great day</h2> </footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" ></script>
</body>
</html>