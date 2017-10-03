<?php 
session_start();
$name = $_SESSION['username'];

if ($name === Null) {
  echo '
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
        <li class="nav-item">
          <a class="nav-link" href="/site_pages/login.php">Log in / Sign up<span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>';
  //this navbar if for login page when users haven't logged in or signed up
} else {
    echo '
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
<!--<html lang="en">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #2c3840">
        <img src="/images/planet.png" style="width: 3%; height: 3%;">
        <a class="navbar-brand" href="">codeplanet</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/editor_page.html">Code Editor</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto nav-flex-icons">
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" target="_blank" href="https://twitter.com/codeplanet1"><i class="fa fa-twitter"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" target="_blank" href="https://plus.google.com/u/3/109087039167043596848"><i class="fa fa-google-plus"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login.html">Log in / Sign up<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
</html> -->