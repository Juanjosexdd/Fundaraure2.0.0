@csrf

<div class="form-group row">
    <label for="cedula" class="col-sm-2 col-form-label">Cedula :</label>
    <div class="col-md-10">
    <input class="form-control shadow-sm bg-light @error('cedula') is-invalid @enderror"
        id="cedula"
        type="text"
        name="cedula"
        placeholder="ingresa la cedula..."
        value="{{ old('cedula', $clientes->cedula) }}"
    >
    @error('cedula')
        <span class="invalid-feedback" role="alert">
            <strong class="help-block">{{ $message }}</strong>
        </span>
    @enderror
    </div>
</div>
<div class="form-group row">
    <label for="rif" class="col-sm-2 col-form-label">Rif :</label>
    <div class="col-md-10">
    <input class="form-control shadow-sm bg-light @error('rif') is-invalid @enderror"
        id="rif"
        type="text"
        name="rif"
        placeholder="ingresa el rif..."
        value="{{ old('rif', $clientes->rif) }}"
    >
    @error('rif')
        <span class="invalid-feedback" role="alert">
            <strong class="help-block">{{ $message }}</strong>
        </span>
    @enderror
    </div>
</div>
<div class="form-group row">
    <label for="nombres" class="col-sm-2 col-form-label">Nombres :</label>
    <div class="col-md-10">
    <input class="form-control shadow-sm bg-light @error('nombres') is-invalid @enderror"
        id="nombres"
        type="text"
        name="nombres"
        placeholder="ingresa el nombres..."
        value="{{ old('nombres', $clientes->nombres) }}"
    >
    @error('nombres')
        <span class="invalid-feedback" role="alert">
            <strong class="help-block">{{ $message }}</strong>
        </span>
    @enderror
    </div>
</div>
<div class="form-group row">
    <label for="apellidos" class="col-sm-2 col-form-label">Apellidos :</label>
    <div class="col-md-10">
    <input class="form-control shadow-sm bg-light @error('apellidos') is-invalid @enderror"
        id="apellidos"
        type="text"
        name="apellidos"
        placeholder="ingresa el apellidos..."
        value="{{ old('apellidos', $clientes->apellidos) }}"
    >
    @error('apellidos')
        <span class="invalid-feedback" role="alert">
            <strong class="help-block">{{ $message }}</strong>
        </span>
    @enderror
    </div>
</div>

<div class="form-group row">
    <label for="telefono" class="col-sm-2 col-form-label">Telefono :</label>
    <div class="col-md-10">
    <input class="form-control shadow-sm bg-light @error('telefono') is-invalid @enderror"
        id="telefono"
        type="text"
        name="telefono"
        placeholder="ingresa el telefono..."
        value="{{ old('telefono', $clientes->telefono) }}"
    >
    @error('telefono')
        <span class="invalid-feedback" role="alert">
            <strong class="help-block">{{ $message }}</strong>
        </span>
    @enderror
    </div>
</div>

<div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Correo :</label>
    <div class="col-md-10">
    <input class="form-control shadow-sm bg-light @error('email') is-invalid @enderror"
        id="email"
        type="email"
        name="email"
        placeholder="ingresa el email..."
        value="{{ old('email', $clientes->email) }}"
    >
    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong class="help-block">{{ $message }}</strong>
        </span>
    @enderror
    </div>
</div>


<div class="form-group row">
    <div class="col-md-2">
	    {{ Form::label('codtipocliente', 'Tipo cliente :') }}
    </div>
    <div class="col-md-10">
	    {{ Form::select('codtipocliente', $tcliente, null, ['class' => 'form-control']) }}
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2">
	    {{ Form::label('codsector', 'Sector :') }}
    </div>
    <div class="col-md-10">
	    {{ Form::select('codsector', $sector, null, ['class' => 'form-control']) }}
    </div>
</div>
<div class="form-group row">
	<label for="direccion" class="col-sm-2 col-form-label">Dirección: </label>
    <div class="col-md-10">
	<input class="form-control shadow-sm bg-light @error('nombres') is-invalid @enderror"
		id="direccion"
		type="text"
		name="direccion"
		autocomplete="off"
		placeholder="Direccion"
		value="{{ old('direccion', $clientes->direccion) }}"
	>
	@error('direccion')
		<span class="invalid-feedback" role="alert">
			<strong class="help-block">{{ $message }}</strong>
		</span>
	@enderror
    </div>
</div>

<div class="form-group">
	<button class="btn bg-teal btn-block btn-lg elevation-2" type="submit">Guardar</button>	
</div>