<!DOCTYPE html>
<html lang="en">
<?php include('navbar.php');?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>codeplanet</title>
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
    <!--Spinning Planet Styles-->
    <style>
        @-webkit-keyframes planet-rotation {
            from {
                background-position: 0% 0%;
            }
            to {
                background-position: -200% 0%;
            }
        }
        @keyframes planet-rotation {
            from {
                background-position: 0% 0%;
            }
            to {
                background-position: -200% 0%;
            }
        }
        body {
            background-color: #101010;
        }
        .planet-image {
            width: 25vw;
            height: 25vw;
            max-width: 256px;
            max-height: 256px;
            border-radius: 50%;
            position: relative;
            background: #303030 url('/images/night_sky.jpg') repeat-x center center;
            background-size: cover;
            -webkit-animation: planet-rotation 15s linear infinite;
        }
        .planet-image:after {
            position: absolute;
            content: '';
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            height: 100%;
            border-radius: 50%;
            background-image:
                -webkit-radial-gradient(16% 50%, 30% 50%, rgba(255,240,230,.001), transparent),
                -webkit-linear-gradient(left, rgba(255,240,220,0.1) 12%, rgba(255,240,220,0) 40%, rgba(0,0,0,0.1) 60%, rgba(0,0,0,1) 100%);
            background-image:
                -webkit-radial-gradient(16% 50%, 30% 50%, rgba(255,240,230,.001), transparent),
                -moz-linear-gradient(left, rgba(255,240,220,0.1) 12%, rgba(255,240,220,0) 40%, rgba(0,0,0,0.1) 60%, rgba(0,0,0,1) 100%);
            background-image:
                -webkit-radial-gradient(16% 50%, 30% 50%, rgba(255,240,230,.001), transparent),
                -o-linear-gradient(left, rgba(255,240,220,0.1) 12%, rgba(255,240,220,0) 40%, rgba(0,0,0,0.1) 60%, rgba(0,0,0,1) 100%);
            background-image:
                -webkit-radial-gradient(16% 50%, 30% 50%, rgba(255,240,230,.001), transparent),
                linear-gradient(to right, rgba(255,240,220,0.1) 12%, rgba(255,240,220,0) 40%, rgba(0,0,0,0.1) 60%, rgba(0,0,0,1) 100%);;
                linear-gradient(to left, rgba(0,0,0,0.1) 12%, rgba(0,0,0,0) 40%, rgba(0,0,0,0.1) 60%, rgba(0,0,0,1) 100%);
            box-shadow: inset 10px 0 30px rgba(255,240,220,0.4);
        }
        .animated{
            animation-duration: 2s !important;
        }
        @keyframes particleAnimation{
            from {
                left: -100px;
            }
            to {
                left: calc( 100% + 100px );
            }
        }

        .p{
            position:fixed;
            left:0px;
            top:100px;
            width:1px;
            height:1px;
            color: white;
            position:fixed;
            animation-name:particleAnimation;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
        }
        .p::before{
            position:absolute;
            display:block;
            content:"";
            width:100px;
            right:1px;
            top:0px;
            height:1px;
            background: linear-gradient(to right, rgba(0,0,0,0) 0%,rgba(255,255,255,0.4) 100%); 
        }  
        .p-1{
            animation-duration:10s;
            top:20%;
        }
        .p-2{
            animation-duration:5s;
            top:60%;
        }
        .p-3{
            animation-duration:20s;
            top:90%;
        }
    </style>
</head>
<body>
    <!--Main Navigation-->
    <header>
        <div class="view">
            <div class="full-bg-img flex-center">
                <ul>
                    <div class="front_page">
                        <!--spinning planet-->
                        <div class="p p-1"></div>
                        <div class="p p-2"></div>
                        <div class="p p-3"></div>
                        <li style="margin-bottom: 0;">
                            <div class="animated zoomIn">
                                <div style="padding: 16px; margin-top: 10%; display: flex; justify-content: center; align-items: center; padding-top: 15%;">
                                    <div class="planet-image"></div>
                                </div>
                            </div>
                        </li>
                        <!--codeplanet title-->
                        <li>
                            <h2 class="h2-responsive">codeplanet</h1>
                        </li>
                        <li>
                            <p>the programming social media platform</p>
                        </li>
                        <li>
                            <!--Sign up button-->
                            <a href="/site_pages/login.php" class="btn purple btn-block">Sign up</a>
                        </li>
                        </div>
                    </div>
                </ul>
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