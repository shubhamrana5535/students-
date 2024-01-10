<?php

function showdetails($name,$class){
	include'config.php';
	
	$sql = "SELECT* FROM arun WHERE name='$name' && class='$class' ";
	$run=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($run)>0){
		
	$data = mysqli_fetch_assoc($run);
	?>
	<table border="10" class="table table-boder" style="width:300px">
<thead class="text-white" style="background:#7D3C98">
<tr>
	<th>Id</th><th>Name</th><th>Number</th><th>Class</th><th>Email</th><th>Password</th>
</tr>
</thead>
				 <tbody class="text-white" style="background:#FFA07A">
            <tr>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['name']; ?></td>
                <td><?php echo $data['number']; ?></td>
                <td><?php echo $data['class']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['password'] ;?></td>
                
	<?php
	}
	else{
		?>
		<script>
		alert("no macth found");
		</script>
		<?php
	}
}
	?>