<?php include 'common/head.php';?>
<?php include 'common/header_top.php';?>
<?php include 'common/header.php';?>
<?php include 'common/welcome.php';?>
<?php include 'common/config.php';?>





	  <div class="card" style="margin: 50px !important;">
		  <div class="card-header">General Diary	
		  </div>
		  <div class="card-body">
	   			<form action="print.php" method="post">
				  <div class="form-group">
				    <label for="date">Date:</label>
				    <input type="date" name="date" class="form-control" id="date">
				  </div>
				  <div class="form-group">
				    <label for="police_station_name">Police Station Name:</label>
				    <input type="text" name="police_station_name" class="form-control" id="police_station_name">
				  </div>
				  <div class="form-group">
				    <label for="police_station_area">Police Station Area:</label>
				    <input type="text" name="police_station_area" class="form-control" id="police_station_area">
				  </div>
				  
				  <div class="form-group">
				    <label for="name">Name:</label>
				    <input type="text" name="name" class="form-control" id="name">
				  </div>
				  <div class="form-group">
				    <label for="father_name">Father's Name:</label>
				    <input type="text" name="father_name" class="form-control" id="father_name">
				  </div>
				  <div class="form-group">
				    <label for="mother_name">Mother's Name:</label>
				    <input type="text" name="mother_name" class="form-control" id="mother_name">
				  </div>
				  <div class="form-group">
				    <label for="national_id">Nationaml Id Number:</label>
				    <input type="number" name="national_id" class="form-control" id="national_id">
				  </div>
				  <div class="form-group">
				    <label for="permanent_address">Permanent Address:</label>
				    <textarea class="form-control" name="permanent_address" id="permanent_address"></textarea>
				  </div>
				  <div class="form-group">
				    <label for="present_address">Present Address:</label>
				    <textarea class="form-control" name="present_address" id="present_address"></textarea>
				  </div>
				  <div class="form-group">
				    <label for="description">Description of The Incident:</label>
				    <textarea class="form-control" name="description" id="description"></textarea>
				  </div>
				  <div class="form-group">
				    <label for="mobile_no">Mobile No:</label>
				    <input type="number" name="mobile_no" class="form-control" id="mobile_no">
				  </div>
				  
				  <button type="submit" class="btn btn-info">Submit</button>
				</form>
		  </div> 
	</div>

<?php include 'common/footer.php';?>