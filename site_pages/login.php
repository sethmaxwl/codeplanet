<?php
    include('navbar_unauthorized.html');
    include('login_processing.php');
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Login - codeplanet</title>
        <link rel="icon" href="/images/planet.ico" type="image/x-icon">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
        <!-- Bootstrap core CSS -->
        <link href="/project_resources/MDB-Free/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="/project_resources/MDB-Free/css/mdb.min.css" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="/project_resources/MDB-Free/css/style.css" rel="stylesheet">
        <link href="/project_resources/css/animate.css" rel="stylesheet">
        <link rel="import" href="navbar.html">
</head>

<body>
  <style>
    body::-webkit-scrollbar {
      width: 10px;
      height: 10px;
    }
          
    body::-webkit-scrollbar-button {
      width: 0px;
      height: 0px;
    }
  
    body::-webkit-scrollbar-thumb {
      background: #777777;
      border: 0px solid #ffffff;
      border-radius: 50px;
    }
  
    body::-webkit-scrollbar-thumb:hover {
      background: #535353;
    }
  
    body::-webkit-scrollbar-thumb:active {
      background: #535353;
    }
  
    body::-webkit-scrollbar-track {
      background: #cecece;
      border: 0px none #ffffff;
      border-radius: 50px;
    }
  
    body::-webkit-scrollbar-track:hover {
      background: #cecece;
    }    
  
    body::-webkit-scrollbar-track:active {
      background: #cecece;
    }
  
    body::-webkit-scrollbar-corner {
      background: transparent;
    }
  </style>
  <link rel="icon" href="/images/planet.ico" type="image/x-icon">
        <header>
              <div class="view">
                  <div class="full-bg-img flex-center">
                      <!--sign in form-->
                      <div class="col-sm-3">
                          <div class="container animated slideInUp" id="login_stuff" style="background-color: #eee; padding: 20%; border: transparent; border-radius: 25px;">
                              <form class="form-signin" id="login_form" method="POST" action="login_processing.php">
                                  <h2 class="form-signin-heading" id="signInCard">Please Sign In</h2>
                                    
                                  <label for="loginEmail" class="sr-only">Email address</label>
                                  <input type="email" id="loginEmail" name = "loginEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                                    
                                  <label for="loginPassword" class="sr-only">Password</label>
                                  <input type="password" id="loginPassword" name = "loginPassword" class="form-control" placeholder="Password" required="">
                                    
                                  <button class="btn btn-lg btn-success btn-block" type="submit" name="submit" id="enter">Start Coding</button>
                                  <a href = "./signup_form.php">Don't have an account?</a>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
        </header>
        <!-- SCRIPTS -->
        <!-- JQuery -->
        <script type="text/javascript" src="/project_resources/MDB-Free/js/jquery-3.1.1.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="/project_resources/MDB-Free/js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="/project_resources/MDB-Free/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="/project_resources/MDB-Free/js/mdb.min.js"></script>
</body>
</html>