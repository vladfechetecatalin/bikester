@extends('app')

@section('content')
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
		<li class="tab active"><a href="#login">Intra in cont</a></li>
		<li class="tab"><a href="#signup">Inregistreaza-te</a></li>
	</ul>

	<div class="tab-content">
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
	</div><!-- tab-content -->
</div> <!-- /form -->

<script type="text/javascript" src="/js/register.js"></script>
@endsection
