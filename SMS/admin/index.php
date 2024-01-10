<?php
include'config.php';
if(isset($_POST['submit'])){
	// echo"<pre>";
	// print_r($_POST);
	// echo"</pre>";
	
	$name = $_POST['name'];
	$number = $_POST['number'];
	$class = $_POST['class'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	/*$file_name = $_FILES['image']['name'];
	echo"<pre>";
	print_r($_FILES);
	echo"</pre>";
	$file_size = $_FILES['image']['size'];
	$file_temp = $_FILES['image']['temp_name'];
	$file_type = $_FILES['image']['type'];
	$file_name = $_FILES["image"]["name"];
	 echo"<pre>";
	 print_r($_FILES);
	echo"</pre>";
  $file_size = $_FILES["image"]["size"];
     $file_temp = $_FILES["image"]["temp_name"]; 
	
	 $file_type = $_FILES["image"]["type"]; 
	move_uploaded_file($file_temp,"upload/".$file_name);
	$file_name= $_FILES["image"]["name"];
     // $file_size=$_FILES["image"]["size"];
       $file_temp=$_FILES["image"]["tmp_name"];
     // $file_type=$_FILES['image']["name"];
      $check = implode(',',$_POST["check"]);
// print_r($check);
// die();

       move_uploaded_file($file_temp,"upload/".$file_name);*/
	
	$sql = "INSERT INTO arun(name,number,class,email,password)
			VALUES('".$name."','".$number."','".$class."','".$email."','".$password."')";
			
			if($conn->query($sql)===TRUE){
				
				?>
				
				<?php
				// header("location:index.php");
				echo'<script>
         alert("Inserted succesfully");
         window.open("index.php");
         </script>';
				
			}else{
				echo"error:".$sql."<br>".$conn->error;
			}
			$conn->close();
}

?>
<?php
include'titleheader.php';
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
<body class="bg-warning">
<div class="container p-4">
<div class="row">
<div class="col-md-4 text-white" style="background:#9B59B6">
<form name="" method="POST" action="" enctype="multipart-form/data">
<label><pre><h3 class="text-white text-center p-3">W e l c o m e</h3></pre></label><br><br>
<div class="form-group">
<label>Name</label>
<input type="text" value="" name="name" class="form-control">
</div>
<div class="form-group">
<label>Number</label>
<input type="text" value="" name="number" class="form-control">
</div>
<div class="form-group">
<label>Class</label>
<input type="text" value="" name="class" class="form-control">
</div>
<div class="form-group">
<label>Email</label>
<input type="text" value="" name="email" class="form-control">
</div>
<div class="form-group">
<label>Password</label>
<input type="text" value="" name="password" class="form-control" >
</div>
<input class="btn btn-success pb-2" type="submit" value="submit" name="submit">


</form>
</div>
<div class="col-md-4"></div>
<div class="col-md-4"><img src="adminimg/050-GDU-MET-Blog-Prom-Animation-JH_1.gif" alt="" height="400px" width="300px">
</div>
</div>
</div>
<footer class="bg-info p-5 text-center text-warning p-3 m-3">
    <h3>
      Thanks to you
    </h3>
  </footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" ></script>
	
</body>
</html>
