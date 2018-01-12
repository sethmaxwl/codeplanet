<?php 
  require(dirname(__FILE__).'/connect.php');
    // session_start();
    // $host = "127.0.0.1";
    // $servername = "localhost";
    // $username = "westv1387";
    // $password = "";
    // $dbname = "CodeTN";
    // $port = 3306;

    
  //   $conn = mysqli_connect($host, $username, $password, $dbname, $port);
  //   if (mysqli_connect_errno())
  // {
  // echo "Failed to connect to MySQL: " . mysqli_connect_error();
  // }
  //   echo('conn:');

    // set parameters and execute
  $msg = "nothing";
  $username_error = "";
  $name_error = "";
  
  if(isset($_POST["submitted"])) {
    echo("I am here");
    //$msg = "made it in";
    $name = $_POST["inputName"];
    $username = $_POST["inputEmail"];
    $password = $_POST["inputPassword"];
    
    $name = mysqli_real_escape_string($db,$name);
    $username = mysqli_real_escape_string($db,$username);
    $password = mysqli_real_escape_string($db,$password);
    $password = md5($password);
    
    echo("Username: " . $username . " Password: " . $password . " Name: " . $name);
    
    echo("made it past assigning values.");
     
    // $name = htmlspecialchars($name);
    // $email = htmlspecialchars($email);
    // $password = htmlspecialchars($password);
    // $password = md5($password);
    
    // $sql="SELECT email FROM User WHERE email='email'";
    $sql="SELECT username FROM User WHERE username='$username'";
    $result=mysqli_query($db,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result) == 1){
      $msg = "Sorry, this email is registered. Please log in.";
    }else{
      $query = mysqli_query($db, "INSERT INTO User (name, username, password) VALUES ('$name','$username','$password')");
        if($query){
          $msg="You are now registered!";
          //header("Location:../site_pages/profile_user.php");
    }
    // echo('result:');
    // echo($result);
    // echo('row');
    // echo($row);

    // if($result != null && mysqli_num_rows($result)==1){
    //   $msg="This email has been registered.";
    // } else {
    //     echo('down here');
    //     $query = mysqli_query($conn, "INSERT INTO User (name, email, password) VALUES ('$name','$email','$password')");
    //           echo('query:');
    //           echo($query);
    //     if($query){
    //       $msg="You are now registered!";
    //     }
    // }
  }
  }
  
  echo('You are now registered, redirecting...');
  mysqli_close($db);
  header("Location: ./community.php");
  return;
?>