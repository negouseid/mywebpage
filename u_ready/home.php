<?php
ob_start();
include_once 'dconnect.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<meta charset="utf-8">
  <title>Colleg Game Plan</title>
  <meta name="viewport" content="width=devide-width, initial-scale=1.0">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script type="js/bootstrap.js"></script>

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="cool.js"></script>

  <link rel="stylesheet" type="text/css" href="index.css">
  
<link rel="stylesheet" href="style.css" type="text/css" />

<style>
  article, aside, figure, footer, header, hgroup, 
  menu, nav, section { display: block; }
</style>

<style>

    .container{
      width: 100%;
      height: 20%;
      background-color: white;
      padding-bottom: 10px;
      

    }
    .container-fluid img{
    	width: 720px;
    	height: 300px;
    }
    .carousel-inner{
    	height: 400px;
    }
    .row{
    	padding-top: 30px;
    }
    
    .main{
      font: bold 80px Georgia, serif;
      color: black;
      padding-bottom: 40px;
    }

    .main2{
      font: italic 16px Georgia, serif;
      line-height: 300%;
    }

    .footer{
      color: white;
    }

  </style>
  
  
</head>
<body>

<nav class="navbar navbar-default navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Portfolio</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">Home</a></li>
        <li><a href="profilepage.php">My Profile</a></li>
        <li><a href="http://www.fastweb.com/college-search/articles/summer-programs-for-high-school-students" target="_blank">Summer Programs</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">College <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="https://bigfuture.collegeboard.org/college-search" target="_blank">Find A School</a></li>
            <li><a href="http://colleges.usnews.rankingsandreviews.com/best-colleges/rankings/national-universities" target="_blank">School Ranking</a></li>
            <li class="divider"></li>
            <li><a href="http://www.payscale.com/college-salary-report" target="_blank">Return on Investment</a></li>
            <li class="divider"></li>
            <li><a href="http://www.collegexpress.com/articles-and-advice/student-life/articles/living-campus/facts-campus-life/" >Fact About College</a></li>
          </ul>
        </li>
      </ul>
      
      <div id="header">
        <div id="left">
    </div>
    <div id="right">
     <div id="content">
     
         Welcome 
         <?php 
         if(isset($_SESSION['user']))  //Checking if they have the session cookie
			{
			$result = mysql_query("SELECT first_name FROM `users` WHERE 1='".$_SESSION["user"]."' LIMIT 1");
			while($row = mysql_fetch_array($result))
			{
			echo $row['first_name'];
				}
		}
 ?>&nbsp;&nbsp;&nbsp;<a href="logout.php?logout">Sign Out</a>
        </div>
    </div>
</div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  
<div class="container" width="80px" heigth="20px"> 
  <div id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <a href="#">
            <img src="http://i0.wp.com/stemjobs.com/wp-content/uploads/2014/09/10.jpg" alt="building" class="img-responsive">
        </a>
      </div>

      <div class="item">
        <a href="#">
            <img src="http://isportsweb.com/wp-content/uploads//2015/02/VCU-Fans.jpg" style="heigth:200px" alt="Students" class="img-responsive">
        </a>
      </div>

      <div class="item">
        <a href="#">
            <img src="http://fccfoundation.org/wp-content/uploads/2015/01/GrantsScholarships_ScholarshipsEligibility_Campus-tour.jpg" alt="Students" class="img-responsive">
        </a>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<div class="container-fluid">
	<div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-9">

                <h1 class="page-header">
                    Welcome to Your 
                    <small>Home Page</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="http://www.forbes.com/sites/reynagobel/2015/02/28/5-reasons-why-college-is-still-worth-it/" target="_blank">Why College</a>
                </h2>
                <p class="lead">
                    by Reyna Gobel ,CONTRIBUTOR Forbes
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on October 4, 2015 at 10:00 PM</p>
                <hr>
                <a href="http://www.forbes.com/sites/reynagobel/2015/02/28/5-reasons-why-college-is-still-worth-it/" target="_blank">
                <img class="img-responsive" src="https://upload.wikimedia.org/wikipedia/commons/3/35/This_is_College_Hall_located_on_Simpson_College's_campus_in_Indianola,_Iowa.jpg" alt="college">
                </a>
                <hr>
                <p>It’s easy to stop believing that a college education is worth it when the nation has over a trillion dollars in debt, but college graduates still earn more over a lifetime than those without a degree. Plus, they’re more employable.</p>
                <a class="btn btn-primary" href="http://www.forbes.com/sites/reynagobel/2015/02/28/5-reasons-why-college-is-still-worth-it/" target="_blank">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

                <!-- Second Blog Post -->
                <h2>
                    <a href="http://www.fastweb.com/college-search/articles/top-15-mistakes-to-avoid-in-choosing-a-college">Top 15 Mistakes to Avoid in Choosing a College</a>
                </h2>
                <p class="lead">
                    by Elizabeth Hoyt Fastweb
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on October 4, 2015 at 10:45 PM</p>
                <hr>
                <img class="img-responsive" src="https://upload.wikimedia.org/wikipedia/en/a/a3/CampusLife_sm.jpg" alt="">
                <hr>
                <p>Choosing a college is stressful and making sure you make the right decision can often feel like a daunting task. To help out with the process, here are some common mistakes to avoid along the way:

</p>
                <a class="btn btn-primary" href="http://www.fastweb.com/college-search/articles/top-15-mistakes-to-avoid-in-choosing-a-college">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

                <!-- Third Blog Post -->
                <h2>
                    <a href="http://www.detroitnews.com/story/business/personal-finance/2015/10/04/two-big-changes-ease-filing-financial-aid-forms/73352210/">Two big changes ease the filing of financial aid forms</a>
                </h2>
                <p class="lead">
                    by Steve Rosen, The Kansas City Star
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on October 4, 2015 at 10:45 PM</p>
                <hr>
                <img class="img-responsive" src="http://www.stern.nyu.edu/sites/default/files/assets/images/uat_026960.jpg" alt="">
                <hr>
                <p>As financial experts sized up the latest changes in the must-do form for seeking federal student aid, one piece of advice kept bubbling to the top: Parent, push up your college planning.</p>
                <a class="btn btn-primary" href="http://www.detroitnews.com/story/business/personal-finance/2015/10/04/two-big-changes-ease-filing-financial-aid-forms/73352210/">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-3">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
   
</body>
</html>
