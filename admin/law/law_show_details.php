<?php include '../partials/head.php';?>
<?php include '../partials/header_menu.php';?>
<?php include '../partials/admin-sidebar.php';?>
<?php include '../partials/bredcrumb.php';?>
<?php include '../common/config.php';?>
	<?php 
	$region = [];
	$conn = OpenCon();
	$id = $_GET['id'];
	$sql = "select * from law where id = ".$id;
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) {
			$law['id'] = $row['id'];
			$law['title'] = $row['title'];
			$law['year'] = $row['year'];
			$law['number_of_section'] = $row['number_of_section'];

    }
    $conn->close();
	
?>


	<div class="card">
	  <div class="card-header">Law</div>
	  <div class="card-body">
	  		<table class="table table-bordered">
	  			<tbody>
	  				<tr>
						<th>ID : </th>
						<td><?php echo $law['id']; ?></td>
					</tr>
					<tr>
						<th>Title : </th>
						<td><?php echo $law['title']; ?></td>
					</tr>
					<tr>	
						<th>Year : </th>
						<td><?php echo $law['year']; ?></td>
					</tr>
					<tr>	
						<th>Number of Section : </th>
						<td><?php echo $law['number_of_section']; ?></td>
					</tr>
	  			</tbody>
	  		</table>
	  </div> 
	</div>
<?php include '../partials/footer.php';?>
