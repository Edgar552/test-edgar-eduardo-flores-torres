@extends('partials.layout')

@section('content')

<div class="container py-3">
	<div class="bg-white p-3 shadow rouded">	
		<h1>{{$EmpresasModel->nombre_comercial}}</h1>

			<p class="text-secondary">R.F.C: {{$EmpresasModel->rfc}}</p>

			<p class="text-secondary">Domicilio: {{$EmpresasModel->direccion}}</p>

			<p class="text-secondary">Teléfono: {{$EmpresasModel->telefono}}</p>

			<p class="text-black-50">Creado
			{{ $EmpresasModel->created_at->diffForHumans()}}
			</p>
		
		<div class="d-flex justify-content-between align-items-center">
			<a href="{{route('index')}}"><i class="fa fa-arrow-left"></i> Regresar</a>
				<div class="btn-group">
					<a class="btn btn-secondary" href="{{ route('empresas.edit' , $EmpresasModel->id_empresa) }}">Editar información de la Empresa</a>
				</div>
		</div>	
	</div>

</div>
@endsection