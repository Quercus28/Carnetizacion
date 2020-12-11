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
                            <label for="name">Nombres: </label>
                            <input textarea type="text" name="name" class="form-control" 
                                style="resize:none;" required>
                        </div>
                        <div class="form-group">
                            <label for="lastname">Apellidos: </label>
                            <input type="text" name="lastname" class="form-control" 
                                style="resize:none;" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="secretary">Secretaría: </label>
                        <input type="text" name="secretary" class="form-control" placeholder="Secretaría"
                            style="resize:none;" required>
                    </div>
                    <div class="form-group">
                        <label for="contract_expiration">Fecha de vencimiento: </label>
                        <input type="text" name="contract_expiration" class="form-control"
                            placeholder="Fecha de expiración del contrato" onfocus="(this.type='date')"
                            onfocusout="(this.type='text')" style="resize:none;" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Telefono: </label>
                        <input type="number" name="phone" class="form-control" placeholder="Número telefonico"
                            style="resize:none;" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo: </label>
                        <input type="email" name="email" class="form-control" placeholder="Correo electrónico"
                            style="resize:none;" required>
                    </div>
                    <div class="form-group">
                        <label for="contract_supervisor">Supervisor de contrato: </label>
                        <input type="text" name="contract_supervisor" class="form-control"
                            placeholder="Supervisor de contrato" style="resize:none;" required>
                    </div>
                    <div class="form-group">
                        <label for="project">Proyecto: </label>
                        <input type="text" name="project" class="form-control" placeholder="Proyecto"
                            style="resize:none;" required>
                    </div>
                    <div class="form-group">
                        <label for="program">Programa: </label>
                        <input type="text" name="program" class="form-control" placeholder="Programa o convenio"
                            style="resize:none;" required>
                    </div>
                    <div class="form-group">
                        <label for="dependency">Dependencia: </label>
                        <input type="text" name="dependency" class="form-control" placeholder="Dependencia"
                            style="resize:none;" required>
                    </div>
                    <div class="form-group">
                        <label for="job_title">Cargo: </label>
                        <input type="text" name="job_title" class="form-control" placeholder="Cargo"
                            style="resize:none;" required>
                    </div>
                    <div class="form-group">
                        <label for="type_of_bonding">Tipo de vinculacion: </label>
                        <input type="text" name="type_of_bonding" class="form-control" placeholder="Tipo de vinculación"
                            style="resize:none;" required>
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