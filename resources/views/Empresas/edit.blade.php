@extends('partials.layout')

@section('content')

<div class="container py-3">
	
	<div class="row">
		
		<div class="col-12 col-sm-10 col-lg-12 mx-auto">
			
			<form class="bg-white shadow rounded-lg py-3 px-5"
				method="POST"
				action="{{route('empresas.update', $EmpresasModel)}}"
				onsubmit="return checkSubmit();">
		
			
				<h1>Actualizar Información de la Empresa</h1>
					<hr>
			
				@method('PATCH')

				@include('Empresas._form')

				<div class="d-flex justify-content-between align-items-center">
					<a href="{{route('index')}}"><i class="fa fa-arrow-left"></i> Regresar</a>
					<div class="btn-group">
						<button class="btn btn-primary btn-md btn-block"  id="btsubmit" type="submit">Actualizar Información</button>
					</div>
				</div>	
				
			
			</form>

		</div>

	</div>

</div>

@endsection