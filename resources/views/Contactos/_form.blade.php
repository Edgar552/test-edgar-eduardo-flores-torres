@csrf {{-- TOKEN DE SEGURIDAD EN FORMULARIOS --}}

<div class="form-row">
	<div class="form-group col-md-4">

		<label>Nombre Completo</label>
			<input class="form-control shadow-sm @error('nombre_completo') is-invalid @enderror " 
				   id="nombre_completo"
		   		   type="text" 
		   		   name="nombre_completo"
		   		   value="{{ old('nombre_completo',$ContactosModel->nombre_completo)}}"
		   		   required>

			@error('nombre_completo')
				<span class="invalid-feedback" role="alert">
					<strong>{{$message}}</strong>
				</span>
			@enderror	

	</div>

	<div class="form-group col-md-3">
		<label>Correo Electrónico</label>
			<input class="form-control shadow-sm @error('correo_electronico') is-invalid @enderror" 
				   id="correo_electronico" 
				   type="email"
				   name="correo_electronico"
				   value="{{old('correo_electronico',$ContactosModel->correo_electronico)}}"
				   required>

			@error('correo_electronico')
				<span class="invalid-feedback" role="alert">
					<strong>{{$message}}</strong>
				</span>
			@enderror	
	</div>	

	<div class="form-group col-md-2">
		<label>Teléfono</label>
			<input class="form-control shadow-sm @error('telefono') is-invalid @enderror" 
				   id="telefono" 
				   type="number"
				   name="telefono"
				   value="{{old('telefono',$ContactosModel->telefono)}}"
				   required>

			@error('telefono')
				<span class="invalid-feedback" role="alert">
					<strong>{{$message}}</strong>
				</span>
			@enderror	
	</div>

	<div class="form-group col-md-3">
		<label>Cargo</label>
			<input class="form-control shadow-sm @error('cargo') is-invalid @enderror" 
				   id="cargo" 
				   type="text"
				   name="cargo"
				   value="{{old('cargo',$ContactosModel->cargo)}}"
				   required>

			@error('cargo')
				<span class="invalid-feedback" role="alert">
					<strong>{{$message}}</strong>
				</span>
			@enderror	
	</div>	
</div>




<div class="form-row" style="display: none;">
	<div class="form-group col-md-3">
		
		<label>Empresa Responsable</label>
			
			<select name="id_empresa" 
					id="id_empresa" 
					class="custom-select mr-sm-2 
					@error('id_empresa') is-invalid @enderror" >

				<option value="">Elige una opción</option>
		    	
		    	@foreach ($ListadoEmpresas as $Empresas)	

			    	<option value={{$Empresas['id_empresa']}}
			    	{{$Empresas['id_empresa'] == $EmpresasModel['id_empresa'] ? 'selected' : ''}}
			    	{{ old('id_empresa') == $Empresas->id_empresa ? 'selected' : '' }}>{{$Empresas['nombre_comercial']}}</option>

			    @endforeach
       		</select>

				@error('id_empresa')

					<span class="invalid-feedback" role="alert">
						
						<strong>{{$message}}</strong>

					</span>

				@enderror

	</div>
</div>