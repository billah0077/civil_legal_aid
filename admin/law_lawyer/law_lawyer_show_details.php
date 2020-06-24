<?php include '../partials/head.php';?>
<?php include '../partials/header_menu.php';?>
<?php include '../partials/admin-sidebar.php';?>
<?php include '../partials/bredcrumb.php';?>
<?php include '../common/config.php';?>
	<?php 
	$region = [];
	$conn = OpenCon();
	$id = $_GET['id'];
	$sql = "select * from law_lawyer where id = ".$id;
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) {
			$law_lawyer['id'] = $row['id'];
			$law_lawyer['lawyer_id'] = $row['lawyer_id'];
			$law_lawyer['law_id'] = $row['law_id'];
			$law_lawyer['year_of_experience'] = $row['year_of_experience'];

    }
    $conn->close();
	
?>


	<div class="card">
	  <div class="card-header">Law Lawyer</div>
	  <div class="card-body">
	  		<table class="table table-bordered">
	  			<tbody>
	  				<tr>
						<th>ID : </th>
						<td><?php echo $law_lawyer['id']; ?></td>
					</tr>
					<tr>
						<th>Lawyer Id : </th>
						<td><?php echo $law_lawyer['lawyer_id']; ?></td>
					</tr>
					<tr>	
						<th>Law Id : </th>
						<td><?php echo $law_lawyer['law_id']; ?></td>
					</tr>
					<tr>	
						<th>Year Of Experience : </th>
						<td><?php echo $law_lawyer['year_of_experience']; ?></td>
					</tr>
	  			</tbody>
	  		</table>
	  </div> 
	</div>
<?php include '../partials/footer.php';?>
