<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pedidos</title>
	<link rel="stylesheet" href="css/estilosfacturaapedido.css">
</head>
<body>
<header>
<?php

include("header.php")

?>
</header>

<main>
	
 	<section class="pedidos">
 		<h2>Pedido</h2>
   <section class="numeromesa">
	<p><b>Mesa: 4</b></p>
   </section>
 	
	<section class="productos">
		<h5>Productos:</h5>
		<li><b>2 Mezclas de cafe: $13.000</b></li>
		<li><b>1 Pastel de frutas: $3.0000</b></li>
		<li><b>1 Expresso: $11.000</b></li>
		<li><b>3 Cappuccino: $25.500</b></li>
	</section>

    <section class="ultima">
		<p><p><b>Tiempo en estar listo: 10 minutos</b></p>
		<p><b> Nombre del cliente: Nelson gamboa fajardo</b></p>
		<p><b>Fecha del pedido: 11/04/2023</b></p>
    </section>
 		
 		<button>Añadir producto</button>
 	</section>
</main>
   <script src="js/bootstrap.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/bootstrap.bundle.js"></script>
</body>
</html>


