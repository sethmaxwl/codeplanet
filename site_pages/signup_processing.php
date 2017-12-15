<?php 
      echo('signup_processing.php');
require(dirname(_FILE_).'./site_pages/connect.php');
    
    // set parameters and execute
  $msg = "";
  if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
     
    $name = mysqli_real_escape_string($db, $name);
    $email = mysqli_real_escape_string($db, $email);
    $password = mysqli_real_escape_string($db, $password);
    $password = md5($password);
    
    $sql="SELECT email FROM User WHERE email='email'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result)==1){
      $msg="This email has been registered.";
    } else {
        $query = mysqli_query($conn, "INSERT INTO User (name, email, password) VALUES ('$name','$email','$password'");
        if($query){
          $msg="You are now registered!";
        }
    }
  }
  





// // Define variables and initialize with empty values
// $username = $password = "";
// $username_err = $password_err = "";
// // Processing form data when form is submitted
// if($_SERVER["REQUEST_METHOD"] == "POST"){
 
//     // Validate username
//     if(empty(trim($_POST["username"]))){
//         $username_err = "Please enter a username.";
//     } else{
//         // Prepare a select statement
//         $sql = "SELECT id FROM users WHERE username = ?";
        
//         if($stmt = mysqli_prepare($link, $sql)){
//             // Bind variables to the prepared statement as parameters
//             mysqli_stmt_bind_param($stmt, "s", $param_username);
            
//             // Set parameters
//             $param_username = trim($_POST["username"]);
            
//             // Attempt to execute the prepared statement
//             if(mysqli_stmt_execute($stmt)){
//                 /* store result */
//                 mysqli_stmt_store_result($stmt);
                
//                 if(mysqli_stmt_num_rows($stmt) == 1){
//                     $username_err = "This username is already taken.";
//                 } else{
//                     $username = trim($_POST["username"]);
//                 }
//             } else{
//                 echo "Oops! Something went wrong. Please try again later.";
//             }
//         }
         
//         // Close statement
//         mysqli_stmt_close($stmt);
//     }
    
//     // Validate password
//     if(empty(trim($_POST['password']))){
//         $password_err = "Please enter a password.";     
//     } elseif(strlen(trim($_POST['password'])) < 6){
//         $password_err = "Password must have atleast 6 characters.";
//     } else{
//         $password = trim($_POST['password']);
//     }
    
//     // Validate confirm password
//     if(empty(trim($_POST["confirm_password"]))){
//         $confirm_password_err = 'Please confirm password.';     
//     } else{
//         $confirm_password = trim($_POST['confirm_password']);
//         if($password != $confirm_password){
//             $confirm_password_err = 'Password did not match.';
//         }
//     }
    
//  -   // Check input errors before inserting in database
//     if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
//         // Prepare an insert statement
//         $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
//         if($stmt = mysqli_prepare($link, $sql)){
//             // Bind variables to the prepared statement as parameters
//             mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
//             // Set parameters
//             $param_username = $username;
//             $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
//             // Attempt to execute the prepared statement
//             if(mysqli_stmt_execute($stmt)){
//                 // Redirect to login page
//                 header("location: login.php");
//             } else{
//                 echo "Something went wrong. Please try again later.";
//             }
//         }
         
//         // Close statement
//         mysqli_stmt_close($stmt);
//     }
    
//     // Close connection
//     mysqli_close($link);
// }




  
//   //if (!empty($_POST["inputEmail"])){
//     $name = mysqli_real_escape_string($conn, $_POST["inputName"]);
//     $username = mysqli_real_escape_string($conn, $_POST["inputEmail"]);
//     $password =  mysqli_real_escape_string($conn, $_POST["inputPassword"]);
//     //$options=["cost"=>10];
//     //$pass = password_hash($_POST["inputPassword"], PASSWORD_BCRYPT, $options);
//     //$query=mysql_query("INSERT INTO User (name,username,password) VALUES ($name, $username, $password)");
//     // $sql = $conn->prepare("INSERT INTO User (name,username,password) VALUES (?,?,?)");
//     // $sql->bind_param("sss",$name,$username,$pass);
//     $query = "INSERT INTO User (name, username, password) VALUES ('$name', '$username', '$password')";
//     if (!mysqli_query($conn, $query)){
//       echo "Error" .mysqli_error($conn);
//     } else {
//       header ("Location: profile_user.php");
//     }
//      $sql->execute();
//   }  
//   $sql->close();
//   $conn->close();

?>