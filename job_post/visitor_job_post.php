<?php include '../common/head.php';?>
<?php include '../common/header_top.php';?>
<?php include '../common/header.php';?>
<?php include '../common/welcome.php';?>
<?php include '../common/config.php';?>
	<?php $elements = getJob_postList();?>
	<div class="card">
	  <div class="card-header">Job Post 
	  	<a style="float: right;" href="insert_job_post.php"><button class="btn btn-success">Add New</button></a>
	  </div>
	  <div class="card-body">

	
		<div>
		<table class="table table-bordered table-hover">
        	<thead>
        		<th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Court Name</th>
                <th>Crime Name</th>
                <th colspan="3">Action</th>
        	</thead>
        	<tbody>
        		<?php foreach ($elements as $key => $value) {
        		 ?>
        		<tr>
        			<td><?php echo $value['id']; ?></td>
        			<td><?php echo $value['title']; ?></td>
        			<td><?php echo $value['description']; ?></td>
        			<td><?php echo $value['court_name']; ?></td>
                    <td><?php echo $value['crime_name']; ?></td>

        		<?php
                        //echo '<pre>';
                        //print_r($_SESSION);exit;
                         if(isset($_SESSION['user_type'])){
                            if($_SESSION['user_type'] == 'admin'){
                            	?>
        			<td><a href="delete_job_post.php?id=<?php echo $value['id'];?>">Delete</a></td>
                    <td><a href="job_post_show_details.php?id=<?php echo $value['id'];?>">Show</a></td>
                    <td><a href="edit-job_post.php?id=<?php echo $value['id'];?>">Edit</a></td>
                <?php }}
                ?>

                <?php
                        //echo '<pre>';
                        //print_r($_SESSION);exit;
                         if(isset($_SESSION['user_type'])){
                            if($_SESSION['user_type'] == 'user'){
                            	?>
                    <td><a href="delete_job_post.php?id=<?php echo $value['id'];?>">Delete</a></td>
                    <td><a href="job_post_show_details.php?id=<?php echo $value['id'];?>">Show</a></td>
                    <td><a href="edit-job_post.php?id=<?php echo $value['id'];?>">Edit</a></td>
                <?php }}
                ?>

                <?php
                        //echo '<pre>';
                        //print_r($_SESSION);exit;
                         if(isset($_SESSION['user_type'])){
                            if($_SESSION['user_type'] == 'lawyer'){
                            	?>
                    <td><a href="lawyer_jobpost_show_details.php?id=<?php echo $value['id'];?>">Show</a></td>
                <?php }}
                ?>

                
                        
                         <?php if(!isset($_SESSION['user_type'])){?>
                            
                    <td><a href="job_post_show_details.php?id=<?php echo $value['id'];?>">Show</a></td> <?php } ?>

                
        		</tr>
        	<?php } ?>
    		</tbody>
    	</table>
    </div>
   

	  </div> 
	</div>
<?php include '../common/footer.php';?>


<?php 
function getJob_postList(){
	$conn = OpenCon();
	$sql = "select job_post.title,job_post.description,job_post.id,crime.title crime_name,court.name court_name from job_post LEFT JOIN crime ON job_post.crime_id = crime.id LEFT JOIN court ON job_post.court_id=court.id";
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