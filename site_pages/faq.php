<!DOCTYPE html>
<html>
    <?php include('navbar.php'); ?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>FAQ - codeplanet</title>
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
    <script>
        function myFunction(id) {
            var x = document.getElementById(id);
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else { 
                x.className = x.className.replace(" w3-show", "");
            }
        }
    </script>
    <style>
        body {
            font-family: Roboto,sans-serif !important;
        }
        .w3-button{
            background-color: #6e48f8 !important;
            color: #FFFFFF !important;
        }
        
        .w3-button:hover{
            background-color: #4717F6 !important;
            color: #FFFFFF !important;
        }
        .w3-show{
            background-color: #E7DFDD !important;
            color: #565656 !important;
        }
        p{
            vertical-align: middle;
        }
        
    </style>
  </head>
  <body>
  <header class="animated fadeIn">
        <div class="container">
            <div class="divider-new pt-5" style="margin-bottom: 0;">
                <h2 class="h2-responsive wow" style="animation-name: none; visibility: visible;">Frequently Asked Questions</h2>
            </div>
            <p style="animation-name: none; visibility: visible; text-align: center; margin-bottom: 3%;">Click on a question for an answer</p>
        </div>
            
            <!--Skeleton FAQ entry
            
            <button onclick="myFunction('DemoX')" class="w3-button w3-block w3-left-align">Q.</button>
            <div id="DemoX" class="w3-container w3-hide">
                <h4 class="h4-responsive wow" style="animation-name: none; visibility: visible;"><b>Q.</b></h4>
                <p></p>
                </div>
            
            -->
        <div style="width: 85%; margin: auto;">
            <button onclick="myFunction('Q1')" id="button1" class="w3-button w3-block w3-left-align">What is codeplanet?</button>
            <div id="Q1" class="w3-container w3-hide">
                <h4 class="h4-responsive wow" style="animation-name: none; visibility: visible;"><b>Q. What is codeplanet?</b></h4>
                <p>A. The codeplanet platform is designed to allow users to develop JavaScript programs and share them with a community of people. This community-based approach to programming allows users to collect value feedback from others in the form of upvotes and comments, helping programmers to learn from each other and enhance their programming skills.</p>
                </div>
            <button onclick="myFunction('Q2')" class="w3-button w3-block w3-left-align">What makes codeplanet different from JSFiddle or CodePen?</button>
            <div id="Q2" class="w3-container w3-hide">
                <h4 class="h4-responsive wow" style="animation-name: none; visibility: visible;"><b>Q. What makes codeplanet different from JSFiddle or CodePen?</b></h4>
                <p>A. While codeplanet is similar to websites such as JSFiddle and CodePen, codeplanet provides a community base in addition to its code execution capabilities. Instead of using codeplanet as a way to share projects on community sites such as Stack Exchange, codeplanet eliminates the middle man by providing users with an environment to actively develop JavaScript programs and get community feedback in the same application.</p>
            </div>
            <button onclick="myFunction('Q3')" id="button2" class="w3-button w3-block w3-left-align">How can I get an output from the JavaScript console?</button>
            <div id="Q3" class="w3-container w3-hide">
                <h4 class="h4-responsive wow" style="animation-name: none; visibility: visible;"><b>Q. How can I get an output from the JavaScript console?</b></h4>
                <p>A. To get an output, you must declare a function that returns the value of whatever you want the console to display. A few key notes to remember when doing this is the 500 character limit on outputs. Also, using the word "Infinity" anywhere in the input is prohibited, as infinite loops aren't too great for codeplanet.</p>
            </div>
            <button onclick="myFunction('Demo4')" class="w3-button w3-block w3-left-align">Will there be an update? If so, what changes will be added?</button>
            <div id="Demo4" class="w3-container w3-hide">
                <h4 class="h4-responsive wow" style="animation-name: none; visibility: visible;"><b>Q. Will there be an update? If so, what changes will be added?</b></h4>
                <p>A. Eventually, the team plans to add support for several other languages. The planned languages as of now are Ruby, Python, and C++. These will likely be premium languages that will be available as a part of the premium user package. The premium users will also have access to a featured premium projects section of the application to view exceptional premium projects.</p>
            </div>
        </div>
        
        <div class="container">
            <div class="divider-new pt-5">
                <h3 class="h3-responsive wow" style="animation-name: none; visibility: visible; margin-bottom: 0;">Not Seeing Your Question?</h3>
            </div>
            <p style="animation-name: none; visibility: visible; text-align: center; padding-bottom: 2%;">Send us an <a href="mailto:codeplanet.codetn@gmail.com?Subject=Ticket%20Request" style= "color: #4717F6;" target="_blank">email</a> or ask us on <a href="https://twitter.com/codeplanet1" style= "color: #4717F6;" target="_blank">Twitter</a> or <a href="https://plus.google.com/u/3/109087039167043596848" style= "color: #4717F6;" target="_blank">Google Plus</a></p>
        </div>
    </header>

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