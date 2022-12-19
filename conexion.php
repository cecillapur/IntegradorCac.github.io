
<?php 

include("con_db.php");

if($conectar){
    //echo "Conexion establecida";

}


if (isset ($_POST ["enviar"])){
    if(strlen ($_POST ["nombre"]) >= 1 &&
    strlen ($_POST ["apellido"]) >= 1 &&
    strlen ($_POST ["dni"]) >= 1 &&
    strlen ($_POST ["email"]) > 1 && 
    strlen ($_POST ["texto"]) > 2 ){


        $nombre = trim ($_POST ["nombre"]);
        $apellido = trim ($_POST ["apellido"]);
        $dni = trim($_POST ["dni"]);
        $email = trim($_POST ["email"]);
        $texto = trim($_POST ["texto"]);

        $insertar = "INSERT INTO datos_form (nombre, apellido, dni, email,texto) VALUES ('$nombre' , '$apellido', '$dni', '$email', '$texto')";

        $resultado = mysqli_query($conectar, $insertar);

        if($resultado){
            ?>
             
            <?php
            echo '<script type="text/javascript">';
            echo'window.location.href="registros.php";';
            echo '</script>';

                //header("Location: registros.php");
             

        }else {
            ?>
            <?php
            echo '<script type="text/javascript">';
            echo'window.location.href="index.html#form-orador";';
            echo '</script>';
                    //header("Location: index.php");

        } 

    }
 
}
     

      
       







    
?>


