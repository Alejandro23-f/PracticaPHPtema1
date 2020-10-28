<?php
$product_array = array(
    "Disco Duro HDD",
    "Disco Duro SSD",
    "Teclado Logitech",
    "Raton Logitech",
    "Alfombrilla SteelSeries",
    "Microfono HQ"
);



?>

<form method="POST" action="carrito.php">
<select name="seleccion">
	<?php
        if (! empty($product_array)) {
            for ($i = 0; $i < count($product_array); ++ $i) {
                ?>
        	<option value="<?php echo $product_array[$i] ?>"> <?php echo $product_array[$i] ?> </option>
    <?php
             }
        }
    ?>
    </select>
    <input type="text" name="cantidad" /> 
    <input type="submit" value="Ir al carrito" />
</form>

