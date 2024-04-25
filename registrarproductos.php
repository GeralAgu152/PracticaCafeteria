

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registrar productos</title>
  <link rel="stylesheet" href="css/estilosmesasyrervacionees.css">
</head>
<body>
<header>
<?php
include("header.php")

?>
</header>

<main>
		<section class="agregarproducto">
			<h2>Registrar producto</h2>
			<form action="">
      <label>Nombre del producto</label>
			 <input type="text" >
      <label>Categorias del producto</label>
       <select class="categoriasproducto">
         <option value="cafe">Cafe</option>
         <option value="bebidas">Bebidas</option>
         <option value="pastelillos">Pastelillos</option>
         <option value="expresos">Expressos</option>
         <option value="extras">Extras</option>
       </select>

      <label>Precio del producto</label>
       <input type="numbre" >
      <label>Total de unicades</label>
       <input type="numbre">
       <label>Descripcion del producto</label>
      <textarea>
      </textarea>
      <label>Imagen del producto </label>
       <input type="file">
      
            <button>Registrar</button>
			</form>

		</section>


    <section class="Menu-diario">
      <h4>Productos registrados</h4>
      <table>
        <thead>
          </tr>
          <tr>
           <th>Nombre del producto</th>
            <th>Categoria del prodcuto</th>
           <th>Precio del producto</th>
           <th>Total de unidades</th>
            <th>Agregar producto</th>
            <th>Imagen del prodcuto</th>
            <th>Descripcion del producto</th>
             <th>Eliminar producto</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Cappuccion</td>
            <td>Expresso</td>
            <td>$13.000</td> 
            <td>30 unidades</td>
            <td> <img src="" alt="aqui va una iamgen"> </td>
            <td>El capuchino es una bebida nacida en Austria, preparada con café expresso y leche montada con vapor para darle cremosidad.
            </td>
            <td > <input type="checkbox" name=""> </td>
            <td> <button type="submit">Eliminar</button>
            </td>
             </tr>

             <tr>
            <td>Cappuccion</td>
            <td>Expresso</td>
            <td>$13.000</td> 
            <td>30 unidades</td>
            <td> <img src="" alt="aqui va una iamgen"> </td>
            <td>El capuchino es una bebida nacida en Austria, preparada con café expresso y leche montada con vapor para darle cremosidad.
            </td>
            <td > <input type="checkbox" name=""> </td>
            <td> <button type="submit">Eliminar</button>
            </td>
             </tr>
             <tr>
            <td>Cappuccion</td>
            <td>Expresso</td>
            <td>$13.000</td> 
            <td>30 unidades</td>
           <td> <img src="" alt="aqui va una iamgen"> </td>
            <td>El capuchino es una bebida nacida en Austria, preparada con café expresso y leche montada con vapor para darle cremosidad.
            </td>
            <td > <input type="checkbox" name=""> </td>
            <td> <button type="submit">Eliminar</button>
            </td>
             </tr>
        </tbody>
      </table>  
    </section>

     <!--Tablas por categorias-->
       <section class="categorias-cafeteria">
        <h4>Productos de la categoria bebidas</h4>
        <table class="categoriacafe">
          <thead>
          </tr>
          <tr>
           <th>Nombre del producto</th>
            <th>Categoria del prodcuto</th>
           <th>Precio del producto</th>
           <th>Total de unidades</th>
            <th>Agregar producto</th>
             <th>Eliminar producto</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Cappuccion</td>
            <td>Expresso</td>
            <td>$13.000</td> 
            <td>30 unidades</td>
           
            <td > <input type="checkbox" name=""> </td>
            <td> <button type="submit">Eliminar</button>
            </td>
             </tr>
             <tr>
            <td>Cappuccion</td>
            <td>Expresso</td>
            <td>$13.000</td> 
            <td>30 unidades</td>
           
            <td > <input type="checkbox" name=""> </td>
            <td> <button type="submit">Eliminar</button>
            </td>
             </tr>
         </tbody>
        </table>
      </section>
          
        
        <section class="categorias-cafeteria1">
          <h4>Productos de la categoria cafe</h4>
         <table class="categoriabebidas">
          <thead>
          </tr>
          <tr>
           <th>Nombre del producto</th>
            <th>Categoria del prodcuto</th>
           <th>Precio del producto</th>
           <th>Total de unidades</th>
            <th>Agregar producto</th>
             <th>Eliminar producto</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Cappuccion</td>
            <td>Expresso</td>
            <td>$13.000</td> 
            <td>30 unidades</td>
            
            <td > <input type="checkbox" name=""> </td>
            <td> <button type="submit">Eliminar</button>
            </td>
             </tr>
             <tr>
            <td>Cappuccion</td>
            <td>Expresso</td>
            <td>$13.000</td> 
            <td>30 unidades</td>
           
            <td > <input type="checkbox" name=""> </td>
            <td> <button type="submit">Eliminar</button>
            </td>
             </tr>
         </tbody>
        </table>
        </section>
          

        <section class="categorias-cafeteria2">
          <table class="categoriapastelillos">
          <thead>
          </tr>
          <tr>
           <th>Nombre del producto</th>
            <th>Categoria del prodcuto</th>
           <th>Precio del producto</th>
           <th>Total de unidades</th>
           
            <th>Agregar producto</th>
             <th>Eliminar producto</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Cappuccion</td>
            <td>Expresso</td>
            <td>$13.000</td> 
            <td>30 unidades</td>
            
            <td > <input type="checkbox" name=""> </td>
            <td> <button type="submit">Eliminar</button>
            </td>
             </tr>
             <tr>
            <td>Cappuccion</td>
            <td>Expresso</td>
            <td>$13.000</td> 
            <td>30 unidades</td>
           
            <td > <input type="checkbox" name=""> </td>
            <td> <button type="submit">Eliminar</button>
            </td>
             </tr>
         </tbody>
        </table>
        </section>
</main>

<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.js"></script>
</body>
</html>

