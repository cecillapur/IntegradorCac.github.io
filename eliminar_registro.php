<?php
/*echo "<pre>";
var_dump($_GET);
echo "</pre>";*/

include("conexion.php");

$conexion = $conectar;

$id = $_GET["id"];

$sql = "DELETE FROM datos_form WHERE id=$id";

$query = mysqli_query($conexion, $sql);


if($query) {

    echo '<script type="text/javascript">';
    echo'window.location.href="registros.php";';
    echo '</script>';



    //Header("Location: registros.php");
}

?>