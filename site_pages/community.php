<?php 
    session_start();
    include('navbar.html');
    //if(!isset($_SESSION['username'])){
    //header("Location:Login.php");}
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Community - codeplanet</title>
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
  <body class="noOverflowX">
    <header class="animated fadeIn">
      <div class="container">
            <div class="divider-new pt-5">
                <h2 class="h2-responsive wow editor_tag">Community Projects</h2>
            </div>
        </div>
      <div class="row" id="cards">
        <div class="col">
        <div class="card">
          <div class="card-header deep-orange lighten-1 white-text">Featured</div>
          <div class="card-body text-center">
            <h4 class="card-title">Project Title</h4>
            <p class="card-text">Project Description</p>
            <a class="btn btn-deep-orange btn-sm">Open project</a>
          </div>
        </div>
        </div>
         <div class="col">
        <div class="card">
          <div class="card-header purple lighten-1 white-text">Featured</div>
          <div class="card-body text-center">
            <h4 class="card-title">Project Title</h4>
            <p class="card-text">Project Description</p>
            <a class="btn btn-purple btn-sm">Open project</a>
          </div>
        </div>
        </div>
         <div class="col">
        <div class="card">
          <div class="card-header primary-color lighten-1 white-text">Featured</div>
          <div class="card-body text-center">
            <h4 class="card-title">Project Title</h4>
            <p class="card-text">Project Description</p>
            <a class="btn btn-primary btn-sm">Open project</a>
          </div>
        </div>
        </div>
         <div class="col">
        <div class="card">
          <div class="card-header success-color lighten-1 white-text">Featured</div>
          <div class="card-body text-center">
            <h4 class="card-title">Project Title</h4>
            <p class="card-text">Project Description</p>
            <a class="btn btn-success btn-sm">Open project</a>
          </div>
        </div>
        </div>
      </div>
        <div class="margin5">
          <ul class="pagination pg-purple pagination-lg justify-content-center">
            <!--Arrow left-->
            <li class="page-item">
              <a class="page-link" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <!--Numbers-->
            <li class="page-item active"><a class="page-link">1</a></li>
            <li class="page-item"><a class="page-link">2</a></li>
            <li class="page-item"><a class="page-link">3</a></li>
            <li class="page-item"><a class="page-link">4</a></li>
            <li class="page-item"><a class="page-link">5</a></li>
  
            <!--Arrow right-->
            <li class="page-item">
                <a class="page-link" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
          </ul>
      </div>
    </header>
    

  </body>
</html>