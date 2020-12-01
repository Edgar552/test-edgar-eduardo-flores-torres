@extends('partials.layout')

@section('content')
	<div class="container py-3">
		
		<div class="form-row bg-white shadow rounded-lg py-3 px-5">
			
			<div class="col-12 col-sm-10 col-lg-12 mx-auto text-center">
				<h1>DEVSOFTY Empresas | Contactos</h1>	
					<hr>
				<a class="btn btn-outline-primary" href="{{route('empresas.create')}}">Registrar Nueva Empresa</a>				
			</div>
				
		</div>
			<br>
		<table class="table table-hover shadow">
			<thead class="text-center" style="background-color: #0E0837; color: white; font-size: 14px;">
				<tr>
					<th>Nombre Comercial de la Empresas</th>
				    <th colspan="2">Acciones</th>
				</tr>
			</thead>

			<tbody style="font-size: 14px">
				@forelse($EmpresasModel as $DatosEmpresas)
					<tr>
						<td class="text-center">{{ $DatosEmpresas->nombre_comercial }} </td>

						<td class="text-center">
							<a class="btn btn-secondary btn-sm" href="{{route('empresas.show',$DatosEmpresas->id_empresa)}}">Ver Empresa</a>
							<a class="btn btn-success btn-sm" href="{{route('contactos.show', $DatosEmpresas->id_empresa)}}">Editar la Empresa</a>
						</td>

	 					<td class="text-center">
							<form action="{{ route('empresas.destroy',$DatosEmpresas->id_empresa) }}" method="POST">
		                        @csrf
		                        <input type="hidden" name="_method" value="DELETE">
		                        <button class="btn btn-danger btn-sm" onclick="return OpcionEliminar()"> Eliminar</button>
		                    </form>	
						</td>
	
					 </tr>

				@empty
					<li>No hay información para mostrar en la Base de Datos</li>
				@endforelse

			</tbody>
		</table>

		{{ $EmpresasModel->links() }} 
	</div>	{{-- FIN DEL CONTAINER INICIAL --}}



@endsection
