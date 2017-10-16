<html lang="en">

<?php 
include('navbar.php');

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
    <link href="/project_resources/css/animate.css" rel="stylesheet">
</head>
<body>
    <header>
            <div class="view">
            <div class="full-bg-img flex-center">
                <div class="col-sm-3">
                <div class="container animated slideInUp" style="background-color: #eee; padding: 20%; border: transparent; border-radius: 25px;">
                    <form class="form-signin">
                        <h2 class="form-signin-heading" style="text-align: center; font-size: 140%;">Please Sign In...</h2>
                        <label for="inputEmail" class="sr-only">Email address</label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>
                        <button class="btn btn-lg btn-success btn-block" type="submit" style="font-size: 12px;">Start Coding</button>
                    </form>
                </div>
            </div>
            <div class="col-sm-1"></div>
            <!--sign up-->
            <div class="col-sm-3">
                <div class="container animated slideInUp" style="background-color: #eee; padding: 20%; border: transparent; border-radius: 25px;">
                    <form class="form-signin">
                        <h2 class="form-signin-heading" style="text-align: center; font-size: 140%;">...or Sign Up!</h2>
                        <label for="inputEmail" class="sr-only">Email address</label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
                       <div class="checkbox">
                            <label>
                                <input type="checkbox" value="remember-me" style="visibility: hidden;">
                            </label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block" type="submit" style="font-size: 12px;">Get Started</button>
                       
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