

<!doctype html>
<html>
<head>
	<title>Weather</title>
	<meta charset="utf-8" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/
bootstrap.min.css">

	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/
bootstrap-theme.min.css">
<script  type="text/javascript">
		function changeImg(imgNumber)	{
			var myImages = ["http://diellewebsolutions.com/wp-content/uploads/2014/01/rain_drops_splashes_heavy_rain_dullness_bad_weather_60638_2560x1024.jpg"]; 
			var imgShown = document.body.style.backgroundImage;
			var newImgNumber =Math.floor(Math.random()*myImages.length);
			document.body.style.backgroundImage = 'url('+myImages[newImgNumber]+')';
		}
		window.onload=changeImg;
	</script>
	<style>
		html, body {
			height:100%;
		}
		.container{
		width:100%;
		height:100%;
		background-size:cover;
		padding-top:150px;	
		}
		
	.center{
		text-align:center;
	}
	
	.white{
		color:white;
	}
	
	.btn{
		
		margin-top:20px;
		margin-bottom:20px;

	}
	
	.alert {
		margin-top:20px;
		display:none;
	}
	
	p{
		padding-top:15px;
		padding-bottom:15px;
	}
	
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 center">
				<h1 class="center white">Weather Finder</h1>
				<p class="lead center white">Enter your city below to get a forecast of the weather.</p>
				<form>
					<div class="form-gorup">
						<input type="text" placeholder="Eg. London, Paris, Bangalore, New York..." class="form-control" name="city" id="city"/>
					</div>
					<button id="findMyWeather"class=" btn btn-success btn-lg center" >Find My Weather</button>
					
					
				</form>
						<div id="success"class="alert alert-success">success</div>
						<div id="fail" class="alert alert-danger">Couldn't find city. Please try again</div>
						<div id="noCity" class="alert alert-danger">Please enter city.</div>

			</div>
			
		</div>
	</div>
	
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	


<script>
	$("#findMyWeather").click(function(event){
		event.preventDefault();
		$(".alert").hide();
		if ($("#city").val()!=""){
		$.get("scraper.php?city="+$("#city").val(),function( data ){
			if(data==""){
				$("#fail").fadeIn();				
			} else {			
				$("#success").html(data).fadeIn();	
			}
		});
		} else {
			
			$("#noCity").fadeIn();
		}
	});
	
</script>
</body>
</html>




