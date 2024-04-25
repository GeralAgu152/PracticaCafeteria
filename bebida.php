<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bebidas</title>
</head>
<body>
<header>
<?php
include("header.php")
	?>

</header>
<main>
	  <!--Menu de la cafeteria-->
     
      <section class="menucafe">
       
         <h4>Bebidas</h4>
     
        <section class="producto1menu">
         <img src= "imagenes/OIP (1).jpeg" alt="aqui va la foto del producto">
         <section class="des1menu">
           <H5>Cappuccino</H5>
           <p> El capuchino es una bebida nacida en Austria, preparada con café expresso y leche montada con vapor para darle cremosidad. 
               Un capuchino se compone de 125 ml de leche y 25 ml de café expresso, en ocasiones se agrega cacao en polvo o canela según
               el gusto del consumidor.<br> <br>
             Precion del producto: $13.000
           </p>
           <button type="submit">seleccionar</button>
         </section>
         </section>
     
        <section class="producto2menu"> 
           <img src="imagenes/Rollo de canela.jpeg" alt="aqui va la foto del producto">
           <section class="des2menu">
             <h5>Rollo de canela</h5>
             <p>Los rollos de canela, o bollos de canela, son bollos dulces hechos de masa de levadura.
               Una vez que la masa ha subido, se llena con una mezcla de canela y azúcar y luego se enrolla, 
               se corta y se hornea. El resultado son rollos de canela en forma de espiral que huelen absolutamente deliciosos mientras se hornean. <br> <br>
              Precion del producto:
            </p>
            <button type="submit">seleccionar</button>
           </section>
        </section>
     
        <section class="producto3menu"> 
         <img src="imagenes/Te-helado.jpeg" alt="aqui va la foto del producto">
         <section class="des3menu">
           <h5>Te helado</h5>
           <p>El té helado consiste en una forma helada de té, servida a menudo en un vaso con hielo.
              Cualquier variedad de té puede ser susceptible de ser empleada como té helado, depende de los gustos particulares.<br> <br>
            Precion del producto:
          </p>
          <button type="submit">seleccionar</button>
         </section>
      </section>
       </section>
     
     
     <!--Opciones laterales del menu de la cafeteria-->
          
          <section class="opcioneslaterales">
          <h4>Categorias</h4>
          <nav>
         <ul>
          <li><a href="cafe.php">Cafe</a></li>
          <li><a href="bebida.php">Bebidas</a></li>
          <li><a href="pastelillos.php">Pastelillos</a></li>
          <li><a href="expresos.php">Expresos</a></li>
          <li><a href="extras.php">Extras</a></li>     
        </ul>
    </nav>
    </section>
     
</main>

     <script src="js/bootstrap.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/bootstrap.bundle.js"></script>
</body>
</html>