<?php include '../common/head.php';?>
<?php include '../common/header_top.php';?>
<?php include '../common/header.php';?>
<?php include '../common/welcome.php';?>
<?php include '../common/config.php';?>
	<?php $elements = getcrime_sectionList();?>
	<div class="card">
	  <div class="card-header">Crime Section
		<a style="float: right;" href="insert_crime_section.php"><button class="btn btn-success">Add New</button></a>
	  </div>
	  <div class="card-body">

	
		<div>
		<table class="table table-bordered table-hover">
        	<thead>
        		<th>ID</th>
                <th>Crime Id</th>
                <th>Law Section Id</th>
                <th>Punishment</th>
                <th colspan="3">Action</th>
        	</thead>
        	<tbody>
        		<?php foreach ($elements as $key => $value) {
        		 ?>
        		<tr>
        			<td><?php echo $value['id']; ?></td>
        			<td><?php echo $value['crime_id']; ?></td>
        			<td><?php echo $value['law_section_id']; ?></td>
        			<td><?php echo $value['punishment']; ?></td>
        		<?php
                        //echo '<pre>';
                        //print_r($_SESSION);exit;
                         if(isset($_SESSION['user_type'])){
                            if($_SESSION['user_type'] == 'admin'){
                            	?>
        			<td><a href="deletecrime_section.php?id=<?php echo $value['id'];?>">Delete</a></td>
                    <td><a href="crime_section_show_details.php?id=<?php echo $value['id'];?>">Show</a></td>
                    <td><a href="edit-crime_section.php?id=<?php echo $value['id'];?>">Edit</a></td>
                <?php }}
                ?>

                <?php
                        //echo '<pre>';
                        //print_r($_SESSION);exit;
                         if(isset($_SESSION['user_type'])){
                            if($_SESSION['user_type'] == 'user' || 'lawyer'){
                            	?>
                    <td><a href="crime_section_show_details.php?id=<?php echo $value['id'];?>">Show</a></td>
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
function getCrime_sectionList(){
	$conn = OpenCon();
	$sql = "select * from crime_section";
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