<?php 
  include_once "./conexion.php";
  $cod=$_GET['id'];
  mysqli_query($conn, "DELETE FROM products WHERE id=$cod");
  header("Location: ./carrito.php");
?>