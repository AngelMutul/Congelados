<?php
	require 'app.php';
	use App\Productos;
	$propiedades = Productos::all();
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Menu</title>

	<!-- Normalize V8.0.1 -->
	<link rel="stylesheet" href="./css/normalize.css">

	<!-- MDBootstrap V5 -->
	<link rel="stylesheet" href="./css/mdb.min.css">

	<!-- Font Awesome V5.15.1 -->
	<link rel="stylesheet" href="./css/all.css">

	<!-- Sweet Alert V10.13.0 -->
	<script src="./js/sweetalert2.js"></script>

	<!-- General Styles -->
	<link rel="stylesheet" href="./css/style.css">

</head>

<body>

	<!-- Header -->
	<header class="header full-box">
		<div class="header-brand text-center full-box">
			<a href="index.html">
				<img src="./assets/img/frio.jpeg" alt="logo" class="img-fluid">
			</a>
		</div>

		<div class="header-options full-box">
			<nav class="header-navbar full-box poppins-regular font-weight-bold">
				<ul class="list-unstyled full-box">
					<li>
						<a href="index.html">Inicio<span class="full-box"></span></a>
					</li>
					<li>
						<a href="menu.html">Menú<span class="full-box"></span></a>
					</li>
				</ul>
			</nav>
			<div class="header-button full-box text-center btn-login-menu">
				<i class="fas fa-user-alt" onclick="show_popup_login()" data-mdb-toggle="tooltip" data-mdb-placement="bottom" title="Login"></i>
				<div class="div-bordered popup-login">

					<!-- Inicio de sesion -->
					<span class="text-center poppins-regular font-weight-bold">Inicio de sesión</span>
					<form class="full-box" action="">
						<div class="form-outline mb-4">
							<input type="email" class="form-control" name="login_email_cliente" id="login_email" maxlength="70" required="" placeholder="Email">
						</div>
						<div class="form-outline mb-4">
							<input type="password" class="form-control" name="login_clave_cliente" id="login_password" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required="" placeholder="Contraseña">
						</div>
						<p class="text-center">
							<button class="btn btn-info btn-sm w-100">Iniciar sesión</button>
						</p>
					</form>
					<hr>
					<p class="text-center full-box">¿No tienes cuenta? <a href="registration.html">Regístrate aquí</a></p>

					<!-- Cerrar sesion --
	                <div class="text-center full-box">
	                    <i class="fas fa-user-circle fa-4x"></i>
	                </div>
	                <span class="poppins-regular font-weight-bold">Nombre de usuario</span>
	                <div class="text-center full-box">
	                    <a href="#" class="btn btn-info btn-sm w-100"><i class="fas fa-user-cog fa-fw"></i> &nbsp; Mi cuenta</a>
	                </div>
	                <div class="text-center full-box">
	                    <a href="#" class="btn btn-info btn-sm w-100"><i class="fab fa-dashcube fa-fw"></i> &nbsp; Dashboard</a>
	                </div>
	                <form class="full-box" action="">
	                    <button class="btn btn-raised btn-primary btn-sm w-100" ><i class="fas fa-door-open fa-fw"></i> &nbsp; Cerrar sesión</button>
	                </form>-->

				</div>
			</div>
			<a href="bag.html" class="header-button full-box text-center" data-mdb-toggle="tooltip" data-mdb-placement="bottom" title="Carrito">
				<i class="fas fa-shopping-bag"></i>
				<span class="badge bg-warning rounded-pill bag-count">2</span>
			</a>
		</div>
	</header>


	<!-- Content -->
	<div class="container container-web-page">
		<h3 class="font-weight-bold poppins-regular text-uppercase">Productos</h3>
		<p class="text-justify">Bienvenido al menú de productos congelados, acá encontrara una gran variedad de productos congelados como carne, salchichas, jamon, helados, etc."<i class="fas fa-hamburger fa-fw"></i><i class="fas fa-sort-alpha-down fa-fw"></i>Además, puede buscar los productos por nombre haciendo clic en el botón "<i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR"</p>

		<div class="container-fluid" style="border-top: 1px solid #E1E1E1; padding: 20px;">
			<div class="row align-items-center">
				<div class="col-12 col-sm-4 text-center text-sm-start">
					<div class="dropdown">
						<button class="btn btn-link dropdown-toggle" type="button" id="categorySubMenu" data-mdb-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-hamburger fa-fw"></i> &nbsp; Menú
						</button>
						<div class="dropdown-menu" aria-labelledby="categorySubMenu">
							<a class="dropdown-item" href="#">Menú 1</a>
							<a class="dropdown-item" href="#">Menú 2</a>
							<a class="dropdown-item" href="#">Menú 3</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-4 text-center">
					<button type="button" class="btn btn-link" data-mdb-toggle="modal" data-mdb-target="#saucerModal">
						<i class="fas fa-search fa-fw"></i> &nbsp; Buscar
					</button>
				</div>
				<div class="col-12 col-sm-4 text-center text-sm-end">
					<div class="dropdown">
						<button class="btn btn-link dropdown-toggle" type="button" id="OrderSubMenu" data-mdb-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-sort-alpha-down fa-fw"></i> &nbsp; Ordenar por
						</button>
						<div class="dropdown-menu" aria-labelledby="OrderSubMenu">
							<a class="dropdown-item" href="#">Ascendente (A-Z)</a>
							<a class="dropdown-item" href="#">Descendente (Z-A)</a>
							<a class="dropdown-item" href="#">Precio (Menor a Mayor)</a>
							<a class="dropdown-item" href="#">Precio (Mayor a Menor)</a>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="container-fluid" style="padding: 20px 0;">
			<div class="row">
				<div class="col-12 col-md-8">
					<p class="text-left lead"><i class="fas fa-search fa-fw"></i> &nbsp; Resultados de la búsqueda: <span class="font-weight-bold poppins-regular text-uppercase"></span></p>
				</div>
				<div class="col-12 col-md-4">
					<button type="button" class="btn btn-danger">
						<i class="fas fa-times fa-fw"></i> &nbsp; Eliminar busqueda
					</button>
				</div>
			</div>
		</div>


		<div class="container-cards full-box" style="padding-bottom: 40px;">

			<div class="card shadow-1-strong">
				<img class="card-img-top" src="./assets/platillos/carnehamburguesa.jpg" alt="nombre_platillo">
				<div class="card-body text-center">
					<h5 class="card-title font-weight-bold">Carne para hamburguesa</h5>
					<p class="card-text lead"><span class="badge bg-secondary">$25.00 </span></p>
				</div>
				<div class="card-body text-center">
					<button type="button" class="btn btn-success btn-sm"><i class="fas fa-shopping-bag fa-fw"></i> &nbsp; Agregar</button>
					&nbsp; &nbsp;
					<a href="details.html" class="btn btn-info btn-sm"><i class="fas fa-utensils fa-fw"></i> &nbsp; Detalles</a>
				</div>
			</div>

			<div class="card shadow-1-strong">
				<img class="card-img-top" src="./assets/platillos/papasfritas.jpg" alt="nombre_platillo">
				<div class="card-body text-center">
					<h5 class="card-title font-weight-bold">Papas para freir</h5>
					<p class="card-text lead"><span class="badge bg-secondary">$25.00 </span></p>
				</div>
				<div class="card-body text-center">
					<button type="button" class="btn btn-success btn-sm"><i class="fas fa-shopping-bag fa-fw"></i> &nbsp; Agregar</button>
					&nbsp; &nbsp;
					<a href="details.html" class="btn btn-info btn-sm"><i class="fas fa-utensils fa-fw"></i> &nbsp; Detalles</a>
				</div>
			</div>

			<div class="card shadow-1-strong">
				<img class="card-img-top" src="./assets/platillos/chuleta.jpg" alt="nombre_platillo">
				<div class="card-body text-center">
					<h5 class="card-title font-weight-bold">Chuletas de cerdo</h5>
					<p class="card-text lead"><span class="badge bg-secondary">$25.00 </span></p>
				</div>
				<div class="card-body text-center">
					<button type="button" class="btn btn-success btn-sm"><i class="fas fa-shopping-bag fa-fw"></i> &nbsp; Agregar</button>
					&nbsp; &nbsp;
					<a href="details.html" class="btn btn-info btn-sm"><i class="fas fa-utensils fa-fw"></i> &nbsp; Detalles</a>
				</div>
			</div>

			<div class="card shadow-1-strong">
				<img class="card-img-top" src="./assets/platillos/costillas.jpg" alt="nombre_platillo">
				<div class="card-body text-center">
					<h5 class="card-title font-weight-bold">Costillas de cerdo</h5>
					<p class="card-text lead"><span class="badge bg-secondary">$25.00 </span></p>
				</div>
				<div class="card-body text-center">
					<button type="button" class="btn btn-success btn-sm"><i class="fas fa-shopping-bag fa-fw"></i> &nbsp; Agregar</button>
					&nbsp; &nbsp;
					<a href="details.html" class="btn btn-info btn-sm"><i class="fas fa-utensils fa-fw"></i> &nbsp; Detalles</a>
				</div>
			</div>

			<div class="card shadow-1-strong">
				<img class="card-img-top" src="./assets/platillos/helado.jpg" alt="nombre_platillo">
				<div class="card-body text-center">
					<h5 class="card-title font-weight-bold">Helado Nestle</h5>
					<p class="card-text lead"><span class="badge bg-secondary">$25.00 </span></p>
				</div>
				<div class="card-body text-center">
					<button type="button" class="btn btn-success btn-sm"><i class="fas fa-shopping-bag fa-fw"></i> &nbsp; Agregar</button>
					&nbsp; &nbsp;
					<a href="details.html" class="btn btn-info btn-sm"><i class="fas fa-utensils fa-fw"></i> &nbsp; Detalles</a>
				</div>
			</div>

			<div class="card shadow-1-strong">
				<img class="card-img-top" src="./assets/platillos/salchicha.jpg" alt="nombre_platillo">
				<div class="card-body text-center">
					<h5 class="card-title font-weight-bold">Salchicha Kir</h5>
					<p class="card-text lead"><span class="badge bg-secondary">$25.00 </span></p>
				</div>
				<div class="card-body text-center">
					<button type="button" class="btn btn-success btn-sm"><i class="fas fa-shopping-bag fa-fw"></i> &nbsp; Agregar</button>
					&nbsp; &nbsp;
					<a href="details.html" class="btn btn-info btn-sm"><i class="fas fa-utensils fa-fw"></i> &nbsp; Detalles</a>
				</div>
			</div>

		</div>


		<nav aria-label="Page navigation example">
			<ul class="pagination justify-content-center">
				<li class="page-item">
					<a class="page-link" href="#">Anterior</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">1</a>
				</li>
				<li class="page-item active">
					<a class="page-link" href="#">2</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">3</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">Siguiente</a>
				</li>
			</ul>
		</nav>

	</div>

	<div class="container-cards full-box" style="padding-bottom: 40px;">
		<h3>Productos desde la base de datos</h3>
	
		<?php foreach( $propiedades as $propiedad ): ?>
		<div class="card shadow-1-strong">
			<img class="card-img-top" src="./assets/platillos/papasfritas.jpg" alt="nombre_platillo">
			<div class="card-body text-center">
				<h5 class="card-title font-weight-bold"><?php echo $propiedad->descripcion; ?></h5>
				<p class="card-text lead"><span class="badge bg-secondary"><?php echo $propiedad->precio; ?></span></p>
			</div>
			<div class="card-body text-center">
				<button type="button" class="btn btn-success btn-sm"><i class="fas fa-shopping-bag fa-fw"></i> &nbsp; Agregar</button>
				&nbsp; &nbsp;
				<a href="details.html" class="btn btn-info btn-sm"><i class="fas fa-utensils fa-fw"></i> &nbsp; Detalles</a>
			</div>
		</div>
		<?php endforeach ?>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="saucerModal" tabindex="-1" aria-hidden="true" aria-labelledby="saucerModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="saucerModalLabel">Buscar platillo</h5>
					<button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="form-outline mb-4">
						<input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,25}" class="form-control" name="buscar_platillo" id="buscar_platillo" maxlength="25">
						<label for="buscar_platillo" class="form-label">¿Qué estás buscando?</label>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-mdb-dismiss="modal"><i class="fas fa-times fa-fw"></i> &nbsp; Cerrar</button>
					<button type="button" class="btn btn-info"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar</button>
				</div>
			</div>
		</div>
	</div>


	<!-- Footer -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-4">
					<ul class="list-unstyled">
						<li>
							<h5 class="font-weight-bold"><i class="far fa-copyright"></i> Despensa Digital</h5>
						</li>
						<li> Todos los derechos reservados </li>
					</ul>
				</div>
				<div class="col-12 col-md-4">
					<ul class="list-unstyled">
						<li>
							<h5 class="font-weight-bold">Despensa Digital</h5>
						</li>
						<li><i class="fas fa-map-marker-alt fa-fw"></i> Maxcanú, Yúcatan</li>
					</ul>
				</div>
				<div class="col-12 col-md-4">
					<ul class="list-unstyled">
						<li>
							<h5 class="font-weight-bold">Siguenos en:</h5>
						</li>
						<li>
							<a href="https://es-la.facebook.com/CarlosAlfaroES/" class="footer-link" target="_blank">
								<i class="fab fa-facebook fa-fw"></i> Facebook
							</a>
						</li>

						<li>
							<a href="https://www.youtube.com/c/CarlosAlfaro007" class="footer-link" target="_blank">
								<i class="fab fa-youtube fa-fw"></i>
								Youtube
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>


	<!-- MDBootstrap V5 -->
	<script src="js/mdb.min.js"></script>

	<!-- General scripts -->
	<script src="./js/main.js"></script>
</body>

</html>