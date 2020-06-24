<?php include '../common/head.php';?>
<?php include '../common/header_top.php';?>
<?php include '../common/header.php';?>

<?php include '../common/config.php';?>
<?php 
        $elements = getLawyerList();
        $courts = getCourtList();
        $conn = OpenCon();
        if($_POST){
             $name = $_POST['name'];
             $court_id = $_POST['court_id'];
             if($name && $court_id){
                 $sql=  "SELECT * FROM lawyer WHERE court_id=".$court_id. " AND name LIKE '%".$name."%'";
             }else if($court_id){
                 $sql=  "SELECT lawyer.*, court.name court_name from lawyer left join court on lawyer.court_id=court.id WHERE court_id=".$court_id;
             }else if($name){
                $sql=  "SELECT * FROM lawyer WHERE name LIKE '%".$name."%'";
             }else{
                $sql=  "SELECT * FROM lawyer";
             }

             //echo $sql;exit;
             $elements = [];
             $result = $conn->query($sql);
             if($result->num_rows > 0){
                while($row = $result->fetch_assoc()) {
                    array_push($elements, $row);
            }
         }
     }
?>


	
    <div class="card" style="margin: 58px;
    border: 1px solid #2ce9e0;
    padding: 28px;">
        <div class="card-body">
            <div>  
                <form action="" class="form-inline" method="post">
                  <div class="form-group">
                    <label for="court_name">Court Name:</label>
                    <select class="form-control" style="width: 227px;" id="court_name" name="court_id">
                        <option value=""></option>
                        <?php foreach ($courts as $key => $value) {?>
                            <option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
                        <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                      <label>Name</label>
                      <input type="text" name="name" class="form-control">
                  </div>
                  <button type="submit" class="btn btn-info">Search</button>
                </form>
            </div>
        </div>
    </div>

    <div class="card" style="margin: 50px !important;">
	  <div class="card-header">Lawyer 
        <a style="float: right;" href="insertlawyer.php"><button class="btn btn-success">Add New</button></a>
      </div>
	  <div class="card-body">
		<div>
		<table class="table table-bordered table-hover">
        	<thead>
        		<th>SL</th>
        		<th>Name</th>
        		<th>Court_Name</th>
            <th>Address</th>
            <th>Contact</th>
            <th>email</th>
            <th colspan="3">Action</th>
        	</thead>
        	<tbody>
        		<?php foreach ($elements as $key => $value) {
        		 ?>
        		<tr>
        			<td><?php echo ++$key; ?></td>
        			<td><?php echo $value['name']; ?></td>
        			<td><?php echo $value['court_name']; ?></td>
              <td><?php echo $value['address']; ?></td>
        			<td><?php echo $value['contact']; ?></td>
        			<td><?php echo $value['email']; ?></td>
                <?php
                        //echo '<pre>';
                        //print_r($_SESSION);exit;
                         if(isset($_SESSION['user_type'])){
                            if($_SESSION['user_type'] == 'admin'){
                                ?>
        			<td><a href="delete_lawyer.php?id=<?php echo $value['id'];?>">Delete</a></td>
                    <td><a href="lawyer_show_details.php?id=<?php echo $value['id'];?>">Show</a></td>
                    <td><a href="editlawyer.php?id=<?php echo $value['id'];?>">Edit</a></td>
                <?php }}
                ?>

                <?php
                        //echo '<pre>';
                        //print_r($_SESSION);exit;
                         if(isset($_SESSION['user_type'])){
                            if($_SESSION['user_type'] == 'user' || 'lawyer'){
                                ?>
                    <td><a href="lawyer_show_details.php?id=<?php echo $value['id'];?>">Show</a></td>
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

function getlawyerList(){
	$conn = OpenCon();
	$sql = "SELECT lawyer.*, court.name court_name from lawyer left join court on lawyer.court_id=court.id";
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