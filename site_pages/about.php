<?php 
    session_start();
    if (isset($_SESSION['username'])){
        include('navbar.html');
    }else{
        include('navbar_unauthorized.html');
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>About Us - codeplanet</title>
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
  <header class="animated slideInDown">
        <!--Intro Section-->
        <section class="view1 intro-1">
            <div class="full-bg-img flex-center">
                <div class="container">
                    <h1 class="h1-responsive font-bold wow fadeInDown text-center" data-wow-delay="0.2s" id="about_splash">About codeplanet</h1>
                    <div id="about_tag"></div>
                    <div id="pulsing_arrow">
                        <img src="/images/arrow.png" alt="Arrow" id="arrow" class="pulse">
                        <p>Scroll down</p>
                    </div>
                </div>
            </div>
        </section>

    </header>

    <!-- Main container-->
    <div class="container">
        <blockquote class="blockquote" id="about_quote">
            <p class="mb-0">"<i>Any fool can write code that a computer can understand. Good programmers write code that humans can understand.</i>"</p>
            <footer class="blockquote-footer"><cite title="Source Title">Martin Fowler</cite></footer>
        </blockquote>
        <!--Section: About-->
        <section id="about" class="text-center wow fadeIn" data-wow-delay="0.2s" id="about_statement">
            <p>This quote is the inspiration behind the codeplanet project.</p>
            <p>The developers of codeplanet are firm believers of the human element of programming. It is absolutely essential that programmers from all backgrounds collaborate with others to develop their skills, and in turn, develop better applications.</p>
        </section>
        <!--Section: About-->

        <div class="divider-new pt-5">
            <h2 class="h2-responsive wow fadeIn" id="editor_tag">Who We Are and What We Do</h2>
        </div>
            <section id="about" class="text-center wow fadeIn" data-wow-delay="0.2s" id="about_statement">
                <p>Codeplanet is an online environment developed to mimic the Atom IDE. This is intended to bring a more enjoyable experience when developing programs in the browser, as users will be more familiar with the enironment. </p>
                <p>The code editor has several unique features that offer a unique online development experience, which include syntax highlighting, inline syntax checking, a<a href="docs.php"> custom library</a>, and the ability to search the editor for a certain value. Codeplanet is dedicated to bringing the benefits of local IDEs to the online development community.</p>
                <p>Currently, JavaScript is the only language supported by codeplanet, but in the future, additional languages will be added.</p>
                <p>Another appeal is the ability to save projects to the community pages, where any other user can find and execute a project.</p>
            </section>
        </div>
    </div>
        <!--/Section: Best features-->
        <div class="divider-new pt-5">
            <h2 class="h2-responsive wow fadeIn" data-wow-delay="0.2s" id="editor_tag">Follow Us on Social Media</h2>
        </div>

        <!--Section: About-->
        <section id="about" class="text-center wow fadeIn container" data-wow-delay="0.2s">
        
        <div class="row">
            <div class="col-sm"></div>
            <div class="col-sm">
                <a class="btn" id="twitter_btn" href="https://twitter.com/codeplanet1" target="_blank"><i class="fa fa-twitter left"></i>Twitter</a>
            </div>
            <div class="col-sm">
                <a class="btn" id="gplus_btn" href="https://plus.google.com/u/3/109087039167043596848" target="_blank"><i class="fa fa-google-plus left"></i>Google Plus</a>
            </div>
            <div class="col-sm"></div>
        </div>
        </section>
    </div>
    <!--/ Main container-->

    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

    <!-- Bootstrap dropdown -->
    <script type="text/javascript" src="js/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    </body>
</html>