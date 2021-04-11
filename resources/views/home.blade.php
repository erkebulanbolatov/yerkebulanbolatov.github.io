

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

	<style type="text/css">
		.main{
			background: yellow;
			height: 100px;
			padding-top: 40px;
		}
		.main2{
			background-image: url(http://www.archery.kiev.ua/wp-content/uploads/2020/10/skynews-football-premier-league_4976711.jpg);
			color: white;
			height: 500px;
		}
		h3{
			padding-top: 200px;
		}
	</style>
</head>
<body>
	<div class="main">
		<div class="container">
			<h2>{{ __('lang.title') }}</h2>
		</div>
	</div>
	<div class="main2">
		<div class="container">
			<h3>{{ __("lang.body") }}</h3>
		</div>
	</div>
	
</body>
</html>