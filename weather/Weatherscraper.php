


<!doctype html>
<html>
<head>
	
	<title>Weather Quest</title>
	
	<meta charset="utf-8" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<style>

	html, body {
		height:100%;
	}

	.container {
		background-image:url("weather4.jpg");
		background-size:cover;
		background-position:center;
		width:100%;
		height:100%;
		padding-top:150px;
	}

	.center {
		text-align:center;
	}

	.fontcolor {
		color:#39aad3;
	}

	h1 {
		font-weight:bold;
	}	

	p {
		padding-top:15px;
		padding-bottom:15px;
	}	

	.button {
		background:#dbbe97;
		margin-bottom:15px;
	}

	.alert {
	display:none;
	}
	

</style>


</head>

<body>

	<div class="container">
	
		<div class="row">
		
			<div class="col-md-6 col-md-offset-3 center">
			
				<h1 class="center fontcolor">Weather Quest</h1>
				
				<p class="lead center fontcolor">Enter your city and find out its upcoming forecast</p>
				
					
					
				<form>					
					
					<div class="form-group">
						
						<input type="text" class="form-control" name="city" id="city" placeholder="Eg. London, Paris, Tokyo..."/>					
				
				
						
					</div>					
					
					<button id="findWeather" class="btn btn-default btn-lg button">Check Weather</button>				
				
				</form>
				
			<div id="success" class="alert alert-success">Success!</div>
			
			<div id="fail" class="alert alert-danger">Could not find weather data for that city</div>
			
			<div id="noCity" class="alert alert-danger">Please enter a city</div>
			
			</div>
			
			
			
		</div>
	

	</div>



<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<script>

	$("#findWeather").click(function(event) {
		
		event.preventDefault();
		
		$(".alert").hide();
		
		if ($("#city").val()!="") {
		
		$.get("scraper.php?city="+$("#city").val(), function( data ) {
			
			if (data=="") {
				
				
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