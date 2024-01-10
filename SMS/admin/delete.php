<?php
session_start();
if(isset($_SESSION['uid'])){
	echo"";
}else{
	header("location:../login.php");
}
?>
<?php
include 'config.php';
 print_r($_GET);
  $id = $_GET['id'];
  $query = mysqli_query($conn, "DELETE FROM arun WHERE id=$id");

    if ($query == 1) {
   header('location: newpage.php');
} else {
  echo "Error updating record: ";
}
    

?>