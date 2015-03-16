@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					<?php $models = Makes::find(3)->models; ?>
						@foreach($models as $model)
							{{$model->name}}
						@endforeach
					You are logged in!
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
