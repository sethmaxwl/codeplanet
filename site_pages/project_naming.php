<?php 
    session_start();
    if (isset($_SESSION['username'])){
      include('navbar.html');
    }else{
      header("Location: ./login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>codeplanet - Sign Up</title>
      <link rel="icon" href="../images/planet.ico" type="image/x-icon">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
      <!-- Bootstrap core CSS -->
      <link href="../project_resources/MDB-Free/css/bootstrap.min.css" rel="stylesheet">
      <!-- Material Design Bootstrap -->
      <link href="../project_resources/MDB-Free/css/mdb.min.css" rel="stylesheet">
      <!-- Your custom styles (optional) -->
      <link href="../project_resources/MDB-Free/css/style.css" rel="stylesheet">
      <link href="../project_resources/animate.css" rel="stylesheet">
      <style>
        .error {
            color: red;
            display: none;
        }
      </style>
  </head>
  <body>
  <header>
    <div class="view">
      <div class="full-bg-img flex-center">
        <div class="col-sm-3">
          <div class="container animated slideInUp" style="background-color: #eee; padding: 20%; border: transparent; border-radius: 25px;">
            <form class="form-signin" id="signup_form" method="POST" action="signup_processing.php">
              <h2 class="form-signin-heading" style="text-align: center; font-size: 140%;">Publish Project</h2>
              <label for="inputName" class="sr-only">Title</label>
              <input type="text" id="project_title" name="project_title" class="form control bottom_margin" placeholder="Title" required="" autofocus="">
              <button class="btn btn-lg btn-primary btn-block" type="submit" name="save" style="font-size: 12px;">Publish</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </header>
        <script type="text/javascript" src="../project_resources/MDB-Free/js/jquery-3.1.1.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="../project_resources/MDB-Free/js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="../project_resources/MDB-Free/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="../project_resources/MDB-Free/js/mdb.min.js"></script>
      </body>
</html>