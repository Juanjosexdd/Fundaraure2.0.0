
@csrf
<div class="form-group row">
	<div class="col-md-2">
		{{ Form::label('codparroquia', 'Parroquia :') }}
	</div>
	<div class="col-md-10">
		{{ Form::select('codparroquia', $parroquia, null, ['class' => 'form-control']) }}
	</div>
</div>
<div class="form-group row">
	<label for="nombre" class="col-sm-2 col-form-label">Nombre :</label>
	<div class="col-md-10">
	<input class="form-control shadow-sm bg-light @error('nombre') is-invalid @enderror"
		id="nombre"
		type="text"
		name="nombre"
		autocomplete="off"
		placeholder="Ej: Los Cortijos"
		value="{{ old('nombre', $sector->nombre) }}"
	>
	@error('nombre')
		<span class="invalid-feedback" role="alert">
			<strong class="help-block">{{ $message }}</strong>
		</span>
	@enderror
	</div>
</div>

<div class="form-group row">
	<label for="abreviado" class="col-sm-2 col-form-label">Abreviatura :</label>	
	<div class="col-md-10">
	<input class="form-control shadow-sm bg-light @error('abreviado') is-invalid @enderror"
		id="abreviado"
		type="text"
		name="abreviado"
		placeholder="Ej: Cortijos"
		value="{{ old('abreviado', $sector->abreviado) }}"
	>
	@error('abreviado')
		<span class="invalid-feedback" role="alert">
			<strong class="help-block">{{ $message }}</strong>
		</span>
	@enderror
	</div>
</div>

<div class="form-group">
	<button class="btn bg-teal btn-block btn-lg elevation-2" type="submit">Guardar</button>	
</div>