@csrf
<div class="form-group row">
	<label for="nombre" class="col-sm-2 col-form-label">Forma de pago :</label>
	<div class="col-md-10">
		<input class="form-control shadow-sm bg-light @error('nombre') is-invalid @enderror"
			id="nombre"
			type="text"
			name="nombre"
			placeholder="Escribe aquí el nombre del cargo..."
			value="{{ old('nombre', $fpago->nombre) }}"
		>
		@error('nombre')
		<span class="invalid-feedback" role="alert">
			<strong class="help-block">{{ $message }}</strong>
		</span>
		@enderror
	</div>	
	
</div>
<div class="form-group row">
	<label for="abreviado" class="col-sm-2 col-form-label">Descripcion : </label>
	<div class="col-md-10">
		<input class="form-control shadow-sm bg-light @error('abreviado') is-invalid @enderror"
			id="abreviado"
			type="text"
			name="abreviado"
			placeholder="Escribe aquí la descripcion..."
			value="{{ old('abreviado', $fpago->abreviado) }}"
		>
		@error('abreviado')
		<span class="invalid-feedback" role="alert">
			<strong class="help-block">{{ $message }}</strong>
		</span>
		@enderror
	</div>
	
</div>


<div class="form-group">
	<button class="btn bg-teal btn-block btn-lg elevation-2" type="submit">{{ $btnText }}</button>
</div>