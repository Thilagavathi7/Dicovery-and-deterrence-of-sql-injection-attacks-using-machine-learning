<?php
  
include 'dbconnection.php';
$userid = $_POST['userid'];
$password = $_POST['password'];
  
$sanitized_userid = 
    mysqli_real_escape_string($db, $userid);
      
$sanitized_password = 
    mysqli_real_escape_string($db, $password);
      
$sql = "SELECT * FROM users WHERE username = '" 
    . $sanitized_userid . "' AND password = '" 
    . $sanitized_password . "'";
      
$result = mysqli_query($db, $sql) 
    or die(mysqli_error($db));
      
$num = mysqli_fetch_array($result);
      
if($num > 0) {
    echo "Login Success";
}
else {
    echo "Wrong User id or password";
}
  
?>