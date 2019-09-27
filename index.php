<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>My Gym 2019</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
	rel="stylesheet">
</head>
<body>
	<div id="app">
		<div class="container">
			<div class="col-sm-4">
			</div>
			<div class="col-sm-8">
				<h1>
					{{ message }}<i class="material-icons">accessibility_new</i>
				</h1>
				<h4>Mi rutina</h4><input type="text" class="form-control my-3" v-model="rutina" @keyup.enter="agregarRutina">
				<button class="btn btn-primary" @click="agregarRutina">Guardar</button>
				<hr>
				<div class="d-flex justify-content-between" role="alert" v-for="(rutina,index) of rutinas" :class="['alert',rutina.estado ? 'alert-success' : 'alert-danger']">
					{{rutina.rutina}}
					<div>	
						<button class="btn btn-link" @click="ModificarStatus(index)"><i class="material-icons">done</i></button>
						<button class="btn btn-link" @click="eliminar(index)"><i class="material-icons">delete</i></button>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
			</div>
		</div>	
		
	</div>
	<footer>
		<p style="text-align: center">Pagina desarrollada por Víctor Hugo Núñez Martínez</p>
		<p style="text-align: center">Hecho con Amor 2019 <i class="material-icons">favorite</i></p>
	</footer>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<script src="js/index.js"></script>
</body>
</html>