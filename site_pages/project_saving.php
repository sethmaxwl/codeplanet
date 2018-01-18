<?php
    require(dirname(__FILE__).'/connect.php');
    session_name ($_SESSION['sessionId']);
    session_start();
    
    //Make sure  input items have the NAME attribute. The id attribute is not enough!
    //takes title, finds userID given username, and takes code and stores in database
    if(isset($_POST["save_btn"])) {
        $username=$_SESSION["username"];
        $getID = mysqli_fetch_assoc(mysqli_query($db, "SELECT UserID FROM User WHERE username = '$username'"));
        $userId = $getID['UserID'];
        $title= $_POST["project_title"];
        $title= mysqli_real_escape_string($db,$title);
        $project = htmlspecialchars($_POST['codesnippet_editable']);
        $query = mysqli_query($db, "INSERT INTO Projects (UserID, title, content) VALUES ('$userId','$title','$project')");
        if($query){
            $msg="Project Submitted!";
            header("Location: ./editor_page.php");
        }else{
            $msg="Project not submitted";
        }
    }
?>
  