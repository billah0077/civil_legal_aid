<?php include '../partials/head.php';?>
<?php include '../partials/header_menu.php';?>
<?php include '../partials/admin-sidebar.php';?>
<?php include '../partials/bredcrumb.php';?>
<?php include '../common/config.php';?>
<?php 


	if(isset($_GET['id'])){
		$region = [];
		$conn = OpenCon();
		$id = $_GET['id'];
		//echo $id;exit;
		$sql = "select job_post.id, job_post.title,job_post.description,crime.title crime_name,court.name court_name from job_post LEFT JOIN crime ON job_post.crime_id = crime.id LEFT JOIN court ON job_post.court_id=court.id where job_post.id = ".$id;
		//echo $sql;exit;
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()) {
				$job_post['id'] = $row['id'];
				$job_post['title'] = $row['title'];
				$job_post['description'] = $row['description']; 
				$job_post['crime_name']=$row['crime_name'];
				$job_post['court_name']=$row['court_name'];
	    }
	    $conn->close();	
		}
	
	
?>




	<div class="card">
	  <div class="card-header">
	  	Job Post
	  	<a style="float: right;" data-toggle="modal" data-target="#bidmodal"><button class="btn btn-success">Bid</button></a>
	  </div>
	  

	  <div class="card-body">
	  		<table class="table table-bordered">
	  			<tbody>
	  				<tr>
						<th>ID : </th>
						<td><?php echo $job_post['id']; ?></td>
					</tr>
					<tr>
						<th>Title : </th>
						<td><?php echo $job_post['title']; ?></td>
					</tr>
					<tr>	
						<th>Description : </th>
						<td><?php echo $job_post['description']; ?></td>
					</tr>
					<tr>	
						<th>Crime Name : </th>
						<td><?php echo $job_post['crime_name']; ?></td>
					</tr>
					<tr>	
						<th>Court Name : </th>
						<td><?php echo $job_post['court_name']; ?></td>
					</tr>
	  			</tbody>
	  		</table>
	  </div> 



	</div>
<?php include 'bidmodal.php';?>
<?php include '../partials/footer.php';?>

