<!DOCTYPE html>
<html>
	<head>

		<title>DEVSOFTY-EEFT</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">

	</head>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<script src="{{ asset('js/app.js') }}" defer></script> 
	<script src="{{ asset('js/Formulario.js') }}" defer></script> 
	<script src="{{ asset('js/ControlEliminar.js') }}" defer></script> 
	<link rel="stylesheet" href="{{ asset('/font-awesome/css/font-awesome.min.css') }}">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<body>

		<div id="app" class="d-flex flex-column h-screen justify-content-between">

			<header> {{-- CABECERA --}}

				@include('partials.nav')
				@include('partials.messages')
			
			</header>
				
			<main> {{-- CONTENIDO PRINCIPAL DEL SITIO --}}

				@yield('content')

			</main>

{{-- 			<footer class="bg-white text-center text-black-70 py-3 shadow-lg">
				Sitio Desarrollado por Edgar Eduardo Flores Torres ©{{date('Y')}}
			</footer> --}}

		</div>


	</body>

</html>