

@if(session('SuccessMessage'))

	<script type="application/javascript">
		
		Swal.fire(
					  'Excelente!',
					  'Su información ha sido guardada correctamente',
					  'success'
					);

	</script>


@endif