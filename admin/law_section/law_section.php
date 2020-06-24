<?php include '../partials/head.php';?>
<?php include '../partials/header_menu.php';?>
<?php include '../partials/admin-sidebar.php';?>
<?php include '../partials/bredcrumb.php';?>
<?php include '../common/config.php';?>
	<?php $elements = getLawSectionList();?>
	<div class="card">
	  <div class="card-header">Law Section
	  	<a style="float: right;" href="insert_law_section.php"><button class="btn btn-success">Add New</button></a>
	  </div>
	  <div class="card-body">

	
		<div>
		<table class="table table-bordered table-hover">
        	<thead>
        		<th>ID</th>
                <th>Law Id</th>
                <th>Section Id</th>
                <th>Description</th>
                <th colspan="3">Action</th>
        	</thead>
        	<tbody>
        		<?php foreach ($elements as $key => $value) {
        		 ?>
        		<tr>
        			<td><?php echo $value['id']; ?></td>
        			<td><?php echo $value['law_id']; ?></td>
        			<td><?php echo $value['section_id']; ?></td>
        			<td><?php echo $value['description']; ?></td>
        		<?php
                        //echo '<pre>';
                        //print_r($_SESSION);exit;
                         if(isset($_SESSION['user_type'])){
                            if($_SESSION['user_type'] == 'admin'){
                            	?>
        			<td><a href="deletelaw_section.php?id=<?php echo $value['id'];?>">Delete</a></td>
                    <td><a href="law_section_show_details.php?id=<?php echo $value['id'];?>">Show</a></td>
                    <td><a href="edit_law_section.php?id=<?php echo $value['id'];?>">Edit</a></td>
                <?php }}
                ?>

                <?php
                        //echo '<pre>';
                        //print_r($_SESSION);exit;
                         if(isset($_SESSION['user_type'])){
                            if($_SESSION['user_type'] == 'user' || 'lawyer'){
                            	?>
                    <td><a href="deletelaw_section.php?id=<?php echo $value['id'];?>">Delete</a></td>
                    <td><a href="law_section_show_details.php?id=<?php echo $value['id'];?>">Show</a></td>
                    <td><a href="edit_law_section.php?id=<?php echo $value['id'];?>">Edit</a></td>
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
function getLawSectionList(){
	$conn = OpenCon();
	$sql = "select * from law_section";
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