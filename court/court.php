<?php include '../common/head.php';?>
<?php include '../common/header_top.php';?>
<?php include '../common/header.php';?>
<?php include '../common/welcome.php';?>
<?php include '../common/config.php';?>
	<?php $elements = getCourtList();?>
	<div class="card">
	  <div class="card-header">Court
	  	<a style="float: right;" href="insertcourt.php"><button class="btn btn-success">Add New</button></a>
	  </div>
	  <div class="card-body">

	
		<div>
		<table class="table table-bordered table-hover">
        	<thead>
        		<th>ID</th>
                <th>Region id</th>
                <th>Name</th>
                <th>Description</th>
                <th colspan="3">Action</th>
        	</thead>
        	<tbody>
        		<?php foreach ($elements as $key => $value) {
        		 ?>
        		<tr>
        			<td><?php echo $value['id']; ?></td>
        			<td><?php echo $value['region_id']; ?></td>
        			<td><?php echo $value['name']; ?></td>
        			<td><?php echo $value['description']; ?></td>

        			<?php
                        //echo '<pre>';
                        //print_r($_SESSION);exit;
                         if(isset($_SESSION['user_type'])){
                            if($_SESSION['user_type'] == 'admin'){
                            	?>
        			<td><a href="deletecourt.php?id=<?php echo $value['id'];?>">Delete</a></td>
                    <td><a href="courtshowdetails.php?id=<?php echo $value['id'];?>">Show</a></td>
                    <td><a href="edit-court.php?id=<?php echo $value['id'];?>">Edit</a></td>
                <?php }}
                ?>

                <?php
                        //echo '<pre>';
                        //print_r($_SESSION);exit;
                         if(isset($_SESSION['user_type'])){
                            if($_SESSION['user_type'] == 'user' || 'lawyer'){
                            	?>
                    <td><a href="courtshowdetails.php?id=<?php echo $value['id'];?>">Show</a></td>
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
function getCourtList(){
	$conn = OpenCon();
	$sql = "select * from court";
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