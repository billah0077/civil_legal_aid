<?php
  $path = "http://localhost/fuel/";
  include("common/config.php");

  if($_SERVER["REQUEST_METHOD"] == "POST") {

    header("Location:".$path."login.php");

  }
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo $path;?>resources/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $path;?>resources/css/custom.css">
  <script type="text/javascript" src="<?php echo $path;?>resources/bootstrap/dist/js/bootstrap.js"></script>
<style>

</style>
</head>
<body>

<?php include 'common/head.php';?>
<?php include 'common/header_top.php';?>

  <div class="container-fluid" style="margin: 100px !important;">
 <h1>Register</h1>
 <p>Please fill in this form to create an account.</p>
 <hr>
<form action="" method="post">
  <div class="form-group">
    <label class="control-label" for="username"><b>User Name</b></label>
    <input type="text" class="form-control" placeholder="Enter username" name="username" required>
  </div> 

    
  <div class="form-group">
    <label class="control-label" for="psw"><b>Password</b></label>
    <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
  </div>

  <div class="form-group">  
    <label class="control-label" for="name"><b>Name</b></label>
    <input type="text" class="form-control" placeholder="Enter name" name="name" required>
  </div>

  <div class="form-group">    
    <label class="control-label" for="email"><b>Email</b></label>
    <input type="text" class="form-control" placeholder="Enter email" name="email" required>
  </div>

  <div class="form-group">      
    <label class="control-label" for="contact"><b>Contact</b></label>
    <input type="text" class="form-control" placeholder="enter contact" name="contact" required>
  </div>

  <div class="form-group">        
    <label class="control-label" for="usertype"><b>User Type</b></label>
    <select name="user_type" class="form-control">
        <option value="admin">admin</option>
        <option value="user">user</option>
        <option value="lawyer">lawyer</option>
    </select>
  </div>

  <div class="form-group">        
    <label class="control-label" for="image_path"><b>Image Path</b></label>
    <input type="file" class="form-control" placeholder="Enter emage" name="image_path">
  </div>

  <div class="form-group">        
    <label class="control-label" for="address"><b>Address</b></label>
    <input type="text" class="form-control" placeholder="enter address" name="address" required>
  </div>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  
  <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
</form>
</div>
<?php include 'common/footer.php';?>

</body>
</html>

<?php

// Get values from form 
if($_POST){
  $username=$_POST['username'];
  $password=$_POST['password'];
  $name=$_POST['name'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];
  $user_type=$_POST['user_type'];
  $image_path=$_POST['image_path'];
  $address=$_POST['address'];
  
  //print_r($_POST);exit;
  registration($username, $password, $name, $email, $contact, $user_type, $image_path, $address); 
}

function registration($username, $password, $name, $email, $contact, $user_type, $image_path, $address){
  //echo $username;exit;
  $conn = OpenCon();
  $sql = "INSERT INTO user (username, password, name, email, contact, user_type, image_path, address)
VALUES ('".$username."', '".$password."', '".$name."', '".$email."', '".$contact."', '".$user_type."', '".$image_path."', '".$address."')";
  //echo $sql;
  $result = $conn->query($sql);
  if($result){
    echo "successful";
    
  }else{
    echo "Registration Failed!";
  }
  $conn->close(); 
}

?>