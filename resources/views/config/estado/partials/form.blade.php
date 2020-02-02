
@csrf
<div class="form-group">
	{{ Form::label('codpais', 'País') }}
	{{ Form::select('codpais', $pais, null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	<label for="nombre">Nombre</label>
	<input class="form-control shadow-sm bg-light @error('nombre') is-invalid @enderror"
		id="nombre"
		type="text"
		name="nombre"
		autocomplete="off"
		placeholder="Escribe aquí una descripción..."
		value="{{ old('nombre', $estado->nombre) }}"
	>
	@error('descripcion')
		<span class="invalid-feedback" role="alert">
			<strong class="help-block">{{ $message }}</strong>
		</span>
	@enderror
</div>

<div class="form-group">
	<label for="abreviado">Abreviatura</label>
	<input class="form-control shadow-sm bg-light @error('abreviado') is-invalid @enderror"
		id="abreviado"
		type="text"
		name="abreviado"
		placeholder="Escribe aquí el abreviado del país..."
		value="{{ old('abreviado', $estado->abreviado) }}"
	>
	@error('abreviado')
		<span class="invalid-feedback" role="alert">
			<strong class="help-block">{{ $message }}</strong>
		</span>
	@enderror
</div>

<div class="form-group">
	<button class="btn bg-info btn-block btn-sm" type="submit">{{ $btnText }}</button>
</div>