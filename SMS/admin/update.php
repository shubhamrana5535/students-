<?php
session_start();
if(isset($_SESSION['uid'])){
	echo"";
}else{
	header("location:../login.php");
}
?>

<?php
include'titleheader.php';
?>


<?php
include_once 'config.php';

        $id =$_GET['id'];
      if(isset($_POST['update'])){
		  echo"<pre>";
 print_r($_POST);
  echo"</pre>";
  $id =$_POST['id'];
  $name = $_POST['name'];
  //$image = $_POST['image'];
  $number =$_POST['number'];
  $class = $_POST['class'];
  $email = $_POST['email'];
  $password = $_POST['password'];
   
  
  
  $query = mysqli_query($conn, "UPDATE arun SET name='$name',number='$number',class='$class',email='$email',password='$password' WHERE id= $id");
		
		if ($query == 1) {
   header('location: newpage.php');
} else {
  echo "Error updating record: ";
}
}

			$results = mysqli_query($conn,"SELECT * FROM arun WHERE id= $id " );
$row1 = mysqli_fetch_array($results);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
    <link  rel="stylesheet" href="style.css">
<body style="background:#839192 ">
<div class="container p-4">
<div class="row">
<div class="col-md-4 text-white" style="background:#B9770E ">
<form  action="update.php" method="POST" enctype="multipart/form-data">
<h3>Update data</h3>
 <div class="form-group">
 <input type="text" name="id" value="<?php echo $row1["id"]; ?>" class="form-control">
 </div>
 <div class="form-group">
<label>Name</label>
<input type="text" name="name" value="<?php echo $row1["name"]; ?>" id="name" class="form-control">
</div>
 <div class="form-group">
<label>Number</label>
<input type="text" name="number" value="<?php echo $row1["number"]; ?>" id="number" class="form-control">
</div>
 <div class="form-group">
<label>Class</label>
<input type="text" name="class" value="<?php echo $row1["class"]; ?>" id="class" class="form-control">
</div>
 <div class="form-group">
<label>Email</label>
<input type="text" name="email" value="<?php echo $row1["email"]; ?>" id="email" class="form-control">
</div>
 <div class="form-group">
<label>Password</label>
<input type="text" name="password" value="<?php echo $row1["password"]; ?>" id="password" class="form-control">
</div>
<button class="btn btn-success" type="submit" name="update">Update</button>

</form>
</div></div>
</div></div>
<?php

?>
<section class="bg-info p-5 text-center text-warning ">
    <h3>
      Thanks to you
    </h3>
  </section>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" ></script>
</body>
</html>
