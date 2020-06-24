<?php include '../partials/head.php';?>
<?php include '../partials/header_menu.php';?>
<?php include '../partials/admin-sidebar.php';?>
<?php include '../partials/bredcrumb.php';?>
<?php include '../common/config.php';?>
	<?php $elements = getUserList();?>
	<div class="card">
	  <div class="card-header">User 
	  	<a style="float: right;" href="insert_user.php"><button class="btn btn-success">Add New</button></a>
	  </div>
	  <div class="card-body">

	
		<div>
		<table class="table table-bordered table-hover">
        	<thead>
        		<th>ID</th>
                <th>User Name</th>
                <th>Password</th>
                <th>Name</th>
                <th>email</th>
                <th>Contact</th>
                <th colspan="3">Action</th>
        	</thead>
        	<tbody>
        		<?php foreach ($elements as $key => $value) {
        		 ?>
        		<tr>
        			<td><?php echo $value['id']; ?></td>
        			<td><?php echo $value['username']; ?></td>
        			<td><?php echo $value['password']; ?></td>
        			<td><?php echo $value['name']; ?></td>
        			<td><?php echo $value['email']; ?></td>
        			<td><?php echo $value['contact']; ?></td>

                <?php
                        //echo '<pre>';
                        //print_r($_SESSION);exit;
                         if(isset($_SESSION['user_type'])){
                            if($_SESSION['user_type'] == 'admin'){
                                ?>
        			<td><a href="delete_user.php?id=<?php echo $value['id'];?>">Delete</a></td>
                    <td><a href="user_show_details.php?id=<?php echo $value['id'];?>">Show</a></td>
                    <td><a href="edit-user.php?id=<?php echo $value['id'];?>">Edit</a></td>
                <?php }}
                ?>

                <?php
                        //echo '<pre>';
                        //print_r($_SESSION);exit;
                         if(isset($_SESSION['user_type'])){
                            if($_SESSION['user_type'] == 'user' || 'lawyer'){
                                ?>

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
function getuserList(){
	$conn = OpenCon();
	$sql = "select * from user";
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