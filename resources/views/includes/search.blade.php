<div id="global-search">
	<div class="container">
		<form action="{{ route('search') }}" name="" method="GET" accept-charset="UTF-8">
			<input type="text" name="keyword" placeholder="Any keyword">

			<select class="make">
				<option id="0">Choose Option</option>

				@foreach ($manufacturers as $manufacturer)
					<option id="{{ $manufacturer->id }}">{{ $manufacturer->name }}</option>
				@endforeach
			</select>

			<button type="submit">Search</button>
		</form>
	</div>
</div>

<div id="global-search">
	<div class="container">
		<form action="/search" name="" method="GET" accept-charset="UTF-8" class="row large">
			<div class="col-sm-5">
				<input type="text" name="keyword" placeholder="Any keyword" class="">
			</div>

			<div class="col-sm-3">
				<select class="">
					<option id="0">Choose Option</option>
					<option id="1">Suzuki</option>
					<option id="2">Honda</option>
				</select>
			</div>

			<div class="col-sm-3">
				<select class="">
					<option id="0">Choose Option</option>
					<option id="1">Piese</option>
					<option id="2">Echipamente</option>
					<option id="3">Motociclete</option>
					<option id="4">Motociclete</option>
				</select>
			</div>

			<div class="col-sm-1">
				<button type="submit" class="">Search</button>
			</div>
		</form>
	</div>
</div>