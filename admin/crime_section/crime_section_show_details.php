<?php include '../partials/head.php';?>
<?php include '../partials/header_menu.php';?>
<?php include '../partials/admin-sidebar.php';?>
<?php include '../partials/bredcrumb.php';?>
<?php include '../common/config.php';?>
	<?php 
	$region = [];
	$conn = OpenCon();
	$id = $_GET['id'];
	$sql = "select * from crime_section where id = ".$id;
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) {
			$crime_section['id'] = $row['id'];
			$crime_section['crime_id'] = $row['crime_id'];
			$crime_section['law_section_id'] = $row['law_section_id'];
			$crime_section['punishment'] = $row['punishment'];
    }
    $conn->close();
	
?>


	<div class="card">
	  <div class="card-header">Crime Section</div>
	  <div class="card-body">
	  		<table class="table table-bordered">
	  			<tbody>
	  				<tr>
						<th>ID : </th>
						<td><?php echo $crime_section['id']; ?></td>
					</tr>
					<tr>
						<th>Crime ID : </th>
						<td><?php echo $crime_section['crime_id']; ?></td>
					</tr>
					<tr>	
						<th>Law Secrtion Id : </th>
						<td><?php echo $crime_section['law_section_id']; ?></td>
					</tr>
					<tr>	
						<th>Punishment : </th>
						<td><?php echo $crime_section['punishment']; ?></td>
					</tr>
	  			</tbody>
	  		</table>
	  </div> 
	</div>
<?php include '../partials/footer.php';?>
