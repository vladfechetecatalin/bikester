@extends('app')

@section('content')
	<div class="post-bike-page">
		<div id="post-form" class="form custom-form">
			<div class="post-message">
				<h3>Adăugare anunț</h3>
				<h4>Completează corect câmpurile, anunțul tău va fi mai ușor de găsit.</h4>
			</div>

			<form class="form-horizontal" role="form" method="POST" action="{{ route('posteaza-moto') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="top-row">
					<div class="input-block field-wrap select-wrap">
						<label>
							Producător<span class="req">*</span>
						</label>

						<select class="make-selector select" name="make">
							<option value="0">Selectează producător</option>

							@foreach (Makes::sortedMakes() as $make)
								<option value="{{ $make->id }}">{{ $make->name }}</option>
							@endforeach
						</select>
					</div>

					<div class="input-block field-wrap select-wrap">
						<label>
							Model<span class="req">*</span>
						</label>

						<select class="model-selector select" disabled="disabled" name="model">
							<option value="0">Selectează model</option>
						</select>
					</div>
				</div>

				<div class="top-row">
					<div class="field-wrap">
						<label>
							Denumire model<span class="req">*</span>
						</label>

						<input type="text" name="nume" required autocomplete="off" data-toggle="tooltip" data-placement="left" title="Unele modele au și nume alternativ, ex: Hornet, Bandit, Interceptor, etc..."/>
					</div>

					<div class="input-block field-wrap select-wrap">
						<label>
							Categorie<span class="req">*</span>
						</label>

						<select name="categorie" class="select">
							<option value="0">Selectează categoria</option>
							@foreach (BikeCategories::all() as $category)
								<option value="{{ $category->id }}">{{ $category->name }}</option>
							@endforeach
						</select>
					</div>
				</div>

				<div class="top-row">
					<div class="field-wrap">
						<label>
							Anul fabricației<span class="req">*</span>
						</label>

						<input type="text" name="an-fabricatie" required autocomplete="off"/>
					</div>

					<div class="field-wrap">
						<label>
							Kilometri<span class="req">*</span>
						</label>

						<input type="text" name="km" required autocomplete="off"/>
					</div>
				</div>

				<div class="top-row">
					<div class="field-wrap">
						<label>
							Capacitate cilindrică<span class="req">*</span>
						</label>

						<input type="text" name="cc" required autocomplete="off" data-toggle="tooltip" data-placement="left" title="Capacitatea cilindrică se regăsește în talon la rubrica (P.1)"/>
					</div>

					<div class="field-wrap">
						<label>
							Putere<span class="req">*</span>
						</label>

						<input type="text" name="kw" required autocomplete="off" data-toggle="tooltip" data-placement="right" title="Puterea trecută în talon la rubrica (P.2), exprimată in KW, aceasta va fi automat transformată in CP la vizualizarea anunțului."/>
					</div>
				</div>

				<div class="top-row">
					<div class="input-block field-wrap select-wrap">
						<label>
							Asigurare<span class="req">*</span>
						</label>

						<select class="select" name="asigurare">
							<option value="lei">Expirată</option>
							<option value="euro">Valabilă</option>
						</select>
					</div>

					<div class="input-block field-wrap select-wrap">
						<label>
							ITP<span class="req">*</span>
						</label>

						<select class="select" name="itp">
							<option value="lei">Expirat</option>
							<option value="euro">Valabil</option>
						</select>
					</div>
				</div>

				<div class="top-row">
					<div class="input-block field-wrap select-wrap">
						<label>
							Acte<span class="req">*</span>
						</label>

						<select class="select" name="acte">
							<option value="0">Nu are acte</option>
							<option value="1">Înmatriculată</option>
							<option value="2">Neînmatriculată</option>
						</select>
					</div>

					<div class="input-block field-wrap select-wrap">
						<label>
							Schimburi<span class="req">*</span>
						</label>

						<select class="select" name="schimburi" data-toggle="tooltip" data-placement="right" title="Specifică dacă dorești sau nu schimburi cu alte produse.">
							<option value="0">Nu accept schimburi</option>
							<option value="1">Accept schimburi</option>
						</select>
					</div>
				</div>

				<div class="top-row">
					<div class="input-block field-wrap select-wrap">
						<label>
							Garanție<span class="req">*</span>
						</label>

						<select class="select" name="garantie">
							<option value="0">Nu</option>
							<option value="1">Da</option>
						</select>
					</div>

					<div class="input-block field-wrap select-wrap">
						<label>
							Stare<span class="req">*</span>
						</label>

						<select class="select" name="stare">
							<option value="nou">Nouă</option>
							<option value="sh">Folosită</option>
						</select>
					</div>
				</div>

				<div class="top-row">
					<div class="field-wrap">
						<label>
							Preț<span class="req">*</span>
						</label>

						<input type="text" name="pret" required autocomplete="off"/>
					</div>

					<div class="input-block field-wrap select-wrap">
						<label>
							Monedă<span class="req">*</span>
						</label>

						<select class="select" name="moneda" data-toggle="tooltip" data-placement="right" title="Alege moneda în care preferi să vinzi.">
							<option value="lei">Lei</option>
							<option value="euro">Euro</option>
						</select>
					</div>
				</div>

				<div class="field-wrap" data-toggle="tooltip" data-placement="left" title="Încearca să descrii cât mai corect și amănunțit produsul.">
					<label>
						Descriere motocicletă (maxim 1000 caractere)<span class="req">*</span>
					</label>

					<textarea id="descriere" name="descriere" required autocomplete="off" maxlength="1000"></textarea>

					<span class="character-count"><span class="count">1000</span> caractere rămase</span>
				</div>

				<div class="field-wrap">

					<div class="uploaded-images" data-toggle="tooltip" data-placement="left" title="Adaugă imagini cât mai detaliate cu produsul pe care îl vinzi, dimensiunea maximă per fișier este de 2MB">
						<div class="image-placeholder" data-input="uploadImage1"><div class="inner"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></div></div>
						<div class="image-placeholder" data-input="uploadImage2"><div class="inner"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></div></div>
						<div class="image-placeholder" data-input="uploadImage3"><div class="inner"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></div></div>
						<div class="image-placeholder" data-input="uploadImage4"><div class="inner"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></div></div>
						<div class="image-placeholder" data-input="uploadImage5"><div class="inner"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></div></div>
						<div class="image-placeholder" data-input="uploadImage6"><div class="inner"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></div></div>
						<div class="image-placeholder" data-input="uploadImage7"><div class="inner"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></div></div>
						<div class="image-placeholder" data-input="uploadImage8"><div class="inner"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></div></div>
						<div class="clearfix"></div>
					</div>

					<div class="images">
						<input name="imagine[1]" id="uploadImage1" class="image-upload hide" style="" type="file" accept="image/jpeg,image/gif,image/png">
						<input name="imagine[2]" id="uploadImage2" class="image-upload hide" style="" type="file" accept="image/jpeg,image/gif,image/png">
						<input name="imagine[3]" id="uploadImage3" class="image-upload hide" style="" type="file" accept="image/jpeg,image/gif,image/png">
						<input name="imagine[4]" id="uploadImage4" class="image-upload hide" style="" type="file" accept="image/jpeg,image/gif,image/png">
						<input name="imagine[5]" id="uploadImage5" class="image-upload hide" style="" type="file" accept="image/jpeg,image/gif,image/png">
						<input name="imagine[6]" id="uploadImage6" class="image-upload hide" style="" type="file" accept="image/jpeg,image/gif,image/png">
						<input name="imagine[7]" id="uploadImage7" class="image-upload hide" style="" type="file" accept="image/jpeg,image/gif,image/png">
						<input name="imagine[8]" id="uploadImage8" class="image-upload hide" style="" type="file" accept="image/jpeg,image/gif,image/png">
					</div>

				</div>

				<button type="submit" class="button button-block" data-toggle="tooltip" data-placement="left" title="Previzualizează anunțul înainte de postare"/>Previzualizează anunțul</button>
			</form>
		</div>
	</div>

	<script type="text/javascript" src="/js/register.js"></script>
	<script type="text/javascript" src="/js/post-page.js"></script>
@endsection