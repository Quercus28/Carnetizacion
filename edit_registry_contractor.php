<?php
    include("BD/db.php");

    // var_dump($_GET['id']);
    // var_dump($_GET);

    if (isset($_GET['id']))
    {
        $id = $_GET['id'];      

        $query = "SELECT * FROM contractor WHERE Identification = $id";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) == 1)
        {
            $row = mysqli_fetch_array($result);

            $id = $row['Identification'];
            $name = $row['Name'];
            $lastname = $row['LastName'];
            $secretary = $row['Secretary'];
            $phone = $row['Phone'];
            $email = $row['Email'];
            $project = $row['Project'];
            $job_title = $row['JobTitle'];
        }
    }
    
 
?>

<?php
    include("includes/header.php")

?>

    <header class="page-header font-small text-center pt-4 pb-3" style="background-color:#c79be0; color:white" >
        <a> Formulario contratista </a>
    </header>


<div class="container p-4">
    <div class="roow">
        <div class="col-mod-4">
            <div class="card card-body">
                <form action="update_contractor.php?id=<?php echo $_GET['id'];?>" method="POST">
                    <div class="form-group">
                        <label for="type_of_bonding">Identificación: </label>
                            <input
                                type="text"
                                name="id"
                                class="form-control"
                                value="<?php echo $id?>"
                                placeholder="Tipo de vinculación"
                                style = "resize:none;"
                                required>
                    </div>
                    <div class="form-group">
                    <label for="name">Nombre: </label>
                    <input
                            type="text"
                            name="name"
                            class="form-control"
                            value="<?php echo $name?>"
                            placeholder= "Nombres"
                            style = "resize:none;"
                            required>
                    </div>
                    
                    <div class="form-group">
                    <label for="lastname">Apellidos: </label>
                        <input
                            type="text"
                            name="lastname"
                            class="form-control"
                            value= "<?php echo $lastname?>"
                            placeholder="Apellidos"
                            style = "resize:none;"
                            required>
                    </div>
                    <div class="form-group">
                    <label for="secretary">Secretaria: </label>
                        <input
                            type="text"
                            name="secretary"
                            class="form-control"
                            value="<?php echo $secretary?>"
                            placeholder="Secretaría"
                            style = "resize:none;"
                            required>
                    </div>
                    <!-- <div class="form-group">
                    <label for="contract_expiration">Fecha de vencimiento: </label>
                        <input
                            type="text"
                            name="contract_expiration"
                            class="form-control"
                            value="<?php echo $contract_expiration?>"
                            placeholder="Fecha de expiración del contrato"
                            onfocus="(this.type='date')"
                            onfocusout="(this.type='text')"
                            style = "resize:none;"
                            required>
                    </div> -->
                    <div class="form-group">
                    <label for="phone">Telefono: </label>
                        <input
                            type="number"
                            name="phone"
                            class="form-control"
                            value="<?php echo $phone?>"
                            placeholder="Número telefonico"
                            style = "resize:none;"
                            >
                    </div>
                    <div class="form-group">
                    <label for="email">Correo: </label>
                        <input
                            type="email"
                            name="email"
                            class="form-control"
                            value="<?php echo $email?>"
                            placeholder="Correo electrónico"
                            style = "resize:none;"
                            required>
                    </div>
                    <!-- <div class="form-group">
                    <label for="contract_supervisor">Supervisor de contrato: </label>
                        <input
                            type="text"
                            name="contract_supervisor"
                            class="form-control"
                            value="<?php //echo $contract_supervisor?>"
                            placeholder="Supervisor de contrato"
                            style = "resize:none;"
                            required>
                    </div> -->
                    <div class="form-group">
                    <label for="project">Proyecto: </label>
                        <input
                            type="text"
                            name="project"
                            class="form-control"
                            value="<?php echo $project?>"
                            placeholder="Proyecto"
                            style = "resize:none;"
                            required>
                    </div>
                    <!-- <div class="form-group">
                    <label for="program">Programa: </label>
                        <input
                            type="text"
                            name="program"
                            class="form-control"
                            value="<?php echo $program?>"
                            placeholder="Programa o convenio"
                            style = "resize:none;"
                            required>
                    </div> -->
                    <!-- <div class="form-group">
                    <label for="dependency">Dependencia: </label>
                        <input
                            type="text"
                            name="dependency"
                            class="form-control"
                            value="<?php echo $dependency?>"
                            placeholder="Dependencia"
                            style = "resize:none;"
                            required>
                    </div> -->
                    <!-- <div class="form-group">
                        <label for="job_title">Cargo: </label>
                        <input
                            type="text"
                            name="job_title"
                            class="form-control"
                            value="<?php echo $job_title?>"
                            placeholder="Cargo"
                            style = "resize:none;"
                            required>
                    </div> -->
                    <!-- <div class="form-group">
                    <label for="type_of_bonding">Tipo de vinculacion: </label>
                        <input
                            type="text"
                            name="type_of_bonding"
                            class="form-control"
                            value="<?php echo $type_of_bonding?>"
                            placeholder="Tipo de vinculación"
                            style = "resize:none;"
                            required>
                    </div> -->



                    <input type="submit" class="btn btn-light  btn-block" name="update" value="Guardar"></input>
                    <!-- se agregan como links las opciones de editar y eliminar desde  -->
                    <!-- <a href="edit_registry.php?id=<?php echo $id?>" class="btn btn-light btn-block" title="Editar">Editar</a>                    -->
                    <a href="delete_contractor.php?id=<?php echo $id?>" class="btn btn-light btn-block" title="Eliminar">Eliminar</a>
                </form>
            </div>
        </div>
        <div class="col-mod-4">
        </div>
    </div>
</div>

<div>
    <form action="upload.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="image"/>
        <button type="submit" >Subir imagen</button>
    </form>
</div>

    <form action ="listar_contractor.php"  method="POST" class= "text-center ">
    <input type = "submit" name= "ppal" value = "Volver al listado"  style="color:black"></input>
    </form><br><br><br><br><br><br><br>



<?php

    include("includes/footer.php");
?>
