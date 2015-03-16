@extends('app')

@section('content')
<!-- <div class="container-fluid register">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Register</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="/auth/register">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Name</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail Address</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Confirm Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password_confirmation">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Register
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div> -->

<div class="form custom-form">
	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whoops!</strong> There were some problems with your input.<br><br>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	<ul class="tab-group">
		<li class="tab active"><a href="#signup">Inregistreaza-te</a></li>
		<li class="tab"><a href="#login">Intra in cont</a></li>
	</ul>

	<div class="tab-content">
		<div id="signup">   
			<h1>Inregistreaza-te acum gratuit!</h1>

			<form class="form-horizontal" role="form" method="POST" action="/auth/register">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="top-row">
					<div class="field-wrap">
						<label>
							Nume<span class="req">*</span>
						</label>

						<input type="text" name="name" required autocomplete="off" />
					</div>

					<div class="field-wrap">
						<label>
							Prenume<span class="req">*</span>
						</label>

						<input type="text" name="last_name" required autocomplete="off"/>
					</div>
				</div>

				<div class="field-wrap">
					<label>
						Adresa de email<span class="req">*</span>
					</label>

					<input type="email" name="email" required autocomplete="off"/>
				</div>

				<div class="field-wrap">
					<label>
						Parola<span class="req">*</span>
					</label>

					<input type="password" name="password" required autocomplete="off"/>
				</div>

				<div class="field-wrap">
					<label>
						Confirma Parola<span class="req">*</span>
					</label>

					<input type="password" name="password_confirmation" required autocomplete="off"/>
				</div>

				<button type="submit" class="button button-block"/>Inregistreaza contul</button>
			</form>
		</div>

		<div id="login">   
			<h1>Bine ai revenit!</h1>

			<form class="form-horizontal" role="form" method="POST" action="/auth/login">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="field-wrap">
					<label>
						Adresa de email<span class="req">*</span>
					</label>

					<input type="email" name="email" required autocomplete="off"/>
				</div>

				<div class="field-wrap">
					<label>
						Parola<span class="req">*</span>
					</label>

					<input type="password" name="password" required autocomplete="off"/>
				</div>

				<p class="forgot"><a href="/password/email">Ai uitat parola?</a></p>

				<button class="button button-block"/>Intra in cont</button>

			</form>
		</div>
	</div><!-- tab-content -->
</div> <!-- /form -->

<script type="text/javascript" src="/js/register.js"></script>
@endsection
