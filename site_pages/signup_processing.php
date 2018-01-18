<?php 
  require(dirname(__FILE__).'/connect.php');
  
// set parameters and execute
  $msg = "nothing";
  $username_error = "";
  $name_error = "";
  
  if(isset($_POST["submitted"])) {
//echo("I am here");
//recieves user info
    $name = $_POST["inputName"];
    $username = $_POST["inputEmail"];
    $password = $_POST["inputPassword"];
    
    $name = mysqli_real_escape_string($db,$name);
    $username = mysqli_real_escape_string($db,$username);
    $password = mysqli_real_escape_string($db,$password);
    $password = md5($password);
    
    echo("Username: " . $username . " Password: " . $password . " Name: " . $name);
    
//echo("made it past assigning values.");
//posts user if not previously registered     
    $sql="SELECT username FROM User WHERE username='$username'";
    $result=mysqli_query($db,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result) == 1){
      $msg = "Sorry, this email is registered. Please log in.";
    }else{
      $query = mysqli_query($db, "INSERT INTO User (name, username, password) VALUES ('$name','$username','$password')");
        if($query){
          $msg="You are now registered!";
          header("Location: ./editor_page.php");
        }
    }
  }
  
  echo('You are now registered, redirecting...');
  mysqli_close($db);
  
  return;
?>