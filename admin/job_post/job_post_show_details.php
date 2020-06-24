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

<?php 

		if(isset($_GET['bidId'])){
			//echo "Bid Id".$_GET['bidId'];exit;
		$conn = OpenCon();
		$id = $_GET['bidId'];
		$updateSql = "UPDATE `job_post_response` SET status='ALLOTTED' WHERE job_post_response.id = ".$id;
		$result = $conn->query($updateSql);
	    $conn->close();	
		}



	if(isset($_GET['id'])){
		$region = [];
		$conn = OpenCon();
		$id = $_GET['id'];
		//echo $id;exit;
		$sql = "select * from job_post_response where job_post_response.job_id = ".$id;
		//echo $sql;exit;
		$result = $conn->query($sql);
		$bids = [];
		if($result->num_rows > 0){
		while($row = $result->fetch_assoc()) {
			array_push($bids, $row);
		}
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



	  <div class="card-body">
	  	<div class="card-header">
	  	Bids for this Job
	  </div>
	  		
			<table class="table table-bordered">
			  	<tbody>
			  		<thead>
			  			<th>ID : </th>
			  			<th>Job ID : </th>
			  			<th>Lawyer ID : </th>
			  			<th>Fees Amount : </th>
			  			<th>Remarks : </th>
			  			<th>Status : </th>
			  			<th>Activity : </th>			  			
			  		</thead>
			  		<?php foreach ($bids as $key => $value) {?>
			  			<tr <?php if($value['status'] == 'ALLOTTED'){ ?>class="p-3 mb-2 bg-secondary text-white"<?php }?>>
						<td><?php echo $value['id']; ?></td>						
						<td><?php echo $value['job_id']; ?></td>
						<td><?php echo $value['lawyer_id']; ?></td>
						<td><?php echo $value['fees_amount']; ?></td>
						<td><?php echo $value['remarks']; ?></td>
						<td><?php echo $value['status']; ?></td>
						<td><a style="float: center;" href="http://localhost/fuel/admin/job_post/job_post_show_details.php?bidId=<?php echo $value['id'];?>&id=<?php echo $value['job_id']; ?>"><button class="btn btn-success">Alloted</button></a></td>
					</tr>	
			  		<?php } ?>
			  		
			  		</tbody>
			  	</table>
	</div>
	</div>
<?php include 'bidmodal.php';?>
<?php include '../partials/footer.php';?>

