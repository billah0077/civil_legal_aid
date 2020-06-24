<?php
function insertjob_post_response($fees_amount, $remarks, $lawyer_id, $job_id){
  $conn = OpenCon();
  $sql = "INSERT INTO job_post_response (job_id, lawyer_id, fees_amount, remarks)
VALUES (".$job_id.",".$lawyer_id.", ".$fees_amount.", '".$remarks."')";
  echo $sql;
  $result = $conn->query($sql);
  if($result){
    echo "successful";
    
  }else{
    echo "No Data Found";
  }
  $conn->close(); 
}

if($_POST){
  //exit;
  $fees_amount=$_POST['fees_amount'];
  $remarks=$_POST['remarks'];
  $lawyer_id=$_POST['lawyer_id'];
  $job_id=$_POST['job_id'];

  //print_r($_POST);exit;
  insertjob_post_response($fees_amount, $remarks, $lawyer_id, $job_id);  
}

?>

<div id="bidmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Bid The Job</h4>
      </div>
      <div class="modal-body">
        <form action="" method="post">
        <div class="form-group">
          <label for="title">Fees:</label>
          <input type="text" name="fees_amount" class="form-control" id="title">
        </div>
        <div class="form-group">
          <label for="title">Remarks:</label>
          <textarea class="form-control" name="remarks"></textarea>
        </div>
        <input type="hidden" name="lawyer_id" class="form-control" value="<?php echo $_SESSION['user_id']; ?>" id="user_name">
        <input type="hidden" name="job_id" class="form-control" value="<?php echo $job_post['id']; ?>" id="job_id">
        
        <button type="submit" class="btn btn-info">Submit</button>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>