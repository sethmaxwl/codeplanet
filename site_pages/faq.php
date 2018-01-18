<?php 
    session_name ($_SESSION['sessionId']);
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
    <link href="/project_resources/faq_stuff.css" rel="stylesheet"><script>
      $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip(); 
      });
    </script>
  </head>
  <body>
  <header class="animated fadeIn">
        <div class="container">
            <div class="divider-new pt-5" style="margin-bottom: 0;">
                <h2 class="h2-responsive wow" style="animation-name: none; visibility: visible;">Frequently Asked Questions</h2>
            </div>
            <p style="animation-name: none; visibility: visible; text-align: center; margin-bottom: 3%;">Click on a question for the answer</p>
        </div>
        <!--Defines a new HTML instance to have an accordion that works independently of mdbootstrap-->
        <div style="width: 90%; margin: auto;">
        <!DOCTYPE html>
        <html>
          <head>
            
          </head>
          <body>
            <button class="accordion">What is codeplanet?</button>
            <div class="panel">
              <h4 class="h4-responsive wow" style="animation-name: none; visibility: visible; margin-top: 1%;"><b>Q. What is codeplanet?</b></h4>
              <p>A. The codeplanet platform is designed to allow users to develop JavaScript programs and share them with a community of people. This community-based approach to programming allows users to see techniques used by other programmers, helping them to learn from each other and enhance their programming skills.</p>
            </div>
              
            <button class="accordion">What makes codeplanet different from sites like JSFiddle or CodePen?</button>
            <div class="panel">
              <h4 class="h4-responsive wow" style="animation-name: none; visibility: visible; margin-top: 1%;"><b>Q. What makes codeplanet different from sites like JSFiddle or CodePen?</b></h4>
                <p>A. While codeplanet is similar to JSFiddle and CodePen, codeplanet provides a community in addition to its code execution capabilities. Instead of using codeplanet as a way to demonstrate projects on community sites such as Stack Exchange, codeplanet eliminates the middle man by providing users with an environment to actively develop JavaScript programs and get community feedback in the same application.</p>
            </div>
            
            <button class="accordion">Why should I use codeplanet?</button>
            <div class="panel">
              <h4 class="h4-responsive wow" style="animation-name: none; visibility: visible; margin-top: 1%;"><b>Q. Why should I use codeplanet?</b></h4>
                <p>A. Codeplanet is not only an online IDE. It is also a community of programmers from different experience levels. The most appealing aspect of codeplanet is the universal nature of its use, as it can be used to teach beginning programmers the basics of computer science and as a playground for expert programmers to create sophisticated programs. The community model allows users to discover projects created by other users in order to advance their programming abilities. Codeplanet also is home to the codeplanet library, which was Furthermore, the codeplanet editor uses features commonly found in IDEs used in the professional programming industry to provide programmers with features they have grown used to in other environments.</p>
            </div>
            <button class="accordion">What is available in the custom codeplanet library?</button>
            <div class="panel">
              <h4 class="h4-responsive wow" style="animation-name: none; visibility: visible; margin-top: 1%;"><b>Q. What is available in the custom codeplanet library?</b></h4>
              <p>A. The codeplanet library contains many functions that help users interact with the console. Namely, the print, changeColor, and changeFont functions give the user complete control of the console's appearance and content. The library also contains functions that perform small, yet useful tasks that may come in handy for certain project. To name a few, there are random number generators, an accumulator, and checkers to determine if what is passed into the function is a certain data type. You can find all of the additional functions <a href="/site_pages/docs.php" id="realLink">here</a> along with a description and several examples to demonstrate their use. Alternatively, you can call the help function in the code editor and run the program to print out a list of all functions in the console.</p>
            </div>
            <button class="accordion">How do I run a program?</button>
            <div class="panel">
              <h4 class="h4-responsive wow" style="animation-name: none; visibility: visible; margin-top: 1%;"><b>Q. How do I run a program?</b></h4>
                <p>A. To run a program from the editor, click the green 'run' button. This will display the output of your program to the console. The purple button that says 'clear editor' will clear the editor after you confirm that you did not click the 'clear editor' button on accident. The 'clear console' clears the contents of the console, which will get rid of the log of outputs from each time the 'run' button was pressed. The 'save' button is only available to users who are logged in, and it asks you to name your program, which will be shared to the community page.</p>
            </div>
            <button class="accordion">How can I output to the JavaScript console?</button>
            <div class="panel">
              <h4 class="h4-responsive wow" style="animation-name: none; visibility: visible; margin-top: 1%;"><b>Q. How can I output to the JavaScript console?</b></h4>
              <p>A. To get an output, you can use the <a href="/site_pages/docs.php#letterSplit" id="realLink">print</a> function. Just pass in whatever you want to be the output and the print function will display it on the console. Be sure to look at the help function to view all of the pre-defined functions we have made for codeplanet.</p>
            </div>
            <button class="accordion">What features does the JavaScript editor have?</button>
            <div class="panel">
             <h4 class="h4-responsive wow" style="animation-name: none; visibility: visible; margin-top: 1%;"><b>Q. What features does the JavaScript code editor have?</b></h4>
              <p>A. The code editor has a few features that are designed to improve user experience when writing programs.</p>
              <ul>
                <li>If the editor is selected, CTRL-F (Windows) or CMD-F (Mac) will open a search box within the editor where you can search for words in your program. If your program is long enough to have a scrollbar on the side, each time a search term is found, there will be a purple highlight on the sidebar. To stop a searching session, re-open the search box and delete the search term.</li>
                <li>The code editor has an auto-bracket feature that adds a closing bracket to any open bracket.</li>
                <li>Variable names are colored green and italicized whenever a variable is defined. For each use of the variable after its definition, the variable is colored green. This is designed to help users keep track of where variables are defined and used.</li>
                <li>The active line has a purple highlight to make it easier to find where you are editing in the editor.</li>
                <li>The changeColor function allows the console's color to be changed. It accepts two parameters. The first one changes the color of the console text. The second one changes the color of the console background, and it is optional. Also, if the first parameter is 'revert,' the console will revert back to its original colors.</li>
              </ul>
            </div>  
            
            <button class="accordion">Will there be an update? If so, what changes will be made?</button>
            <div class="panel">
             <h4 class="h4-responsive wow" style="animation-name: none; visibility: visible; margin-top: 1%;"><b>Q. Will there be an update? If so, what changes will be made?</b></h4>
              <p>A. Eventually, the team plans to add support for several other languages. The planned languages as of now are Ruby, Python, and C++. These will likely be premium languages that will be available as a part of the premium user package. The premium users will also have access to a featured premium projects section of the application to view exceptional premium projects.</p>
            </div>
              
            <script>
              var acc = document.getElementsByClassName("accordion");
              var i;
              
              for (i = 0; i < acc.length; i++) {
                acc[i].onclick = function() {
                  this.classList.toggle("active");
                  var panel = this.nextElementSibling;
                  if (panel.style.maxHeight){
                    panel.style.maxHeight = null;
                  } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                  } 
                }
              }
            </script>
          </body>
        </html>
        </div>
        <div class="container">
            <div class="divider-new pt-5">
                <h3 class="h3-responsive wow" style="animation-name: none; visibility: visible; margin-bottom: 0;">Not Seeing Your Question?</h3>
            </div>
            <p style="animation-name: none; visibility: visible; text-align: center; padding-bottom: 2%;">Contact Us!</p>
        </div>
        <html class="">
          <head>
          </head>
          <body>
            <nav class="menu">
              <input type="checkbox" href="#" class="menu-open" name="menu-open" id="menu-open">
              <label class="menu-open-button" for="menu-open">
                <span class="hamburger hamburger-1"></span>
                <span class="hamburger hamburger-2"></span>
                <span class="hamburger hamburger-3"></span>
              </label>
              
              <a href="mailto:codeplanet.codetn@gmail.com?Subject=Help%20Ticket" class="menu-item" target="_blank" data-toggle="tooltip" data-placement="top" title="Email"> <i class="fa fa-envelope"></i> </a>
              <a href="https://twitter.com/codeplanet1" class="menu-item" target="_blank" data-toggle="tooltip" data-placement="top" title="Twitter"> <i class="fa fa-twitter"></i> </a>
              <a href="https://plus.google.com/u/3/109087039167043596848" class="menu-item" target="_blank" data-toggle="tooltip" data-placement="top" title="Google Plus"> <i class="fa fa-google-plus"></i> </a>
              
              
            </nav>
            
            
            <!-- filters -->
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
                <defs>
                  <filter id="shadowed-goo">
                      
                      <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10"></feGaussianBlur>
                      <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo"></feColorMatrix>
                      <feGaussianBlur in="goo" stdDeviation="3" result="shadow"></feGaussianBlur>
                      <feColorMatrix in="shadow" mode="matrix" values="0 0 0 0 0  0 0 0 0 0  0 0 0 0 0  0 0 0 1 -0.2" result="shadow"></feColorMatrix>
                      <feOffset in="shadow" dx="1" dy="1" result="shadow"></feOffset>
                      <feComposite in2="shadow" in="goo" result="goo"></feComposite>
                      <feComposite in2="goo" in="SourceGraphic" result="mix"></feComposite>
                  </filter>
                  <filter id="goo">
                      <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10"></feGaussianBlur>
                      <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo"></feColorMatrix>
                      <feComposite in2="goo" in="SourceGraphic" result="mix"></feComposite>
                  </filter>
                </defs>
            </svg>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
          </body>
        </html>
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