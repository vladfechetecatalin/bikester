<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bike Shop</title>

	<link href="/css/app.css" rel="stylesheet">
	<link href="/css/main.css" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,600,700' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Contains All JS Plugins: jQuery, Bootrstrap, Owl Carousel, etc -->
	<script src="/plugins/all.js"></script>

</head>

<body>
	<div class="page-wrap">
		<div id="header">
			@include('layouts.header')
		</div>

		<div class="master-search">
			<div id="global-search">
				<div class="container">
					<form action="/search" name="" method="GET" accept-charset="UTF-8" class="row small">
						<div class="form-container">
							<input type="text" name="keyword" placeholder="ex: Suzuki, Honda, ambreiaj, 120/70/17, manusi, etc... " class="">
							<button type="submit" class="">Cautare rapida</button>
							<div class="clearfix"></div>
						</div>
					</form>
				</div>
			</div>
		</div>

		<div id="content" class="container">
			@yield('content')
		</div>
	</div>

	<div id="footer" class="sticky-footer">
		<div class="container">
			@include('layouts.footer')
		</div>
	</div>

	<div class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Modal title</h4>
				</div>

				<div class="modal-body">
					<p>One fine body&hellip;</p>
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
