<?php
   $path = "http://localhost/fuel/";
   include("common/config.php");
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 

    $conn = OpenCon();
    $myusername = $_POST['username'];
    $mypassword = $_POST['password']; 
    $sql = "SELECT * FROM user WHERE username = '".$myusername."' and password = ".$mypassword."";
    //echo $sql;exit;
    $result = $conn->query($sql);
    //echo "Number Of Rows : ".$result->num_rows;exit;
    if($result->num_rows == 1){
    while($row = $result->fetch_assoc()) {
      session_destroy();
      session_start();
      $_SESSION['username'] = $row['username'];
      $_SESSION['user_type'] = $row['user_type'];
      $_SESSION['user_id'] = $row['id'];
      //print_r($_SESSION);exit;
      header("Location:".$path."index.php");
  }  
   }else{

   }
 }
?>

<?php include 'common/head.php';?>
<?php include 'common/header_top.php';?>

    <div class="container-fluid" style="margin: 100px !important;">
        <h1>Login</h1>
        <p>Please fill in this form to login.</p>
        <hr>
      <form action="" method="POST">
        <div class="form-group">
          <label class="control-label" for="username"><b>User Name</b></label>
          <input type="text" class="form-control" placeholder="Enter username" name="username" required>
        </div> 

    
        <div class="form-group">
            <label class="control-label" for="psw"><b>Password</b></label>
            <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
        </div>
        <hr>
        <button class="btn btn-success" type="submit" class="login">Login</button>

        
      </form>
    </div>

   
<?php include 'common/footer.php';?>
