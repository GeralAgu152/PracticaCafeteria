<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="css/estiloprueba.css">
	<title></title>
</head>
<body>
<header>
	<?php
	include("header.php")
	?>
</header>
<main>
 <section class="contenedor">
  <div class="contenedor-items">
	<div class="item">
	 <span class="titulo-item">Cappuccino</span>
	 <img src="baso.jpg" alt="" class="img-item">
	 <span class="precio-item">$1.000</span>
	 <button class="boton-item">Agregar al carrito</button>
	</div>

	<div class="item">
	 <span class="titulo-item">Rollo de canela</span>
	 <img src="rollitos-canela.jpg" alt="" class="img-item">
	 <span class="precio-item">$1.500</span>
	 <button class="boton-item">Agregar al carrito</button>
	</div>

	<div class="item">
	 <span class="titulo-item">Te helado</span>
	 <img src="te.jpg" alt="" class="img-item">
	 <span class="precio-item">$1.800</span>
	 <button class="boton-item">Agregar al carrito</button>
	</div>

	<div class="item">
	 <span class="titulo-item">Te helado</span>
	 <img src="te.jpg" alt="" class="img-item">
	 <span class="precio-item">$1.800</span>
	 <button class="boton-item">Agregar al carrito</button>
	</div>

	<div class="item">
	 <span class="titulo-item">Rollo de canela</span>
	 <img src="rollitos-canela.jpg" alt="" class="img-item">
	 <span class="precio-item">$1.500</span>
	 <button class="boton-item">Agregar al carrito</button>
	</div>

    
	<div class="item">
	 <span class="titulo-item">Cappuccino</span>
	 <img src="baso.jpg" alt="" class="img-item">
	 <span class="precio-item">$1.000</span>
	 <button class="boton-item">Agregar al carrito</button>
	</div>

	<div class="item">
	 <span class="titulo-item">Cappuccino</span>
	 <img src="baso.jpg" alt="" class="img-item">
	 <span class="precio-item">$1.000</span>
	 <button class="boton-item">Agregar al carrito</button>
	</div>

	<div class="item">
	 <span class="titulo-item">Rollo de canela</span>
	 <img src="rollitos-canela.jpg" alt="" class="img-item">
	 <span class="precio-item">$1.500</span>
	 <button class="boton-item">Agregar al carrito</button>
	</div>

	<div class="item">
	 <span class="titulo-item">Te helado</span>
	 <img src="te.jpg" alt="" class="img-item">
	 <span class="precio-item">$1.800</span>
	 <button class="boton-item">Agregar al carrito</button>
	</div>
  </div>


  <!-- carrito de compras-->
  <div class="carrito">
  	<div class="header-carrito">
  		<h2>Tu carrito</h2>
  	</div>

  	<div class="carrito-items">
  		<div class="carrito-item">
  			<img src="baso.jpg" alt="" width="88px">
  			<div class="carrito-item-detalles">
  			<span class="carrito-item-titulo">Productos</span>
  				<div class="selector-cantidad">
  					<i class="fa-solid fa-minus restar-cantidad"></i>
  					<input type="text" value="1" class="carrito-item-cantidad" disabled>
  					<i class="fa-solid fa-plus sumar-cantidad"></i>
  				</div>
  				<span class="carrito-item-precio">$15.000</span>
  			</div>
  			<span class="btn-eliminar">
  				<i class="fa-solid fa-trash"></i>
  			</span>
  		</div>

  		<div class="carrito-item">
  			<img src="rollitos-canela.jpg" alt="" width="88px">
  			<div class="carrito-item-detalles">
  			<span class="carrito-item-titulo">Productos</span>
  				<div class="selector-cantidad">
  					<i class="fa-solid fa-minus restar-cantidad"></i>
  					<input type="text" value="1" class="carrito-item-cantidad" disabled>
  					<i class="fa-solid fa-plus sumar-cantidad"></i>
  				</div>
  				<span class="carrito-item-precio">$15.000</span>
  			</div>
  			<span class="btn-eliminar">
  				<i class="fa-solid fa-trash"></i>
  			</span>
  		</div>
  	</div>

  	<div class="carrito-total">
  		<div class="fila">
  			<strong>Tu total</strong>
  			<span class="carrito-precio-total">
  				$30.000
  			</span>
  		</div>
  		<button  class="btn-pagar">Pagar <i class="fa-solid fa-bag-shopping"></i></button>
  	</div>
  </div>
 </section>
</main>

</body>
</html>