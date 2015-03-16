@extends('app')

@section('content')
<div class="custom-form">
	<div id="signup">   
		@if (session('status'))
			<div class="alert alert-success">
				{{ session('status') }}
			</div>
		@endif

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

		<h1>Resetare parola</h1>

		<form class="form-horizontal form" role="form" method="POST" action="/password/email">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<div class="field-wrap">
				<label>
					Adresa de email<span class="req">*</span>
				</label>

				<input type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="off">
			</div>

			<button type="submit" class="button button-block"/>Reseteaza-mi parola</button>
		</form>
	</div>
</div>
<script type="text/javascript" src="/js/register.js"></script>
@endsection
