<nav class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<a class="navbar-brand" href="#">Laravel</a>

			<!-- <a href="/posteaza">
				Posteaza anunt
			</a> -->
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<!-- <ul class="nav navbar-nav primary">
				<li><a href="/">Home</a></li>
				<li><a href="/">Adauga anunt</a></li>
			</ul> -->

			<ul class="nav navbar-nav categories">
				<li><a href="/">Motociclete</a></li>
				<li><a href="/">Echipamente</a></li>
				<li><a href="/">Piese noi</a></li>
				<li><a href="/">Piese SH</a></li>
				<li><a href="/">Consumabile</a></li>
				<li><a href="/">Accesorii</a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				@if (Auth::guest())
					<li><a href="/auth/login">Intră în cont</a></li>
					<li><a href="/auth/register">Înregistrează-te</a></li>
				@else

					@if (Auth::user()->active == '1')
						<li>
							<a href="/posteaza">
								Postează anunț
							</a>
						</li>
					@endif

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span> {{ Auth::user()->name }} <span class="caret"></span></a>
						<ul class="dropdown-menu animated" role="menu">
							<li>
								<a href="/settings">
									<span class="glyphicon animated glyphicon-cog" aria-hidden="true"></span>
									Setări cont
								</a>
							</li>

							<li>
								<a href="/mailing">
									<span class="glyphicon animated glyphicon-envelope" aria-hidden="true"></span>
									Setări mail
								</a>
							</li>

							<li>
								<a href="/statistics">
									<span class="glyphicon animated glyphicon-signal" aria-hidden="true"></span>
									Statistici
								</a>
							</li>

							<li>
								<a href="/auth/logout">
									<span class="glyphicon animated glyphicon-log-out" aria-hidden="true"></span>
									Ieșire din cont
								</a>
							</li>
						</ul>
					</li>
				@endif
			</ul>
		</div>
	</div>
</nav>