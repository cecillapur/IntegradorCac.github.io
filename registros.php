<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--LINK BOOTSTRAP-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        
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
                            <a class="nav-link active text-bs-gray-dark p-3 dropdown-item" href="./index.html" aria-current="page">La Conferencia</a>
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
                            <a class="nav-link text-bs-gray-dark p-3 link-success " href="./comprar.html" >Comprar Tickets</a>
                        </li>
                    
                        </ul>
                    </div>
                </div>
            </nav>
          </header>
         
        <!--TABLA DE REGISTRO-->
        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card bg-secondary card-outlibe text-center">
                            <h5 class="text-white">Registro de Inscriptos</h5>

                            <?php
                                 include "conexion.php";

                                 $consulta = $conectar->query("SELECT*FROM datos_form");
                                 $row = mysqli_num_rows($consulta);

                            ?>

                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 p-2">
                        <div class="tabla-responsive">
                            <table class="table table-striped table-hover" >
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellido</th>
                                    <th scope="col">Dni</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Tema de Conferencia</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!--Mostrar Datos de la Tabla BD-->
                                    <?php
                                    while ($guardar = $consulta -> fetch_assoc()) { ?>
                                        <tr name="aceptar">
                                            <th scope="row">
                                                <?php echo $guardar ["id"]; ?>

                                            </th>
                                            <td><?php echo $guardar ["nombre"]; ?></td>
                                            <td><?php echo $guardar ["apellido"]; ?></td>
                                            <td><?php echo $guardar ["dni"]; ?></td>
                                            <td><?php echo $guardar ["email"]; ?></td>
                                            <td><?php echo $guardar ["texto"]; ?></td>

                                            <td><a href="formeditar_registro.php?id=<?php echo $guardar ["id"]?>"><button class="btn btn-success boton-editar">Editar</button></a></td>
                                            <td><a href="eliminar_registro.php?id=<?php echo $guardar["id"] ?>"><button class=" btn btn-success boton-eliminar" type="submit">Eliminar</button></a></td>
                                        </tr>
                                        <?php }

                                    ?>

                                  
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
             </div>
            </div>
        </section>
      


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