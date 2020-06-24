<?php include '../partials/head.php';?>
<?php include '../partials/header_menu.php';?>
<?php include '../partials/admin-sidebar.php';?>
<?php include '../partials/bredcrumb.php';?>
<?php include '../common/config.php';?>
	<?php $elements = getJob_post_responseList();?>
	<div class="card">
	  <div class="card-header">Job Post Response 
	  	<a style="float: right;" href="insert_job_post_response.php"><button class="btn btn-success">Add New</button></a>
	  </div>
	  <div class="card-body">

	
		<div>
		<table class="table table-bordered table-hover">
        	<thead>
        		<th>ID</th>
                <th>Job Id</th>
                <th>lawyer Id</th>
                <th>Fees Amount</th>
                <th>Status</th>
                <th colspan="3">Action</th>
        	</thead>
        	<tbody>
        		<?php foreach ($elements as $key => $value) {
        		 ?>
        		<tr>
        			<td><?php echo $value['id']; ?></td>
        			<td><?php echo $value['job_id']; ?></td>
        			<td><?php echo $value['lawyer_id']; ?></td>
        			<td><?php echo $value['fees_amount']; ?></td>
        			<td><?php echo $value['status']; ?></td>
        		<?php
                        //echo '<pre>';
                        //print_r($_SESSION);exit;
                         if(isset($_SESSION['user_type'])){
                            if($_SESSION['user_type'] == 'admin'){
                            	?>
        			<td><a href="delete_job_post_response.php?id=<?php echo $value['id'];?>">Delete</a></td>
                    <td><a href="job_post_response_show_details.php?id=<?php echo $value['id'];?>">Show</a></td>
                    <td><a href="edit_job_post_response.php?id=<?php echo $value['id'];?>">Edit</a></td>
                <?php }}
                ?>

                <?php
                        //echo '<pre>';
                        //print_r($_SESSION);exit;
                         if(isset($_SESSION['user_type'])){
                            if($_SESSION['user_type'] == 'user'){
                            	?>
                    <td><a href="job_post_response_show_details.php?id=<?php echo $value['id'];?>">Show</a></td>
                <?php }}
                ?>

                <?php
                        //echo '<pre>';
                        //print_r($_SESSION);exit;
                         if(isset($_SESSION['user_type'])){
                            if($_SESSION['user_type'] == 'lawyer'){
                            	?>
                    <td><a href="job_post_response_show_details.php?id=<?php echo $value['id'];?>">Show</a></td>
                <?php }}
                ?>
        		</tr>
        	<?php } ?>
    		</tbody>
    	</table>
    </div>
   

	  </div> 
	</div>
<?php include '../partials/footer.php';?>


<?php 
function getJob_post_responseList(){
	$conn = OpenCon();
	$sql = "select * from job_post_response";
	$result = $conn->query($sql);
	$items = [];
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()) {
			array_push($items, $row);
	}
	return $items;
}
	else{
		echo "No Data Found";
		return $items;
	}
	$conn->close();	
}
?>	