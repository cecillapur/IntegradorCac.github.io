<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!--LINK BOOTSTRAP-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Registro de Inscriptos</title>
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar-example">

    <!--MENU-->
    <header class="container-padre color-barra " > 
            <nav class="color-barra navbar navbar-expand-lg navbar navbar-dark bg-dark fixed-top" >
                <div class="container-fluid color-barra" >
                    <a class=" navbar-brand text-bs-gray-dark p-2" href="index.html"><img src="img/codoacodo.png" alt="logo" width="100px"> Conf Bs As</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarNav">
                        <ul class="navbar-nav  ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active text-bs-gray-dark p-3 dropdown-item" href="./index.html" target="_blank" aria-current="page">La Conferencia</a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link text-bs-gray-dark p-3" href="#oradores">Los Oradores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-bs-gray-dark p-3" href="#lugar">El Lugar y la Fecha</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-bs-gray-dark p-3" href="#form-orador">Conviertete en Orador</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-bs-gray-dark p-3 link-success " href="./comprar.html" target="_blank" >Comprar Tickets</a>
                        </li>
                    
                        </ul>
                    </div>
                </div>
            </nav>
          </header>

        <?php
                /*echo "<pre>";
                var_dump($_GET);
                echo "</pre>";*/

                include("conexion.php");

                $conexion = $conectar;

                $id = $_GET["id"];


                $sql = "SELECT * FROM datos_form WHERE id=$id";

                $query = mysqli_query($conexion, $sql);

                $guardar = mysqli_fetch_assoc($query );


        ?>


<form action="editar_registro.php" method="post">
<section class="content">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card bg-warning card-outlibe text-center">
                            <h5>Registro de Inscriptos</h5>
                        </div>

                    </div>
                </div>
            <div class="row p-3 ">
                <div class="col-md-12">
                    <div class="tabla-responsive ">
                            
                               
                        <input type="text" name="id" id=""  value="<?php echo $guardar ["id"]; ?>" hidden>

                        <input type="text" name="nombre" id="nombre" placeholder = "nombre" value="<?php echo $guardar ["nombre"]; ?>">
                        
                        <input type="text" name="apellido" id="apellido" placeholder="apellido" value="<?php echo $guardar ["apellido"]; ?>">

                        <input type="number" name="dni" id="dni" placeholder ="dni" value="<?php echo $guardar ["dni"]; ?>">

                        <input type="email" name="email" id="email" placeholder="email" value="<?php echo $guardar ["email"]; ?>">

                        <input type="text" name="texto" id="texto" placeholder="texto" value="<?php echo $guardar ["texto"]; ?>">

                        <button class="btn btn-success boton-modificar" type="submit" value="Guardar" name="guardar">Guardar</button>
                                
                        </div>
                    </div>
             </div>
            </div>

        
        </section>

    
</form>



 <!--FOOTER-->

 <footer>
            <ul class="nav nav-justified color-footer" >
                <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="#">Contactanos</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white" href="#">Prensa</a>
                </li>
                <li class="nav-item">
                <a class="nav-link  text-white" href="#">Conferencias</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white">Terminos y Condiciones</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white">Privacidad</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white">Uso Interno</a>
                </li>
                
            </ul>
        </footer>





        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

        <!--Mis Estilos-->
        <link href="css/style2.css" rel="stylesheet">

</body>
</html>