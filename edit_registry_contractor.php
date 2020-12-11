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
            $email = $row['Email'];
            $phone = $row['Phone'];
            $job_title = $row['JobTitle'];
            $secretary = $row['Secretary'];
            $supervisor = $row['Supervisor'];
            $project = $row['Project'];
            $photoCode = $row['PhotoCode'];
            $carnetType = $row['CarnetType'];
            $Cost = $row['Cost'];
            $paymethod = $row['PayMethod'];
            $payStatus = $row['PayStatus'];
            $attentionDateTime = $row['AttentionDateTime'];
            $photoDate = $row['PhotoDate'];
            $elaborationDate = $row['ElaborationDate'];
            $deliveryDate = $row['DeliveryDate'];
            $expirationDate = $row['ExpirationDate'];
            $carnetStatus = $row['CarnetStatus'];
            $observation = $row['Observations'];


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
                    <label for="lastname">Email: </label>
                        <input
                            type="email"
                            name="email"
                            class="form-control"
                            value= "<?php echo $email?>"
                            placeholder="Email"
                            style = "resize:none;"
                            required>
                    </div>

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
                    <label for="email">Cargo: </label>
                        <input
                            type="text"
                            name="jobTitle"
                            class="form-control"
                            value="<?php echo $job_title?>"
                            placeholder="Cargo"
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

                    <div class="form-group">
                    <label for="email">Supervisor: </label>
                        <input
                            type="text"
                            name="supervisor"
                            class="form-control"
                            value="<?php echo $supervisor?>"
                            placeholder="Supervisor"
                            style = "resize:none;"
                            required>
                    </div>

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
                                                                              
                    <div class="form-group">
                    <label for="program">Codigo de la foto: </label>
                        <input
                            type="text"
                            name="photoCode"
                            class="form-control"
                            value="<?php echo $photoCode?>"
                            placeholder="Codigo de la foto"
                            style = "resize:none;"
                            required>
                    </div>
                    <div class="form-group">
                    <label for="dependency">Tipo de carné: </label>
                        <input
                            type="text"
                            name="carnetType"
                            class="form-control"
                            value="<?php echo $carnetType?>"
                            placeholder="Tipo de carné"
                            style = "resize:none;"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="job_title">Costo: </label>
                        <input
                            type="text"
                            name="cost"
                            class="form-control"
                            value="<?php echo $Cost?>"
                            placeholder="Costo"
                            style = "resize:none;"
                            required>
                    </div>

                    <div class="form-group">
                    <label for="type_of_bonding">Metodo de pago: </label>
                        <input
                            type="text"
                            name="payMethod"
                            class="form-control"
                            value="<?php echo $paymethod?>"
                            placeholder="Metodo de pago"
                            style = "resize:none;"
                            required>
                    </div>

                    <div class="form-group">
                    <label for="type_of_bonding">Estado del pago: </label>
                        <input
                            type="text"
                            name="payStatus"
                            class="form-control"
                            value="<?php echo $payStatus?>"
                            placeholder="Tipo de vinculación"
                            style = "resize:none;"
                            required>
                    </div>

                    <div class="form-group">
                    <label for="type_of_bonding">Fecha de la atención: </label>
                        <input
                            type="date"
                            name="attentionDate"
                            class="form-control"
                            value="<?php echo $attentionDateTime?>"
                            placeholder="Tipo de vinculación"
                            onfocus="(this.type='date')"
                            onfocusout="(this.type='text')"
                            style = "resize:none;"
                            required>
                    </div>

                    <div class="form-group">
                    <label for="contract_expiration">Fecha de la foto: </label>
                        <input
                            type="text"
                            name="photoDate"
                            class="form-control"
                            value="<?php echo $photoDate?>"
                            placeholder="Fecha de la foto"
                            onfocus="(this.type='date')"
                            onfocusout="(this.type='text')"
                            style = "resize:none;"
                            required>
                    </div>

                    <div class="form-group">
                    <label for="contract_supervisor">Fecha de elaboración: </label>
                        <input
                            type="date"
                            name="elaborationDate"
                            class="form-control"
                            value="<?php echo $elaborationDate?>"
                            placeholder="Fecha de elaboración"
                            onfocus="(this.type='date')"
                            onfocusout="(this.type='text')"
                            style = "resize:none;"
                            required>
                    </div>

                    <div class="form-group">
                    <label for="contract_supervisor">Fecha de entrega: </label>
                        <input
                            type="date"
                            name="deliveryDate"
                            class="form-control"
                            value="<?php echo $elaborationDate?>"
                            placeholder="Fecha de entrega"
                            onfocus="(this.type='date')"
                            onfocusout="(this.type='text')"
                            style = "resize:none;"
                            required>
                    </div>

                    <div class="form-group">
                    <label for="contract_supervisor">Fecha de vencimiento: </label>
                        <input
                            type="date"
                            name="expirationDate"
                            class="form-control"
                            value="<?php echo $expirationDate?>"
                            placeholder="Fecha de vencimiento"
                            onfocus="(this.type='date')"
                            onfocusout="(this.type='text')"
                            style = "resize:none;"
                            required>
                    </div>

                    <div class="form-group">
                    <label for="contract_supervisor">Estado del carné: </label>
                        <input
                            type="text"
                            name="carnetStatus"
                            class="form-control"
                            value="<?php echo $carnetStatus?>"
                            placeholder="Estado del carné"
                            style = "resize:none;"
                            required>
                    </div>

                    <div class="form-group">
                    <label for="contract_supervisor">Observaciones: </label>
                        <input
                            type="text"
                            name="observation"
                            class="form-control"
                            value="<?php echo $observation?>"
                            placeholder="Estado del carné"
                            style = "resize:none;"
                            required>
                    </div>

                    <input type="submit" class="btn btn-light  btn-block" name="update" value="Guardar"></input>
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
