<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inicio</title>
	 <link rel="stylesheet" href="css/bootstrap.css">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/estiloparainicio.css">
</head>
<body>
 <header> 
    
         <!--Menu de ingresar-->
  <div class="dropdown">
    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
     Iniciar seccion
    </button>
    <form class="dropdown-menu">
   <h4>Iniciar seccion</h4>
      <div class="mb">
        <label for="DropdownFormEmail2"class="form-label" >Correo electronico</label>
        <input type="email" class="form-control" id="DropdownFormEmail2" style="border:1px solid black;">
      </div>
      <div class="mb">
        <label for="DropdownFormPassword2" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="DropdownFormPassword2" style="border:1px solid black;">
      </div>
      <div class="mb">
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="dropdownCheck2">
          <label class="form-check-label" for="dropdownCheck2">
            Olvidar Contraseña
          </label>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>
  </div>

  <!--Menu de registrarse-->
  <div class="dropdown2">
    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
      registrarse
    </button>
    <form class="dropdown-menu">
      <h4>Registrarse</h4>
      <div class="mb">
        <label for="DropdownFormNombre">Nombre</label>
        <input type="text" class="form-control" id="DropdownFormNombre" style="border:1px solid black;">
      </div>
      <div class="mb">
        <label for="DropdownFormTipo-document">Tipo de documento</label>
         <select class="rolesdecafeteria" style="width: 100%; padding: 3px; border: 1px solid black;">
        <option value="cedula-cuidadana">Cedula cuidadana</option>
        <option value="cedula-extranjera">Cedula extranjera</option>
        <option value="tarjer de identidad">Tarjeta de indetida</option>
        </select>
      </div>
      <div class="mb">
        <label for="DropdownFormNumero-document">Numero de documento</label>
        <input type="text" class="form-control" id="DropdownFormNombre" style="border:1px solid black;">
      </div>
      <div class="mb">
        <label for="DropdownFormEmail2"class="form-label">Correo electronico</label>
        <input type="email" class="form-control" id="DropdownFormEmail2" style="border:1px solid black;">
      </div>
      <div class="mb">
        <label for="DropdownFormPassword2" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="DropdownFormPassword2" style="border:1px solid black;">
      </div>
      <button type="submit" class="btn btn-primary">registrarse</button>
    </form>
  </div>
  </header>
  <main>
  	<div class="nombreCafeteria">
  <h1>Cafeteria digital</h1> <img src="http://4everstatic.com/imagenes/850xX/comida-y-bebida/taza-de-cafe,-granos-de-cafe-219182.jpg">
  </div>
  <!--Menu de la cafeteria-->

  <section class="cuadromenu">
  
    <h4>Menu diario</h4>

   <section class="producto1">
    <img src= "imagenes/OIP (1).jpeg" alt="aqui va la foto del producto">
    <section class="des1">
      <H5>Cappuccino</H5>
      <p> El capuchino es una bebida nacida en Austria, preparada con café expresso y leche montada con vapor para darle cremosidad. 
          Un capuchino se compone de 125 ml de leche y 25 ml de café expresso, en ocasiones se agrega cacao en polvo o canela según
          el gusto del consumidor.<br> <br>
      <b>Precion del producto: $13.000</b>
      </p>
    </section>
    </section>

   <section class="producto2"> 
      <img src="imagenes/Rollo de canela.jpeg" alt="aqui va la foto del producto">
      <section class="des2">
        <h5>Rollo de canela</h5>
        <p>Los rollos de canela, o bollos de canela, son bollos dulces hechos de masa de levadura.
          Una vez que la masa ha subido, se llena con una mezcla de canela y azúcar y luego se enrolla, 
          se corta y se hornea. El resultado son rollos de canela en forma de espiral que huelen absolutamente deliciosos mientras se hornean. <br> <br>
       <b>Precion del producto: $3.500</b> 
       </p>
      </section>
   </section>

   <section class="producto3"> 
    <img src="imagenes/Te-helado.jpeg" alt="aqui va la foto del producto">
    <section class="des3">
      <h5>Te helado</h5>
      <p>El té helado consiste en una forma helada de té, servida a menudo en un vaso con hielo.
         Cualquier variedad de té puede ser susceptible de ser empleada como té helado, depende de los gustos particulares.<br> <br>
      <b>Precion del producto: 1.000</b>
     </p>
     
    </section>
 </section>
 </section>

  
  <section class="descripcion">
    <H3>Bienvenidos a la cafeteria</H3>
    <p>Descipcion de la cafeteria  <br>  </p>
  </section>

 </main>

<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.js"></script>
</body>
</html>