<?php
    include("BD/db.php");


   /* if (isset($_GET['id']))
    {
        $id = $_GET['id'];

        $query = "SELECT * FROM reportes WHERE id = $id";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) == 1)
        {
            $row = mysqli_fetch_array($result);

            $id = $row['id'];
            $name = $row['name'];
            $lastname = $row['lastname'];
            $secretary = $row['secretary'];
            $contract_expiration = $row['contract_expiration'];
            $phone = $row['phone'];
            $email = $row['email'];
            $contract_supervisor = $row['contract_supervisor'];
            $project = $row['project'];
            $program = $row['program'];
            $dependency = $row['dependency'];
            $job_title = $row['job_title'];
            $type_of_bonding = $row['type_of_bonding'];

        }
    }

    if(isset($_POST['update']))
    {
        $id = $_GET['id'];
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $secretary = $_POST['secretary'];
        $contract_expiration = $_POST['contract_expiration'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $contract_supervisor = $_POST['contract_supervisor'];
        $project = $_POST['project'];
        $program = $_POST['program'];
        $dependency = $_POST['dependency'];
        $job_title = $_POST['job_title'];
        $type_of_bonding = $_POST['type_of_bonding'];

        $query = "UPDATE reportes set name = '$name', lastname = '$lastname', secretary = '$secretary', contract_expiration = '$contract_expiration',
        phone = '$phone', email = '$email', contract_supervisor = '$contract_supervisor', project = '$project', program = '$program', dependency = '$dependency',
        job_title = '$job_title', type_of_bonding = '$type_of_bonding'  WHERE id = $id ";
        mysqli_query($conn, $query);

        header('Location:activo_carnet.php');
        exit();
    } */
?>

<?php
    include("includes/header.php")

?>

<header class="page-header font-small text-center pt-4 pb-3" style="background-color:#c79be0; color:white">
    <a> Nombre página </a>
</header>


<div class="container p-4">
    <div class="roow">
        <div class="col-mod-4">
            <div class="card card-body">
                <form action="edit_registry.php?id=<?php echo $_GET['id'];?>" method="POST">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Nombres </label>
                            <input textarea type="text" name="name" class="form-input" style="resize:none;" required>
                        </div>
                        <div class="form-group">
                            <label for="lastname">Apellidos </label>
                            <input type="text" name="lastname" class="form-input" style="resize:none;" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="identification">Cédula</label>
                            <input type="text" class="form-input" name="identification" id="cedula" style="resize:none;"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="email">Correo Electrónico</label>
                            <input type="email" class="form-input" name="email" id="correo" style="resize:none;"
                                required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="dependency">Dependencia</label>
                            <input type="text" class="form-input" name="dependency" id="dependencia"
                                style="resize:none;" required>
                        </div>
                        <div class="form-group">
                            <label for="secretary">Secretaría</label>
                            <input type="text" class="form-input" name="secretary" id="secretaria" style="resize:none;"
                                required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="project">Proyecto </label>
                            <input type="text" name="project" class="form-input" id="project" style="resize:none;"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="program">Programa </label>
                            <input type="text" name="program" class="form-input" id="program" style="resize:none;"
                                required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="job_title">Cargo </label>
                            <input type="text" name="job_title" class="form-input" id="job_title" style="resize:none;"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="type_of_bonding">Tipo de vinculacion </label>
                            <input type="text" name="type_of_bonding" class="form-input" id="type_of_bonding"
                                style="resize:none;" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="contract_expiration">Fecha de vencimiento del Contrato </label>
                            <input type="text" name="contract_expiration" class="form-input"
                                placeholder="Fecha de expiración del contrato" onfocus="(this.type='date')"
                                onfocusout="(this.type='text')" style="resize:none;" required>
                        </div>
                        <div class="form-group">
                            <label for="status">Estatus del Carnet</label>
                            <input type="text" class="form-input" name="status" id="estatus" style="resize:none;"
                                required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="valor">Valor del Carnet</label>
                            <input type="number" class="form-input" name="valor" id="valor" />
                        </div>
                        <div class="form-group">
                            <label for="contract_superviso">Autorización</label>
                            <input type="text" class="form-input" name="contract_superviso" id="autorizacion"
                                style="resize:none;" required>
                        </div>
                        <!-- <div class="form-group">
                              <label for="contract_supervisor">Supervisor de contrato: </label>
                             <input type="text" name="contract_supervisor" class="form-control"
                             placeholder="Supervisor de contrato" style="resize:none;" required>
                            </div>-->
                    </div>
                    <div class="form-row">
                        <div class="form-group form-icon">
                            <label for="fecha_foto">Fecha de la Foto</label>
                            <input type="date" class="form-input" name="fecha_foto" id="fecha_foto"
                                placeholder="MM-DD-YYYY" />
                        </div>
                        <div class="form-group form-icon">
                            <label for="fecha_ela">Fecha de Elaboración</label>
                            <input type="date" class="form-input" name="fecha_ela" id="fecha_ela"
                                placeholder="MM-DD-YYYY" />
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group form-icon">
                            <label for="fecha_entrega">Fecha de Entrega del Carnet</label>
                            <input type="date" class="form-input" name="fecha_entrega" id="fecha_entrega"
                                placeholder="MM-DD-YYYY" />
                        </div>
                        <div class="form-group">
                            <label for="estado">Estado de Pago</label>
                            <input type="text" class="form-input" name="estado" id="estado" />
                        </div>

                    </div>
                    <div class="form-row">


                        <div class="form-group">
                            <label for="phone">Número Telefonico</label>
                            <input type="number" class="form-input" name="phone" id="numero" style="resize:none;"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="toma">Toma</label>
                            <input type="text" class="form-input" name="toma" id="toma" />



                        </div>
                    </div>
                    <div class="form-row">
                        <!--desde aqui hasta type="file" es el boton para cargar la foto modifiquenla para php para que quede dentro del contenedor-->
                        <div class="form-group">
                            <label for="MAX_FILE_SIZE">Cargar la foto</label>

                            <input type="hidden" name="MAX_FILE_SIZE" value="4194304" id="MAX_FILE_SIZE" />
                            <input type="file" />
                        </div>
                        <div class="form-group">
                            <label for="obs">Observaciones</label>
                            <textarea name="obs" rows="10" cols="50" placeholder="Observaciones"></textarea>
                        </div>
                    </div>

            </div>




            <input type="submit" class="btn btn-light  btn-block" name="update" value="Guardar"></input>
            <!-- se agregan como links las opciones de editar y eliminar desde  -->
            <!-- <a href="edit_registry.php?id=<?php echo $id?>" class="btn btn-light btn-block" title="Editar">Editar</a>                    -->
            <a href="delete_registry.php?id=<?php echo $id?>" class="btn btn-light btn-block"
                title="Eliminar">Eliminar</a>
            </form>
        </div>
    </div>
    <div class="col-mod-4">
    </div>
</div>
</div>

<div>
    <form action="upload.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="image" />
        <button type="submit">Subir imagen</button>
    </form>
</div>

<form action="activo_carnet.php" method="POST" class="text-center ">
    <input type="submit" name="ppal" value="Volver al listado" style="color:black"></input>
</form><br><br><br><br><br><br><br>



<?php

    include("includes/footer.php");
?>