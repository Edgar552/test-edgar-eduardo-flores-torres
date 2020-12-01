
	
	function OpcionEliminar()
	{

		var Seguridad=confirm("¿Desea eliminar la información?");



			if (Seguridad===true)

					 {

				 	    Swal.fire(
							      'Eliminado!',
							      'Los datos se eliminaron correctamente.',
							      'success');
				 	    return true;

					 }

					 else
					 {

					 	return false;
					 }
		
	}
