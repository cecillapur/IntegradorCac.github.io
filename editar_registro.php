<?php
echo "<pre>";
var_dump($_POST);
echo "</pre>";

include("conexion.php");

$conexion = $conectar;


$id = $_POST["id"];
$nombre = $_POST["nombre"];
$apellido =$_POST["apellido"];
$dni = $_POST["dni"];
$email =$_POST["email"];
$texto = $_POST["texto"];


$sql = "UPDATE datos_form SET nombre = '$nombre' , apellido = '$apellido' , dni = '$dni', email = '$email', texto = '$texto' WHERE id = '$id'";

$query = mysqli_query($conexion, $sql);


if($query) {

    echo '<script type="text/javascript">';
    echo'window.location.href="registros.php";';
    echo '</script>';

    
    //Header("Location: registros.php");
}

?>



