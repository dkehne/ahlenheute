<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="100 Quickwins in Ahlen">
    <meta name="author" content="Steffen Biehs & Daniel Kehne">

    <title>3 Col Portfolio - Start Bootstrap Template</title>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Dialog -->
    <script src="js/jquery.basicPopup.js"></script>
    <script src="js/scripts.js"></script>
    <link href="css/basicPopup.css" rel="stylesheet">
    <link href="css/basicPopupDefault.css" rel="stylesheet">
    <style>
        #popup-content { display:none; text-align:center}
    </style>
    <script>
        $('#btn-open').click(function(){
            $.basicpopup({
                content: $('#popup-content').html()
            });
        });
    </script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/3-col-portfolio.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>

    </script>
</head>

<body>
<script>
    $.getScript('//cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js', function () {
        $('#main .img-responsive').lazyload({});
    });</script>
<?php include("php/connector.php"); ?>


<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Start Bootstrap</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Page Content -->
<div class="container">

    <!-- Page Header -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Page Heading
                <small>Secondary Text</small>
            </h1>
        </div>
    </div>
    <!-- /.row -->

    <?php if ($result->num_rows > 0) {
        // output data of each row
        echo "<div class=\"row\">";
        while($row = $result->fetch_assoc()) {
            if ($row%3==0){
                echo "</div>";
                echo "<div class=\"row\">";
            }
            if ($row["active"]==1){
                echo "
           <div class=\"col-md-4 portfolio-item\">
            <a href=\"#\">
                <img class=\"img-responsive\" src=\"http://placehold.it/700x400\" alt=\"\">
            </a>
            <h3>
                <a href=\"#\">". $row["title"]."</a>
            </h3>
            <p> ".$row["description"]." </p>
        </div>";
            }
        }
        echo "</div>";
    } ?>


    <!-- Projects Row -->
    <!--  <div class="row">
          <div class="col-md-4 portfolio-item">
              <form method="post" action="quickwin.php">
                  <input type='hidden' name='qw_id' value='1'>
                  <input type="image" class="img-responsive" src="http://placehold.it/700x400" alt="Submit" />
              </form>
              <h3>
                  <a href="#">Project Name</a>
              </h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque
                  urna varius vitae.</p>
          </div>
          <div class="col-md-4 portfolio-item">
              <a href="#">
                  <img class="img-responsive" src="http://placehold.it/700x400" alt="">
              </a>
              <h3>
                  <a href="#">Project Name</a>
              </h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque
                  urna varius vitae.</p>
          </div>
          <div class="col-md-4 portfolio-item">
              <a href="#">
                  <img class="img-responsive" src="http://placehold.it/700x400" alt="">
              </a>
              <h3>
                  <a href="#">Project Name</a>
              </h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque
                  urna varius vitae.</p>
          </div>
      </div> -->
    <!-- /.row -->
    <!-- Projects Row
    <!--
<div class="row">
    <div class="col-md-4 portfolio-item">
        <a href="#">
            <img class="img-responsive" src="http://placehold.it/700x400" alt="">
        </a>
        <h3>
            <a href="#">Project Name</a>
        </h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque
            urna varius vitae.</p>
    </div>
    <div class="col-md-4 portfolio-item">
        <a href="#">
            <img class="img-responsive" src="http://placehold.it/700x400" alt="">
        </a>
        <h3>
            <a href="#">Project Name</a>
        </h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque
            urna varius vitae.</p>
    </div>
    <div class="col-md-4 portfolio-item">
        <a href="#">
            <img class="img-responsive" src="http://placehold.it/700x400" alt="">
        </a>
        <h3>
            <a href="#">Project Name</a>
        </h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque
            urna varius vitae.</p>
    </div>
</div> -->

    <!-- Projects Row -->
    <!--  <div class="row">
          <div class="col-md-4 portfolio-item">
              <a href="#">
                  <img class="img-responsive" src="http://placehold.it/700x400" alt="">
              </a>
              <h3>
                  <a href="#">Project Name</a>
              </h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque
                  urna varius vitae.</p>
          </div>
          <div class="col-md-4 portfolio-item">
              <a href="#">
                  <img class="img-responsive" src="http://placehold.it/700x400" alt="">
              </a>
              <h3>
                  <a href="#">Project Name</a>
              </h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque
                  urna varius vitae.</p>
          </div>
          <div class="col-md-4 portfolio-item">
              <a href="#">
                  <img class="img-responsive" src="http://placehold.it/700x400" alt="">
              </a>
              <h3>
                  <a href="#">Project Name</a>
              </h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque
                  urna varius vitae.</p>
          </div>
      </div>-->
    <!-- /.row -->

    <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Your Website 2014</p>
            </div>
        </div>
        <!-- /.row -->
    </footer>

</div> <!-- /.container -->
</body>

</html>
