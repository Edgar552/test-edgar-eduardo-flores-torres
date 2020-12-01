@extends('partials.layout')

@section('content')

<div class="container py-3">
	
	<div class="row">
		
		<div class="col-12 col-sm-10 col-lg-12 mx-auto">
			
			<form class="bg-white shadow rounded-lg py-3 px-5"
				method="POST"
				action="{{route('contactos.store')}}"
				enctype="multipart/form-data"
				onsubmit="return checkSubmit();">
			
				
				<div class="text-center">
					<h2>
						Registro de Nuevo Contacto de la Empresa <br> {{$EmpresasModel->nombre_comercial}}
					</h2>					
				</div>
		
				<hr>
			
				@include('Contactos._form')
				
				<div class="d-flex justify-content-between align-items-center">
					<a href="{{route('index')}}"><i class="fa fa-arrow-left"></i> Regresar</a>
					<div class="btn-group">
						<button class="btn btn-primary btn-md btn-block"  id="btsubmit" type="submit">Guardar Contacto</button>
					</div>
				</div>	
			
			</form>

		</div>

	</div>
</div>

	<div class="container py-3">
		<h3>Lista de Contactos de la Empresa</h3>
		<table class="table table-hover shadow">
			<thead class="text-center" style="background-color: #0E0837; color: white; font-size: 14px;">
				<tr>
					<th>Nombre Completo del Contacto</th>
				    <th colspan="2">Acciones</th>
				</tr>
			</thead>

			<tbody style="font-size: 14px">
				@forelse($DatosContactosTabla as $DatosContactos)
					<tr>
						<td class="text-center">{{ $DatosContactos->nombre_completo }} </td>

						<td class="text-center">
							<a class="btn btn-secondary btn-sm" href="{{route('contactos.edit', $DatosContactos->id_contacto)}}">Editar Contacto</a>
						


						</td>

		 				<td class="text-center">
							<form action="{{ route('contactos.destroy', $DatosContactos->id_contacto) }}" method="POST">
		                        @csrf
		                        <input type="hidden" name="_method" value="DELETE">
		                        <button class="btn btn-danger btn-sm" onclick="return OpcionEliminar()"> Eliminar</button>
		                    </form>
						</td>
	
					 </tr>

				@empty
					<li>No hay contactos relacionados a esta empresa</li>
				@endforelse

			</tbody>
		</table>

		{{ $DatosContactosTabla->links() }} 
	</div>

@endsection

<script type="application/javascript">
	
	function OpcionEliminar()
	{

		var Seguridad=confirm("¿Desea eliminar permanentemente los datos del elemento?")

			if (Seguridad===true)

					 {

					 	return true;

					 }

					 else
					 {
					 	return false;
					 }
		
	}

</script>