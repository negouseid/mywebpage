<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Negou Seid page</title>
    <!-- Latest compiled and minified CSS -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    
        <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      html,body {
			margin:0;
			height:100%
		}
		
		.sky {
			height:95%;
			background:#007fd5;
			position:relative;
			overflow:hidden;
			-webkit-animation:sky_background 50s ease-out infinite;
			-moz-animation:sky_background 50s ease-out infinite;
			-o-animation:sky_background 50s ease-out infinite;
			-webkit-transform:translate3d(0,0,0);
			-moz-transform:translate3d(0,0,0);
			-o-transform:translate3d(0,0,0)
		}
		
		
		
		.clouds_one {
			background:url("http://montanaflynn.me/lab/css-clouds/images/cloud_one.png");
			position:absolute;
			padding-top: 20px;
			left:0;
			top:0;
			height:600%;
			width:300%;
			-webkit-animation:cloud_one 50s linear infinite;
			-moz-animation:cloud_one 50s linear infinite;
			-o-animation:cloud_one 50s linear infinite;
			-webkit-transform:translate3d(0,0,0);
			-moz-transform:translate3d(0,0,0);
			-o-transform:translate3d(0,0,0)
		}
		
		.clouds_two {
			background:url("http://montanaflynn.me/lab/css-clouds/images/cloud_two.png");
			position:absolute;
			padding-top: 20px;
			left:0;
			top:0;
			height:600%;
			width:300%;
			-webkit-animation:cloud_two 75s linear infinite;
			-moz-animation:cloud_two 75s linear infinite;
			-o-animation:cloud_two 75s linear infinite;
			-webkit-transform:translate3d(0,0,0);
			-moz-transform:translate3d(0,0,0);
			-o-transform:translate3d(0,0,0)
		}
		
		.clouds_three {
			background:url("http://montanaflynn.me/lab/css-clouds/images/cloud_three.png");
			position:absolute;
			padding-top: 20px;
			left:0;
			top:0;
			height:600%;
			width:300%;
			-webkit-animation:cloud_three 100s linear infinite;
			-moz-animation:cloud_three 100s linear infinite;
			-o-animation:cloud_three 100s linear infinite;
			-webkit-transform:translate3d(0,0,0);
			-moz-transform:translate3d(0,0,0);
			-o-transform:translate3d(0,0,0)
		}
		
		@-webkit-keyframes sky_background {
			0% {
				background:#007fd5;
				color:#007fd5
			}
			
			50% {
				background:#000;
				color:#a3d9ff
			}
			
			100% {
				background:#007fd5;
				color:#007fd5
			}
		}
		
		
		@-webkit-keyframes cloud_one {
			0% {
				left:0
			}
		
			100% {
				left:-200%
			}
		}
		
		@-webkit-keyframes cloud_two {
			0% {
				left:0
			}
		
			100% {
				left:-200%
			}
		}
		
		@-webkit-keyframes cloud_three {
			0% {
				left:0
			}
		
			100% {
				left:-200%
			}
		}
		
		@-moz-keyframes sky_background {
			0% {
				background:#007fd5;
				color:#007fd5
			}
			
			50% {
				background:#000;
				color:#a3d9ff
			}
			
			100% {
				background:#007fd5;
				color:#007fd5
			}
		}
		
		@-moz-keyframes cloud_one {
			0% {
				left:0
			}
		
			100% {
				left:-200%
			}
		}
		
		@-moz-keyframes cloud_two {
			0% {
				left:0
			}
		
			100% {
				left:-200%
			}
		}
		
		@-moz-keyframes cloud_three {
			0% {
				left:0
			}
		
			100% {
				left:-200%
			}
		}

		.navbar{
			margin-top: 20%;
			margin-right: 30%;
			margin-left: 30%;
			opacity: .9;
			border: outset;

		}

		#word{
			padding: 0px;
		}
		h1,h3{
			padding: 0;
			margin: 0;
			text-align: center;
		}
		h1{
			font-size: 70px;
			font-weight: bold;
		}
		
    </style>

  </head>

  <body>

    <div class="sky">
    	
        <div class="clouds_one"> </div>

        <div class="clouds_two"></div>

        <div class="clouds_three"></div>
 <nav class="navbar navbar-default">
 	<div id="word"> <h3>Hi, my Name is Negou Seid and I </h3><br/>
 	<h1> Design & Build</h1><br/>
 	<h3> Web and Mobile applications</h3>
 	</div>
</nav>
       
    </div>
 <div class="container-fluid">
    	<div class="row">
    	    <div class="col-md-3"> <center><a href="index.php">My Home</a></center></div>
    		<div class="col-md-3"> <center><a href="mylove.html">My Love</a></center></div>
    		<div class="col-md-3"> <center><a href="portfolio3.html">My Work</a></center></div>
    		<div class="col-md-3"> <center><a href="contact.html">My Contact</a></center></div>
    	</div>
    </div>



   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
   	<script src="js/prefixfree.min.js"></script>
   	<script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
</body>

</html>
    
    
    
    
