<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tu carrito</title>
  </head>
  <body>
  <?php
    include_once "./conexion.php";
  ?>
    <h1>Tu carrito</h1>
    <form action="">
        <table>
       
        <?php $queryproductos= mysqli_query($conn,"SELECT id,nombre,precio FROM products"); ?>
        <?php 
        while ($mostrar = mysqli_fetch_array($queryproductos)) {
            echo '<tr>';
                echo '<td>'.$mostrar['nombre'].'</td>';
                echo '<td><input id="precioVariable" type="number" onclick="suma"></td>';
                echo '<td id="precio">'.$mostrar['precio'].'</td>';
                echo '<td id="precioTotal"></td>';
                echo '<td><button type=reset>Resetear</button></td>';
                echo "<td><a href=\"./quitar.php?id=$mostrar[id]\">Eliiminar</a></td>";
            echo '</tr>';
        }
        ?>
        
        </table>
    </form>
    <script>
        const suma = ()=>{
            const variablePrice = document.getElementById("precioVariable");
                console.log(variablePrice);
                const price = document.getElementById("precio").innerHTML
                console.log(price);
                const totalPrice = price * variablePrice
                console.log(totalPrice);
              return  document.getElementById("precioTotal").innerHTML = totalPrice;

        }
                
    </script>
  </body>
</html>


