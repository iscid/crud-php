<?php include("config/conection.php") ?>
<?php include("includes/header.php") ?>

<div class="container-xl p-4">
    <div class="row">
        <div class="col-md-4">

        <!-- <?php #if(isset($_SESSION['alerta'])) { ?>
                <div class="alert alert-<?= $_SESSION['color'] ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['alerta'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
        <?php #session_unset(); } ?> -->

            <form action="create.php" method="POST" id="formularioGuardar">
                <div class="form-group my-2">
                    <label for="nombre">Nombre:</label>
                    <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Tu Nombre:" required>
                </div>
                <div class="form-group my-2">
                    <label for="apellidoPaterno">Apellido Paterno:</label>
                    <input class="form-control" type="text" name="apellidoPaterno" id="apellidoPaterno" placeholder="Tu Apellido Paterno" required>
                </div>
                <div class="form-group my-2">
                    <label for="apellidoMaterno">Apellido Materno:</label>
                    <input class="form-control" type="text" name="apellidoMaterno" id="apellidoMaterno" placeholder="Tu Apellido Materno:" required>
                </div>
                <div class="form-group my-2">
                    <label for="usuario">Usuario:</label>
                    <input class="form-control" type="text" name="usuario" id="usuario" placeholder="Tu Usuario:" required>
                </div>
                <div class="form-group my-2">
                    <label for="correo">Correo:</label>
                    <input class="form-control" type="email" name="correo" id="correo" placeholder="Tu Correo:" required>
                </div>

                <input class="btn btn-success btn-block" type="submit" name="guardar" value="Guardar">
            </form>
        </div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No. Empleado</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Usuario</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $query = "SELECT * FROM usuarios";
                        $usuarios = mysqli_query($conn, $query);
                        while($dato = mysqli_fetch_array($usuarios)){  ?>
                            <tr>
                                <td><?php echo $dato['numeroEmpleado'] ?></td>
                                <td><?php echo $dato['nombre'] ?></td>
                                <td><?php echo $dato['apellidoPaterno'] ?></td>
                                <td><?php echo $dato['apellidoMaterno'] ?></td>
                                <td><?php echo $dato['usuario'] ?></td>
                                <td><?php echo $dato['correo'] ?></td>
                                <td>
                                    <a href="update.php?id=<?php echo $dato['numeroEmpleado']?>" class="btn btn-outline-primary btn-sm mt-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                            <path d="M16 5l3 3" />  
                                        </svg>  
                                    </a>
                                    <a href="delete.php?id=<?php echo $dato['numeroEmpleado']?>" class="btn btn-outline-danger btn-sm mt-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff2825" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M4 7l16 0" />
                                            <path d="M10 11l0 6" />
                                            <path d="M14 11l0 6" />
                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                        </svg>  
                                    </a>
                                </td>
                            </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include("includes/footer.php") ?>


    