
<div class="form-group row">
	<label for="cedula" class="col-sm-2 col-form-label">Cedula :</label>
	<div class="col-md-10">
	<input class="form-control shadow-sm bg-light @error('cedula') is-invalid @enderror"
		id="cedula"
		type="text"
		name="cedula"
		placeholder="Escribe aquí tu cedula..."
		value="{{ old('cedula', $user->cedula) }}"
	>
	@error('cedula')
		<span class="invalid-feedback" role="alert">
			<strong class="help-block">{{ $message }}</strong>
		</span>
	@enderror
	</div>
	
</div>
<div class="form-group row">
	<label for="name" class="col-sm-2 col-form-label">Nombres :</label>
	<div class="col-md-10">
	<input class="form-control shadow-sm bg-light @error('name') is-invalid @enderror"
		id="name"
		type="text"
		name="name"
		placeholder="Escribe aquí tu nombre..."
		value="{{ old('name', $user->name) }}"
	>
	@error('name')
		<span class="invalid-feedback" role="alert">
			<strong class="help-block">{{ $message }}</strong>
		</span>
	@enderror
	</div>
</div>
<div class="form-group row">
	<label for="last_name" class="col-sm-2 col-form-label">Apellidos :</label>
	<div class="col-md-10">
	<input class="form-control shadow-sm bg-light @error('last_name') is-invalid @enderror"
		id="last_name"
		type="text"
		name="last_name"
		placeholder="Escribe aquí tu apellidos..."
		value="{{ old('last_name', $user->last_name) }}"
	>
	@error('last_name')
		<span class="invalid-feedback" role="alert">
			<strong class="help-block">{{ $message }}</strong>
		</span>
	@enderror
	</div>
</div>
<div class="form-group row">
	<label for="phone" class="col-sm-2 col-form-label">Telefono : </label>
	<div class="col-md-10">
	<input class="form-control shadow-sm bg-light @error('phone') is-invalid @enderror"
		id="phone"
		type="text"
		name="phone"
		placeholder="Escribe aquí tu telefono..."
		value="{{ old('phone', $user->phone) }}"
	>
	@error('phone')
		<span class="invalid-feedback" role="alert">
			<strong class="help-block">{{ $message }}</strong>
		</span>
	@enderror
	</div>
</div>
<div class="form-group row">
	<label for="address" class="col-sm-2 col-form-label">Dirección : </label>
	<div class="col-md-10">
	<input class="form-control shadow-sm bg-light @error('address') is-invalid @enderror"
		id="address"
		type="text"
		name="address"
		placeholder="Escribe aquí la dirección..."
		value="{{ old('address', $user->address) }}"
	>
	@error('address')
		<span class="invalid-feedback" role="alert">
			<strong class="help-block">{{ $message }}</strong>
		</span>
	@enderror
	</div>
</div>
<div class="form-group row">
	<label for="email" class="col-sm-2 col-form-label">Email :</label>
	<div class="col-md-10">
	<input class="form-control shadow-sm bg-light @error('email') is-invalid @enderror"
		id="email"
		type="text"
		name="email"
		autocomplete="off"
		placeholder="Escribe aquí tu correo..."
		value="{{ old('email', $user->email) }}"
	>
	@error('email')
		<span class="invalid-feedback" role="alert">
			<strong class="help-block">{{ $message }}</strong>
		</span>
	@enderror
	</div>
</div>
<div class="form-group row">
	<label for="password" class="col-sm-2 col-form-label">Contraseña :</label>
	<div class="col-md-10">
	<input class="form-control shadow-sm bg-light @error('password') is-invalid @enderror"
		id="password"
		type="password"
		name="password"
		autocomplete="off"
		placeholder="Escribe aquí tu correo..."
		value="{{ old('password', $user->password) }}"
	>
	@error('password')
		<span class="invalid-feedback" role="alert">
			<strong class="help-block">{{ $message }}</strong>
		</span>
	@enderror
	</div>
</div>
<hr>
<div class="form-group">
	<ul class="list-unstyled">
		@foreach($roles as $role)
			<li class="d-inline">
				<label>
					{{ Form::checkbox('roles[]', $role->id, null )}}
					{{ $role->name }}
				</label>
				<span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
			</li>
		@endforeach
	</ul>
</div>
<div class="form-group">
	<button class="btn bg-teal btn-block btn-lg elevation-2" type="submit">{{ $btnText }}</button>
</div>