<?php include '../common/head.php';?>
<?php include '../common/header_top.php';?>
<?php include '../common/header.php';?>
<?php include '../common/welcome.php';?>
<?php include '../common/config.php';?>
	<?php $elements = getCrimeList();?>
	<div class="card" style="margin: 50px !important;">
	  <div class="card-header">My Bid List
	  </div>
	  <div class="card-body">

	
		<div>
		<table class="table table-bordered table-hover">
        	<thead>
        		<th>Title</th>
        		<th>Description</th>
        		<th>Remarks</th>
                <th>Fees Amount</th>
                <th>Status</th>
                <th colspan="3">Action</th>
        	</thead>
        	<tbody>
        		<?php foreach ($elements as $key => $value) {
        		 ?>
        		<tr>
        			<td><?php echo $value['title']; ?></td>
        			<td><?php echo $value['description']; ?></td>
        			<td><?php echo $value['remarks']; ?></td>
        			<td><?php echo $value['fees_amount']; ?></td>
                    <td><?php echo $value['status']; ?></td>

        		<?php
                        //echo '<pre>';
                        //print_r($_SESSION);exit;
                         if(isset($_SESSION['user_type'])){
                            if($_SESSION['user_type'] == 'admin'){
                            	?>
        			<td><a href="deletecrime.php?id=<?php echo $value['id'];?>">Delete</a></td>
                    <td><a href="crimeshowdetails.php?id=<?php echo $value['id'];?>">Show</a></td>
                    <td><a href="edit-crime.php?id=<?php echo $value['id'];?>">Edit</a></td>
                <?php }}
                ?>

                <?php
                        //echo '<pre>';
                        //print_r($_SESSION);exit;
                         if(isset($_SESSION['user_type'])){
                            if($_SESSION['user_type'] == 'lawyer'){
                            	?>
                    <td><a href="delete_mybid_list.php?id=<?php echo $value['id'];?>">Delete</a></td>
                <?php }}
                ?>
        		</tr>
        	<?php } ?>
    		</tbody>
    	</table>
    </div>
   

	  </div> 
	</div>
<?php include '../common/footer.php';?>


<?php 
function getCrimeList(){
	$conn = OpenCon();

    $sql = "select job_post_response.id, job_post.title,job_post.description,job_post_response.remarks,job_post_response.fees_amount,job_post_response.status from job_post_response LEFT JOIN job_post ON job_post_response.job_id = job_post.id where lawyer_id=".$_SESSION['user_id'];
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