<?php
session_start();

?>

<html>
<head>
</head>
<body>
	Lista:
	<?php

if (! isset($_SESSION['insert'])) {
    $_SESSION['insert'] = array();
}
$insert = $_POST;
array_push($_SESSION['insert'], $insert);

if (! isset($_SESSION) || empty($_SESSION)) {
    echo "No existe ningun articulo";
}

    ?>
	<table>
		<tr>
			<th>Producto</th>
			<th>Cantidad</th>
			<th>Precio</th>
		</tr>
		
		<?php
    $arr = $_SESSION['insert'];
    
    
    for ($i = 0; $i < count($arr); ++ $i) {

        echo "<tr><td>";

        echo $_SESSION['insert'][$i]['seleccion'];
      
        echo "</td>";

        echo "<td>";

        echo $_SESSION['insert'][$i]['cantidad'];
        
        echo "</td></tr>";
    }

    ?>

	
	</table>
	<form action="pedidos.php" method="POST">
	
	    <input type='hidden' name='productos' value='<?php echo json_encode($arr); ?>' />
		
			<input type="submit" value="Confirmar" />
	</form>
	
	
</body>
</html>

