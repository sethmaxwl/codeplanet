<!DOCTYPE html>
<html lang="en">
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
            <style>
              button.accordion {
                  background-color: #4717F6;
                  color: #FFFFFF;
                  cursor: pointer;
                  padding: 18px;
                  width: 100%;
                  border: none;
                  text-align: left;
                  outline: none;
                  font-size: 15px;
                  font-family: Roboto,sans-serif;
                  transition: 0.4s;
              }
              
              button.accordion.active, button.accordion:hover {
                  background-color: #2604A4;
              }
              
              button.accordion:after {
                  content: '\002B';
                  color: #FFFFFF;
                  font-weight: bold;
                  float: right;
                  margin-left: 5px;
              }
              
              button.accordion.active:after {
                  content: "\2212";
              }
              
              div.panel {
                  padding: 0 18px;
                  background-color: #d3d3d3;
                  max-height: 0;
                  overflow: hidden;
                  transition: max-height 0.2s ease-out;
                  font-family: Roboto,sans-serif;
              }
            </style>
          </head>
          <body>
            <button class="accordion">What is codeplanet?</button>
            <div class="panel">
              <h4 class="h4-responsive wow" style="animation-name: none; visibility: visible; margin-top: 1%;"><b>Q. What is codeplanet?</b></h4>
              <p>A. The codeplanet platform is designed to allow users to develop JavaScript programs and share them with a community of people. This community-based approach to programming allows users to collect value feedback from others in the form of upvotes and comments, helping programmers to learn from each other and enhance their programming skills.</p>
            </div>
              
            <button class="accordion">What makes codeplanet different from sites like JSFiddle or CodePen?</button>
            <div class="panel">
              <h4 class="h4-responsive wow" style="animation-name: none; visibility: visible; margin-top: 1%;"><b>Q. What makes codeplanet different from sites like JSFiddle or CodePen?</b></h4>
                <p>A. While codeplanet is similar to JSFiddle and CodePen, codeplanet provides a community in addition to its code execution capabilities. Instead of using codeplanet as a way to demonstrate projects on community sites such as Stack Exchange, codeplanet eliminates the middle man by providing users with an environment to actively develop JavaScript programs and get community feedback in the same application.</p>
            </div>
              
            <button class="accordion">How can I output to the JavaScript console?</button>
            <div class="panel">
              <h4 class="h4-responsive wow" style="animation-name: none; visibility: visible; margin-top: 1%;"><b>Q. How can I output to the JavaScript console?</b></h4>
              <p>A. To get an output, you can use the print function. Just pass whatever you want to be the output and this will display it on the console. Be sure to look at the help function to view all of the pre-defined functions we have made for codeplanet.</p>
            </div>
            
            <button class="accordion">What features does the JavaScript editor have?</button>
            <div class="panel">
             <h4 class="h4-responsive wow" style="animation-name: none; visibility: visible; margin-top: 1%;"><b>Q. What features does the JavaScript code editor have?</b></h4>
              <p>A. The code editor has a few features that are designed to refine the user experience when writing programs.</p>
              <ul>
                <li>If the editor is selected, CTRL-F (Windows) or CMD-F (Mac) will open a search box within the editor where you can search for words in your program. If your program is long enough to have a scrollbar on the side, each time a search term is found, there will be a purple highlight on the sidebar.</li>
                <li>The code editor has an auto-bracket feature that adds a closing bracket to any open bracket.</li>
                <li>Variable names are colored green and italicized whenever a variable is defined. For each use of the variable after its definition, the variable is colored green. This is designed to help users keep track of where variables are defined and used.</li>
                <li>The active line has a purple highlight to make it easier to find where you are editing in the editor.</li>
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
            <style class="cp-pen-styles">
            
              a {
                color: inherit;
              }
              
              h1, h2, h3, h4 {
                margin: 0;
                margin-bottom: 10px;
                margin-top: 10px;
              }
              
              h1 {
                font-size: 3em;
              }
              
              .menu {
                -webkit-filter: url("#shadowed-goo");
                        filter: url("#shadowed-goo");
              }
              
              .menu-item, .menu-open-button {
                background: #A239CA;
                border-radius: 100%;
                width: 80px;
                height: 80px;
                margin-left: -40px;
                position: absolute;
                top: 20px;
                color: white;
                text-align: center;
                line-height: 80px;
                -webkit-transform: translate3d(0, 0, 0);
                        transform: translate3d(0, 0, 0);
                -webkit-transition: -webkit-transform ease-out 200ms;
                transition: -webkit-transform ease-out 200ms;
                transition: transform ease-out 200ms;
                transition: transform ease-out 200ms, -webkit-transform ease-out 200ms;
              }
              
              .menu-open {
                display: none;
              }
              
              .hamburger {
                width: 25px;
                height: 3px;
                background: white;
                display: block;
                position: absolute;
                top: 50%;
                left: 50%;
                margin-left: -12.5px;
                margin-top: -1.5px;
                -webkit-transition: -webkit-transform 200ms;
                transition: -webkit-transform 200ms;
                transition: transform 200ms;
                transition: transform 200ms, -webkit-transform 200ms;
              }
              
              .hamburger-1 {
                -webkit-transform: translate3d(0, -8px, 0);
                        transform: translate3d(0, -8px, 0);
              }
              
              .hamburger-2 {
                -webkit-transform: translate3d(0, 0, 0);
                        transform: translate3d(0, 0, 0);
              }
              
              .hamburger-3 {
                -webkit-transform: translate3d(0, 8px, 0);
                        transform: translate3d(0, 8px, 0);
              }
              
              .menu-open:checked + .menu-open-button .hamburger-1 {
                -webkit-transform: translate3d(0, 0, 0) rotate(45deg);
                        transform: translate3d(0, 0, 0) rotate(45deg);
              }
              .menu-open:checked + .menu-open-button .hamburger-2 {
                -webkit-transform: translate3d(0, 0, 0) scale(0.1, 1);
                        transform: translate3d(0, 0, 0) scale(0.1, 1);
              }
              .menu-open:checked + .menu-open-button .hamburger-3 {
                -webkit-transform: translate3d(0, 0, 0) rotate(-45deg);
                        transform: translate3d(0, 0, 0) rotate(-45deg);
              }
              
              .menu {
                position: absolute;
                left: 50%;
                margin-left: -80px;
                padding-top: 20px;
                padding-left: 80px;
                width: 650px;
                height: 150px;
                box-sizing: border-box;
                font-size: 20px;
                text-align: left;
              }
              
              .menu-item:hover {
                background: white;
                color: #A239CA;
              }
              .menu-item:nth-child(3) {
                -webkit-transition-duration: 180ms;
                        transition-duration: 180ms;
              }
              .menu-item:nth-child(4) {
                -webkit-transition-duration: 180ms;
                        transition-duration: 180ms;
              }
              .menu-item:nth-child(5) {
                -webkit-transition-duration: 180ms;
                        transition-duration: 180ms;
              }
              
              .menu-open-button {
                z-index: 2;
                -webkit-transition-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1.275);
                        transition-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1.275);
                -webkit-transition-duration: 400ms;
                        transition-duration: 400ms;
                -webkit-transform: scale(1.1, 1.1) translate3d(0, 0, 0);
                        transform: scale(1.1, 1.1) translate3d(0, 0, 0);
                cursor: pointer;
              }
              
              .menu-open-button:hover {
                -webkit-transform: scale(1.2, 1.2) translate3d(0, 0, 0);
                        transform: scale(1.2, 1.2) translate3d(0, 0, 0);
              }
              
              .menu-open:checked + .menu-open-button {
                -webkit-transition-timing-function: linear;
                        transition-timing-function: linear;
                -webkit-transition-duration: 200ms;
                        transition-duration: 200ms;
                -webkit-transform: scale(0.8, 0.8) translate3d(0, 0, 0);
                        transform: scale(0.8, 0.8) translate3d(0, 0, 0);
              }
              
              .menu-open:checked ~ .menu-item {
                -webkit-transition-timing-function: cubic-bezier(0.165, 0.84, 0.44, 1);
                        transition-timing-function: cubic-bezier(0.165, 0.84, 0.44, 1);
              }
              .menu-open:checked ~ .menu-item:nth-child(3) {
                -webkit-transition-duration: 170ms;
                        transition-duration: 170ms;
                -webkit-transform: translate3d(80px, 0, 0);
                        transform: translate3d(80px, 0, 0);
              }
              .menu-open:checked ~ .menu-item:nth-child(4) {
                -webkit-transition-duration: 250ms;
                        transition-duration: 250ms;
                -webkit-transform: translate3d(160px, 0, 0);
                        transform: translate3d(160px, 0, 0);
              }
              .menu-open:checked ~ .menu-item:nth-child(5) {
                -webkit-transition-duration: 330ms;
                        transition-duration: 330ms;
                -webkit-transform: translate3d(240px, 0, 0);
                        transform: translate3d(240px, 0, 0);
              }
            </style>
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