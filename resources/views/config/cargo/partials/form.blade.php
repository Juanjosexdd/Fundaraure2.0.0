@csrf
<div class="form-group row">
	<label for="nombre" class="col-sm-2 col-form-label">Nombre del cargo :</label>
	<div class="col-md-10">
		<input class="form-control shadow-sm bg-light @error('nombre') is-invalid @enderror"
			id="nombre"
			type="text"
			name="nombre"
			placeholder="Escribe aquí el nombre del cargo..."
			value="{{ old('nombre', $cargo->nombre) }}"
		>
		@error('nombre')
		<span class="invalid-feedback" role="alert">
			<strong class="help-block">{{ $message }}</strong>
		</span>
		@enderror
	</div>	
	
</div>
<div class="form-group row">
	<label for="descripcion" class="col-sm-2 col-form-label">Descripcion : </label>
	<div class="col-md-10">
		<input class="form-control shadow-sm bg-light @error('descripcion') is-invalid @enderror"
			id="descripcion"
			type="text"
			name="descripcion"
			placeholder="Escribe aquí la descripcion..."
			value="{{ old('descripcion', $cargo->descripcion) }}"
		>
		@error('descripcion')
		<span class="invalid-feedback" role="alert">
			<strong class="help-block">{{ $message }}</strong>
		</span>
		@enderror
	</div>
	
</div>


<div class="form-group">
	<button class="btn bg-teal btn-block btn-lg elevation-2" type="submit">{{ $btnText }}</button>
</div>