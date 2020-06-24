<?php include '../common/head.php';?>
<?php include '../common/header_top.php';?>
<?php include '../common/header.php';?>
<?php include '../common/welcome.php';?>
<?php include '../common/config.php';?>
	<?php 
	$region = [];
	$conn = OpenCon();
	$id = $_GET['id'];
	$sql = "select * from law_section where id = ".$id;
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) {
			$law_section['id'] = $row['id'];
			$law_section['law_id'] = $row['law_id'];
			$law_section['section_id'] = $row['section_id'];
			$law_section['description'] = $row['description'];

    }
    $conn->close();
	
?>


	<div class="card">
	  <div class="card-header">Law Section</div>
	  <div class="card-body">
	  		<table class="table table-bordered">
	  			<tbody>
	  				<tr>
						<th>ID : </th>
						<td><?php echo $law_section['id']; ?></td>
					</tr>
					<tr>
						<th>Law Id : </th>
						<td><?php echo $law_section['law_id']; ?></td>
					</tr>
					<tr>	
						<th>Section Id : </th>
						<td><?php echo $law_section['section_id']; ?></td>
					</tr>
					<tr>	
						<th>Description : </th>
						<td><?php echo $law_section['description']; ?></td>
					</tr>
	  			</tbody>
	  		</table>
	  </div> 
	</div>
<?php include '../common/footer.php';?>
