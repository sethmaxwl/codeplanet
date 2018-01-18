<?php 
include('navbar.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Profile - codeplanet</title>
    <link rel="icon" href="/images/planet.ico" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="/project_resources/MDB-Free/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="/project_resources/MDB-Free/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="/project_resources/MDB-Free/css/style.css" rel="stylesheet">
     <!-- JQuery -->
    <script type="text/javascript" src="/project_resources/MDB-Free/js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="/project_resources/MDB-Free/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="/project_resources/MDB-Free/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="/project_resources/MDB-Free/js/mdb.min.js"></script>
</head>

<body>
    <header>
        <div class="view animated fadeInDown">
        <div class="full-bg-img flex-center">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-4"></div>
                    <div class="col-md-4 text-center">
                        <div class="card" id="profile_card">
                            <img src="/images/planet.png" id="profile_pic">
                            <div id="profile_text" class="bottom_margin">
                                <h1 class="h1-responsive">User Name</h1>
                                <p class="title bottom_margin"><b>Name</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="bottom_margin">
    <div class="container">
        <div class="row">
        <div class="col-md-3">
        <div class="divider-new">
            <h2 class="h2-responsive wow bounceIn">About Me</h2>
        </div>

        <!--Section: About-->
        <section id="about" class="text-center">
            <!--This is just to test what the div will look like with a bunch of text.-->
            <p>Lorem ipsum dolor sit amet, ea graece ridens dissentias est, eum exerci blandit tincidunt an, cu enim feugiat nec. Pri et everti dolores pericula, per altera urbanitas cu, amet philosophia cu has. Et quo admodum consetetur concludaturque, vis eu solum neglegentur. Sit sumo qualisque cu, ex ius legimus invenire voluptaria, iuvaret invenire intellegat sed cu. Vim an quas torquatos.

No graecis persecuti concludaturque eum, novum dolor id pri. Ne per assum scripserit. Id has mollis prompta, eum te</p>
        </section>
        <!--Section: About-->
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-7">
        <div class="divider-new">
            <h2 class="h2-responsive wow" id="#user_projects">Projects</h2>
        </div>

        <!--Section: Best features-->
        <section id="best-features">

            <div class="row">

                <!--First columnn-->
                <div class="col-md-6">
                    <!--Card-->
                    <div class="card" id="card1 bottom_margin">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight" id="card-image">
                            <img src="http://media.istockphoto.com/photos/young-programmers-celebtating-successful-project-picture-id649833448" class="img-fluid" alt="">
                            <a>
                                <div class="mask"></div>
                            </a>
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-block text-center">
                            <!--Title-->
                            <h4 class="card-title" style="margin-top: 5%;">Project Title</h4>
                            <hr>
                            <div class="row">
                                <div class="col-sm bottom_margin">
                                    <!--Text-->
                                    <p class="card-text text-center">Project Description</p>
                                </div>
                            </div>
                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->
                </div>
                <!--First columnn-->

                <!--Second columnn-->
                <div class="col-md-6">
                    <!--Card-->
                    <div class="card bottom_margin">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight" id="card-image">
                            <img src="http://media.istockphoto.com/photos/young-programmers-celebtating-successful-project-picture-id649833448" class="img-fluid">
                            <a>
                                <div class="mask"></div>
                            </a>
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-block text-center">
                            <!--Title-->
                            <h4 class="card-title">Project Title</h4>
                            <hr>
                            <div class="row">
                                <div class="col-sm bottom_margin">
                                    <!--Text-->
                                    <p class="card-text text-center">Project Description</p>
                                </div>
                            </div>
                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->
                </div>
                <!--Second columnn-->
                </div>
                <div class="row">
                <!--Third columnn-->
                <div class="col-md-6">
                    <!--Card-->
                    <div class="card bottom_margin">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight" style="background: none; height: auto;">
                            <img src="http://media.istockphoto.com/photos/young-programmers-celebtating-successful-project-picture-id649833448" class="img-fluid">
                            <a>
                                <div class="mask"></div>
                            </a>
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-block text-center">
                            <!--Title-->
                            <h4 class="card-title">Project Title</h4>
                            <hr>
                            <div class="row">
                                <div class="col-sm bottom_margin">
                                    <!--Text-->
                                    <p class="card-text text-center">Project Description</p>
                                </div>
                            </div>
                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->
                </div>
                <!--Third columnn-->

                <!--Fourth columnn-->
                <div class="col-md-6">
                    <!--Card-->
                    <div class="card hoverable">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight" style="background: none; height: auto;">
                            <img src="http://media.istockphoto.com/photos/young-programmers-celebtating-successful-project-picture-id649833448" class="img-fluid" alt="">
                            <a>
                                <div class="mask"></div>
                            </a>
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-block text-center">
                            <!--Title-->
                            <h4 class="card-title">Project Title</h4>
                            <hr>
                            <div class="row">
                                <div class="col-sm-8">
                                    <!--Text-->
                                    <p class="card-text">Project Description</p>
                                </div>
                                <div class="col-sm-2">
                                    <div class="row">
                                        <div class="fa fa-heart" style="color: blue; margin-top: 7%; margin-right: 10%;"></div>
                                        <p>: 0</p>
                                    </div>
                                    <div class="row">
                                        <div class="fa fa-comment" style="color: black; margin-top: 7%; margin-right: 10%;"></div>
                                        <p>: 0</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/.Card content-->
                    </div>
                    </div>
                    
                    <!--/.Card-->
                </div>
                <!--Fourth columnn-->
                </div>
            </div>
        </section>

    </div>
    </main>
</body>
</html>
