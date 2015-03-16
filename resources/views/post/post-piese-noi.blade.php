@extends('app')

@section('content')
	<div class="post-equipment-page">
		<div id="post-form" class="form custom-form">
			<div class="post-message">
				<h3>Adăugare anunț</h3>
				<h4>Completează corect câmpurile, anunțul tău va fi mai ușor de găsit.</h4>
			</div>

			<form class="form-horizontal" role="form" method="POST" action="/auth/register">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="top-row">
					<div class="input-block field-wrap select-wrap">
						<label>
							Categorie<span class="req">*</span>
						</label>

						<select class="make-selector select" name="make">
							<option value="0">Selectează categoria</option>

							@foreach (EquipmentType::all() as $type)
								<option value="{{ $type->id }}">{{ $type->name }}</option>
							@endforeach
						</select>
					</div>

					<div class="input-block field-wrap select-wrap">
						<label>
							Stare<span class="req">*</span>
						</label>

						<select class="select" name="asigurare">
							<option value="nou">Produs nou</option>
							<option value="sh">Produs folosit</option>
						</select>
					</div>
				</div>

				<div class="top-row">
					<div class="field-wrap">
						<label>
							Denumire<span class="req">*</span>
						</label>

						<input type="text" name="denumire" required autocomplete="off" data-toggle="tooltip" data-placement="left" title="Producător și model, ex: Scorpion EXO 1000"/>
					</div>

					<div class="field-wrap">
						<label>
							Mărime<span class="req">*</span>
						</label>

						<input type="text" name="marime" required autocomplete="off" data-toggle="tooltip" data-placement="right" title="Măsura echipamentului, ex: 48, 50, 52, S, M, L, etc..."/>
					</div>
				</div>

				<div class="top-row">
					<div class="input-block field-wrap select-wrap">
						<label>
							Factura si garantie<span class="req">*</span>
						</label>

						<select class="select" name="factura">
							<option value="0">Nu</option>
							<option value="1">Da</option>
						</select>
					</div>

					<div class="input-block field-wrap select-wrap">
						<label>
							Schimburi<span class="req">*</span>
						</label>

						<select class="select" name="asigurare" data-toggle="tooltip" data-placement="right" title="Specifică dacă dorești sau nu schimburi cu alte produse.">
							<option value="0">Nu accept schimburi</option>
							<option value="1">Accept schimburi</option>
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

						<select class="select" name="model" data-toggle="tooltip" data-placement="right" title="Alege moneda în care preferi să vinzi.">
							<option value="lei">Lei</option>
							<option value="euro">Euro</option>
						</select>
					</div>
				</div>

				<div class="field-wrap" data-toggle="tooltip" data-placement="left" title="Încearca să descrii cât mai corect și amănunțit produsul.">
					<label>
						Descriere (maxim 1000 caractere)<span class="req">*</span>
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
						<input id="uploadImage1" class="image-upload hide" style="" type="file" accept="image/jpeg,image/gif,image/png">
						<input id="uploadImage2" class="image-upload hide" style="" type="file" accept="image/jpeg,image/gif,image/png">
						<input id="uploadImage3" class="image-upload hide" style="" type="file" accept="image/jpeg,image/gif,image/png">
						<input id="uploadImage4" class="image-upload hide" style="" type="file" accept="image/jpeg,image/gif,image/png">
						<input id="uploadImage5" class="image-upload hide" style="" type="file" accept="image/jpeg,image/gif,image/png">
						<input id="uploadImage6" class="image-upload hide" style="" type="file" accept="image/jpeg,image/gif,image/png">
						<input id="uploadImage7" class="image-upload hide" style="" type="file" accept="image/jpeg,image/gif,image/png">
						<input id="uploadImage8" class="image-upload hide" style="" type="file" accept="image/jpeg,image/gif,image/png">
					</div>
				</div>

				<button type="submit" class="button button-block" data-toggle="tooltip" data-placement="left" title="Previzualizează anunțul înainte de postare"/>Previzualizează anunțul</button>
			</form>
		</div>
	</div>

	<script type="text/javascript" src="/js/register.js"></script>
	<script type="text/javascript" src="/js/post-page.js"></script>
@endsection