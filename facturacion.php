<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/estilosfacturaapedido.css">
  <title>Factura</title>

</head>
<body>

  <header>
    <?php
     include("header.php")
    ?>
  </header>

<main>
    <section class="factu">
        <h2>Facturas</h2>

   <section class="arriba">
    <p><b>Direccion de la cafeteria:</b></p>
    <p><b>Contacto de la cafeteria:</b></p>
   </section>
  
    <!--tabla de facturas-->
   <section class="tabla">
    <table>
      <thead>
        <tr>
          <th><b>No.</b></th>
          <th><b>Nombre del producto</b></th>
          <th><b>Precio</b></th>
          <th><b>Cantidad</b></th>
          <th><b>Total</b></th>
        </tr>
    </thead>
    <tbody>
            <tr>
             <td><b>1</b></td>
             <td><b>Mezcla de cafe</b> </td>
             <td><b>$6.500</b></td>
             <td><b>2</b></td>
             <td><b>$13.000</b></td>
            </tr>
            
            <tr>
             <td><b>2</b></td>
             <td><b>Pastel de frutas</b></td>
             <td><b>$3.000</b></td>
             <td><b>1</b></td>
             <td><b>3.000</b></td>
            </tr>
            
            <tr>
             <td><b>3</b></td>
             <td><b>Expresso</b></td>
             <td><b>$11.000</b></td>
             <td><b>1</b></td>
             <td><b>$11.000</b></td>
            </tr>

            <tr>
             <td><b>4</b></td>
             <td><b>Cappuccino</b></td>
             <td><b>$8.500</b></td>
             <td><b>3</b></td>
             <td><b>$25.500</b></td>
            </tr>
      </tbody>
    </table>
        <h4>Total: $52.500</h4>
       <button>Realizar pago</button>

      
   </section>
   <section class="abajo">
    <p> <b>Nombre: Nelson gamboa fajardo</b></p>
    <p> <b>Numero de mesa: 4</b></p>
    <p> <b>Fecha del pedido: 14/11/2023</b></p>
      
</section>

</section>
    
</main>
<script src="js/bootstrap.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/bootstrap.bundle.js"></script>

</body>
</html>