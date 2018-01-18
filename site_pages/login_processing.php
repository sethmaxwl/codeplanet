<?php 
  require(dirname(__FILE__).'/connect.php');
  session_start();
  $sessionId = session_id();
  $_SESSION['sessionId'] = $sessionId;
  // set parameters and execute
  $msg = "nothing";
  
  if(isset($_POST["submit"])) {
    //recieves username and password from login page
    $username= $_POST["loginEmail"];
    $password = $_POST["loginPassword"];
    $password = md5($password);
    $username = mysqli_real_escape_string($db,$username);
    $password = mysqli_real_escape_string($db,$password);
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    
    
    //checks database for user account    
    $sql="SELECT * FROM User WHERE username='$username' AND password='$password'";
    $result=mysqli_query($db,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result) == 1){
      mysqli_close($db);
      header("Location: ./editor_page.php");
    }else{
      //echo("Invalid Credentials.");
      header("Location: ./login.php");
      unset($_SESSION["username"]);
      unset($_SESSION["password"]);
      unset($_SESSION['sessionId']);
      echo("Invalid Credentials.");
      die();
    }
  }
?>