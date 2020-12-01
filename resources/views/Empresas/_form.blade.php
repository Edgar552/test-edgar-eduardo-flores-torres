@csrf {{-- TOKEN DE SEGURIDAD EN FORMULARIOS --}}

<div class="form-row">
	<div class="form-group col-md-4">

		<label>Razón Social</label>
			<input class="form-control shadow-sm @error('razon_social') is-invalid @enderror " 
				   id="razon_social"
		   		   type="text" 
		   		   name="razon_social"
		   		   value="{{ old('razon_social',$EmpresasModel->razon_social)}}"
		   		   required>

			@error('razon_social')
				<span class="invalid-feedback" role="alert">
					<strong>{{$message}}</strong>
				</span>
			@enderror	

	</div>

	<div class="form-group col-md-3">
		<label>R.F.C.</label>
			<input class="form-control shadow-sm @error('rfc') is-invalid @enderror" 
				   id="rfc" 
				   type="text"
				   name="rfc"
				   value="{{old('rfc',$EmpresasModel->rfc)}}"
				   required>

			@error('rfc')
				<span class="invalid-feedback" role="alert">
					<strong>{{$message}}</strong>
				</span>
			@enderror	
	</div>	

	<div class="form-group col-md-5">
		<label>Nombre Comercial</label>
			<input class="form-control shadow-sm @error('nombre_comercial') is-invalid @enderror" 
				   id="nombre_comercial" 
				   type="text"
				   name="nombre_comercial"
				   value="{{old('nombre_comercial',$EmpresasModel->nombre_comercial)}}"
				   required>

			@error('nombre_comercial')
				<span class="invalid-feedback" role="alert">
					<strong>{{$message}}</strong>
				</span>
			@enderror	
	</div>


</div>

<div class="form-row">
	
	<div class="form-group col-md-6">
		<label>Domicilio</label>
			<input class="form-control shadow-sm @error('direccion') is-invalid @enderror" 
				   id="direccion" 
				   type="text"
				   name="direccion"
				   value="{{old('direccion',$EmpresasModel->direccion)}}"
				   required>

			@error('direccion')
				<span class="invalid-feedback" role="alert">
					<strong>{{$message}}</strong>
				</span>
			@enderror	
	</div>

	<div class="form-group col-md-3">
		<label>Teléfono</label>
			<input class="form-control shadow-sm @error('telefono') is-invalid @enderror" 
				   id="telefono" 
				   type="number"
				   name="telefono"
				   value="{{old('telefono',$EmpresasModel->telefono)}}"
				   required>

			@error('telefono')
				<span class="invalid-feedback" role="alert">
					<strong>{{$message}}</strong>
				</span>
			@enderror	
	</div>

</div>