<?php 

$servername = "localhost";
$username = "westv1387";
$password = "";
$dbname = "CodeTN";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>


<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>codeplanet - Login</title>
    <link rel="icon" href="/images/planet.ico" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="/project_resources/MDB-Free/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="/project_resources/MDB-Free/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="/project_resources/MDB-Free/css/style.css" rel="stylesheet">
</head>
<body>
    <!--Main Navigation-->
    <header>
        <!--Nav bar-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #2c3840">
        
        <!--codeplanet logo and text-->
        <a class="navbar-brand" href="main.html"><img src="/images/planet.png" style="width: 50px; height: auto;">codeplanet</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <!--Code editor button-->
                    <a class="nav-link" href="/editor_page.html">Code Editor</a>
                </li>
                </li>
            </ul>
            <!--Micah look here 8-->
            <ul class="navbar-nav ml-auto nav-flex-icons">
                       <!--Twitter-->
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" target="_blank" href="https://twitter.com/codeplanet1"><i class="fa fa-twitter"></i></a>
                        </li>
                        <!--Google+-->
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" target="_blank" href="https://plus.google.com/u/3/109087039167043596848"><i class="fa fa-google-plus"></i></a>
                        </li>
                        <!--Log in page-->
                        <li class="nav-item active">
                            <a class="nav-link" href="">Log in / Sign up<span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
        </div>
        </nav>
            <div class="view">
            <div class="full-bg-img flex-center">
                <div class="col-sm-3">
                <div class="container" style="background-color: #eee; padding: 20%; border: transparent; border-radius: 25px;">
                    <form class="form-signin">
                        <h2 class="form-signin-heading" style="text-align: center; font-size: 150%;">Please Sign In...</h2>
                        <label for="inputEmail" class="sr-only">Email address</label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>
                        <button class="btn btn-lg btn-success btn-block" type="submit">Start Coding</button>
                    </form>
                </div>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-3">
                <div class="container" style="background-color: #eee; padding: 20%; border: transparent; border-radius: 25px;">
                    <form class="form-signin">
                        <h2 class="form-signin-heading" style="text-align: center; font-size: 150%;">...or Sign Up!</h2>
                        <label for="inputEmail" class="sr-only">Email address</label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
                       <div class="checkbox">
                            <label>
                                <input type="checkbox" value="remember-me" style="visibility: hidden;">
                            </label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Get Started</button>
                    </form>
                </div>
            </div>
            </div>
            </div>
    <!--Main Navigation-->

    <!--Main layout-->
    <main>

    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer>

    </footer>
    <!--Footer-->
    <!-- Start your project here-->
    <!-- /Start your project here-->

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