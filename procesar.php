<?php
$producto1 = $_POST['producto1'];
$precio1 = $_POST['precio1'];
$producto2 = $_POST['producto2'];
$precio2 = $_POST['precio2'];
$producto3 = $_POST['producto3'];
$precio3 = $_POST['precio3'];

$suma = $precio1 + $precio2 + $precio3;
$descuento = $suma * 0.16;
$total = $suma - $descuento;

echo "Productos:<br>";
echo "- $producto1: $precio1<br>";
echo "- $producto2: $precio2<br>";
echo "- $producto3: $precio3<br>";
echo "Suma: $suma<br>";
echo "Descuento: $descuento<br>";
echo "Total a pagar: $total<br>";
?>
