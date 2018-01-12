<?php 
  require(dirname(__FILE__).'/connect.php');
  
// set parameters and execute
  $msg = "nothing";
  
  if(isset($_POST["submit"])) {
//echo("I am here");
//recieves user info
    $username = $_POST["loginEmail"];
    $password = $_POST["loginPassword"];
    
    $username = mysqli_real_escape_string($db,$username);
    $password = mysqli_real_escape_string($db,$password);
    $password = md5($password);
    
//echo("made it past assigning values.");
//posts user if not previously registered     
    $sql="SELECT * FROM User WHERE username='$username' AND password='$password'";
    $result=mysqli_query($db,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result) == 1){
      session_start();
      $session_data['username'] = $username;
       mysqli_close($db);
      header("Location: ./community.php");
    }else{
      echo("Invalid Credentials.")
      die();
    }
  }
?>