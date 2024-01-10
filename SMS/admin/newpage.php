<?php
include'titleheader.php';
?>
<?php
include 'config.php';
session_start();
// print_r($_SESSION);

if(empty($_SESSION)){

	header("Location:login.php");
}
// echo "string";
// echo $user = $_SESSION['email'];
  $sql = "SELECT * FROM arun";
  $result = mysqli_query($conn, $sql);

 
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
<table border="10" class="table table-boder">
<thead class="text-white" style="background:#7D3C98">
<tr>
	<th>Id</th><th>Name</th><th>Number</th><th>Class</th><th>Email</th><th>Password</th><th>Update</th><th>Delete</th>
</tr>
</thead>

     <?php
           

             while($row=  mysqli_fetch_array($result)){
             
                 ?>
				 <tbody class="text-white" style="background:#FFA07A">
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['number']; ?></td>
                <td><?php echo $row['class']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['password'] ;?></td>
                
               
              <td> <a class="btn btn-success text-white" href="update.php?id=<?php echo $row["id"]; ?>">Update</a></td>
                
               <td><a class="btn btn-danger text-white" href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a> </td>
               
            </tr>
			</tbody>
            <?php
       }
             
             ?>
             </table>
            </div>
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