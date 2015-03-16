@extends('app')

@section('content')
	<div class="post-page">
		<h3 class="post-message">Posteaza gratuit anuntul tau, alege categoria potrivita produsului tau.</h3>

		<div class="post-block">
			<a href="{{route('motocicleta')}}" class="post-category">
				<div class="inner">
					<span class="category-icon motocicleta"></span>
					<h4 class="category-name">Motocicleta</h4>
					<span class="detalii">Motocicleta noua sau folosita</span>
				</div>
			</a>

			<a href="{{route('echipament')}}" class="post-category">
				<div class="inner">
					<span class="category-icon echipament"></span>
					<h4 class="category-name">Echipament</h4>
					<span class="detalii">Echipament nou sau folosit</span>
				</div>
			</a>

			<a href="{{route('piese-noi')}}" class="post-category">
				<div class="inner">
					<span class="category-icon piese-noi"></span>
					<h4 class="category-name">Piese noi</h4>
					<span class="detalii">Doar piese noi</span>
				</div>
			</a>

			<a href="{{route('piese-sh')}}" class="post-category">
				<div class="inner">
					<span class="category-icon piese-sh"></span>
					<h4 class="category-name">Piese SH</h4>
					<span class="detalii">Doar piese provenite din dezmembrari</span>
				</div>
			</a>

			<a href="{{route('consumabile')}}" class="post-category">
				<div class="inner">
					<span class="category-icon consumabile"></span>
					<h4 class="category-name">Consumabile</h4>
					<span class="detalii">Consumabile (ulei, filtre, anvelope, etc...)</span>
				</div>
			</a>

			<a href="{{route('accesorii')}}" class="post-category">
				<div class="inner">
					<span class="category-icon accesorii"></span>
					<h4 class="category-name">Accesorii</h4>
					<span class="detalii">Accesorii aftermarket, unelte, etc...</span>
				</div>
			</a>

			<div class="clearfix"></div>
		</div>
	</div>
@endsection
