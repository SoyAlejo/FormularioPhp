<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="keywords" content="form" />
		<title>Form</title>
		<link rel="shortcut icon" type="image/x-icon" href="#" />
		<meta
			name="description"
			content="Form"
		/>

		<link rel="stylesheet" href="css/estilos.css" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<script src="js/jquery.min.js" defer></script>
		<script src="js/bootstrap.min.js" defer></script>
		<script src="js/contador.js" defer></script>
	</head>
	<body>
		<!-- <!-- <section class="container container-white section-form"> -->
        <h1>Formulario datos de usuario</h1>
              
		<form
			class="container"
			action="../controlador/coUsuario.php"
			method="POST"
			id="tb_usuario"
		>
			<div class="form-group">
				<label for="Nombre">Nombres:</label>
				<input
					class="form-control"
					type="text"
					placeholder="Nombre"
					id="Nombre_Usuario"
					name="Nombre_Usuario"
					required
				/>
			</div>
			<div class="form-group">
				<label for="email">Correo:</label>
				<input
					type="email"
					class="form-control"
					placeholder="Correo"
					id="Correo_Usuario"
					name="Correo_Usuario"
					required
				/>
			</div>

			<div class="form-group">
				<label for="Telefono">Telefono:</label>
				<input
					class="form-control"
					type="tel"
					name="Tel_Usuario"
					id="Tel_Usuario"
					placeholder="Telefono"
					required
				/>
			</div>

			<button
				type="submit"
				id="btn"
				name="btn"
				class="btn btn-primary btn-block"
				value="enviar"
			>
				Enviar
            </button>

             <p>mensaje</p>
            <?php

            echo $msg =$_POST('$msg')
            ?>
            
        </form>
        
	</body>
</html>
