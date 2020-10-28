<?php



if(isset($_POST["productos"])){
$decode = json_decode($_POST["productos"], true);
$id = date("Y-m-d|h:m:s");
setcookie("Pedido" . $id, serialize($decode), time() + 3600, '/');
unset($_SESSION['insert']);
header("Refresh:0");
}


foreach ($_COOKIE as $name => $value) {

    
    $name = htmlspecialchars($name);
    $name = str_replace('PHPSESSID', '', $name);
    
    if(isset($_POST["borrar".$name])){
        setcookie($name, "", time() - 3600, '/');
    }
    
    echo $name . "<br />";
    
    if(!empty($name)){
    echo "<form method='POST' action='pedidos.php'>";
    echo "<input type='hidden' name='borrar" . $name . "' />";
    echo "<input type='submit' value='Borrar'/> </form>";
    }
}


?>