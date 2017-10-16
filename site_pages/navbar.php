<?php 
session_start();
$name = $_SESSION['username'];

if ($name === Null) {
  echo '
  <link rel="icon" href="/images/planet.ico" type="image/x-icon">
   <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #342B46">
    <a class="navbar-brand" href="main.php"><img src="/images/mdearth.png" style="width: 25px; height: auto; margin-right: 5%;">codeplanet</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="/site_pages/editor_page.php">Code Editor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/site_pages/about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/site_pages/faq.php">FAQ</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto nav-flex-icons">
        <li class="nav-item">
          <a class="nav-link" href="/site_pages/login.php">Log in / Sign up<span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>';
  //this navbar if for login page when users haven't logged in or signed up
} else {
    echo '
    <link rel="icon" href="/images/planet.ico" type="image/x-icon">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #2c3840">
      <a class="navbar-brand" href="main.html"><img src="/images/planet.png" style="width: 50px; height: auto;">codeplanet</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="/site_pages/editor_page.html">Code Editor</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto nav-flex-icons">
          <li class="nav-item">
            <a class="nav-link waves-effect waves-light" target="_blank" href="https://twitter.com/codeplanet1"><i class="fa fa-twitter"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect waves-light" target="_blank" href="https://plus.google.com/u/3/109087039167043596848"><i class="fa fa-google-plus"></i></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link waves-effect waves-light" href="/site_pages/profile_user.html"><i class="fa fa-user"></i> Profile<span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>';
}

//this navbar is for people with accounts and are logged in
?>
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