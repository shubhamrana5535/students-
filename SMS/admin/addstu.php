


<?php
include'header.php';
include'titlehead.php';
?>
<html><head></head>
<body>
      <div class="container p-4"><div class="row">
            <div class="col-md-4"><img src="adminimg/admission-open-gif-8.gif" width="500px" height="600px" alt=""></div>
      <div class="col-md-4"></div>
            <div class="col-md-4 text-light" style="background:#9E9D24 " >
      <form action="addstu.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
        <label ><b>Rollno</b></label>
  <input type="text" name="rollno" Required class="form-control" placeholder="Enter Proper Value">
        </div>
        <div class="form-group">
        <label ><b>Name </b></label>
  <input type="text" name="name" Required class="form-control" placeholder="Enter Proper Value">
        </div>
        <div class="form-group">
        <label ><b>City</b></label>
  <input type="text" name="city" Required class="form-control" placeholder="Enter Proper Value">
        </div>
        <div class="form-group">
        <label ><b>Contact</b></label>
        <input type="text" name="contact" Required class="form-control" placeholder="Enter Proper Value">
        </div>
        <div class="form-group">
        <label ><b>Standred</b></label>
  <input type="text" name="standred" Required class="form-control" placeholder="Enter Proper Value">
        </div>
        <div class="form-group">
        <label ><b>Image</b></label>
  <input type="file" name="image" Required class="form-control-file">
        </div>
      <input type="submit" class="btn btn-success " style="float:right" name="submit" value="submit" >
  
</form>
      </div>
	  <?php
/*$servername="localhost";
$username="root";
$password="";
$db="youtube";

$conn= new mysqli($servername,$username,$password,$db);
if($conn->connect_error){
	die("connection failed:".$conn->connect_error);
}
else{
	echo"connection";
}*/

include'config.php';


if(isset($_POST['submit'])){
  echo"<pre>";
 print_r($_POST);
  echo"</pre>";
  $rollno = $_POST['rollno'];
  //$image = $_POST['image'];
  $name =$_POST['name'];
  $city = $_POST['city'];
  $contact = $_POST['contact'];
  $standred = $_POST['standred'];
  $file_name= $_FILES["image"]["name"];
     // $file_size=$_FILES["image"]["size"];
       $file_temp=$_FILES["image"]["tmp_name"];
     // $file_type=$_FILES['image']["name"];
      //$check = implode(',',$_POST["check"]);
// print_r($check);
// die();

       move_uploaded_file($file_temp,"adminimg/".$file_name);
   

  
  $sql = "INSERT INTO student(rollno,name,city,contact,standred,image)
  VALUES('".$rollno."','".$name."','".$city."','".$contact."','".$standred."','".$file_name."')";
		if($conn->query($sql)===TRUE){
			echo" New record created sucessfuly";
			header("location:addstu.php");
			}else{
				echo"Error: " . $sql . "<br>" . $conn->error;
	
			}
			$conn->close();
			}
			
?></div>
      
    </div>
  </div>
  <footer class="bg-dark text-center text-light p-3 m-3">
    <h3>
      Thank to you
    </h3>
  </footer>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" ></script>
	
	</body>
	</html>

    


