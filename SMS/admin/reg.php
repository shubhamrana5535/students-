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