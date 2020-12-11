<?php
    include("BD/db.php");

    if (isset($_GET['id']))
    {
        $id = $_GET['id'];

        $query = "SELECT * FROM official WHERE Identification = $id";
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
            $photo_code = $row['PhotoCode'];
            $carnet_type = $row['CarnetType'];
            $cost = $row['Cost'];
            $pay_method = $row['PayMethod'];
            $pay_status = $row['PayStatus'];
            $attention_date_time = $row['AttentionDateTime'];
            $photo_date = $row['PhotoDate'];
            $elaboration_date = $row['ElaborationDate'];
            $delivery_date = $row['DeliveryDate'];
            $carnet_status = $row['CarnetStatus'];
            $observations = $row['Observations'];
        }
    }
?>

<?php
    include("includes/header.php")

?>

    <header class="page-header font-small text-center pt-4 pb-3" style="background-color:#c79be0; color:white" >
        <a> Nombre página </a>
    </header>

<div class="container p-4">
    <div class="roow">
        <div class="col-mod-4">
            <div class="card card-body">
                <form action="update_official.php?id=<?php echo $_GET['id'];?>" method="POST">
                    <div class="form-group">
                    <label for="name">Identificación: </label>
                    <input
                        textarea
                            type="number"
                            name="id"
                            class="form-control"
                            value="<?php echo $id?>"
                            placeholder= "Identificación"
                            style = "resize:none;"
                            required>
                    </div>
                    <div class="form-group">
                    <label for="name">Nombre: </label>
                    <input
                        textarea
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
                    <div class="form-group">
                    <label for="phone">Telefono: </label>
                        <input
                            type="number"
                            name="phone"
                            class="form-control"
                            value="<?php echo $phone?>"
                            placeholder="Número telefonico"
                            style = "resize:none;"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="job_title">Cargo: </label>
                        <input
                            type="text"
                            name="job_title"
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
                        <label for="photo_code">Toma: </label>
                        <input
                            type="text"
                            name="photo_code"
                            class="form-control"
                            value="<?php echo $photo_code?>"
                            placeholder="Cargo"
                            style = "resize:none;"
                            required>
                    </div>
                    <div class="form-group">
                    <label for="carnet_type">Tipo de carnet: </label>
                        <input
                            type="text"
                            name="carnet_type"
                            class="form-control"
                            value="<?php echo $carnet_type?>"
                            placeholder="Elíja una opción"
                            style = "resize:none;"
                            required>
                    </div>
                    <div class="form-group">
                    <label for="cost">Costo: </label>
                        <input
                            type="number"
                            name="cost"
                            class="form-control"
                            value="<?php echo $cost?>"
                            placeholder="Valor"
                            style = "resize:none;"
                            required>
                    </div>
                    <div class="form-group">
                    <label for="pay_method">Método de pago: </label>
                        <input
                            type="text"
                            name="pay_method"
                            class="form-control"
                            value="<?php echo $pay_method?>"
                            style = "resize:none;"
                            required>
                    </div>
                    <div class="form-group">
                    <label for="pay_status">Estado de pago: </label>
                        <input
                            type="text"
                            name="pay_status"
                            class="form-control"
                            value="<?php echo $pay_status?>"
                            style = "resize:none;"
                            required>
                    </div>
                    <div class="form-group">
                    <label for="attention_date_time">Día y Hora de atención: </label>
                        <input
                            type="text"
                            name="attention_date_time"
                            class="form-control"
                            value="<?php echo $attention_date_time?>"
                            onfocus="(this.type='date')"
                            onfocusout="(this.type='text')"
                            style = "resize:none;"
                            required>
                    </div>
                    <div class="form-group">
                    <label for="photo_date">Fecha en la que se capturó la foto: </label>
                        <input
                            type="text"
                            name="photo_date"
                            class="form-control"
                            value="<?php echo $photo_date?>"
                            onfocus="(this.type='date')"
                            onfocusout="(this.type='text')"
                            style = "resize:none;"
                            required>
                    </div>
                    <div class="form-group">
                    <label for="delivery_date">Fecha de entrega: </label>
                        <input
                            type="text"
                            name="delivery_date"
                            class="form-control"
                            value="<?php echo $delivery_date?>"
                            onfocus="(this.type='date')"
                            onfocusout="(this.type='text')"
                            style = "resize:none;"
                            required>
                    </div>
                    <div class="form-group">
                    <label for="carnet_status">Estado del carnet: </label>
                        <input
                            type="text"
                            name="carnet_status"
                            class="form-control"
                            value="<?php echo $carnet_status?>"
                            style = "resize:none;"
                            required>
                    </div>
                    <div class="form-group">
                    <label for="observations">Observaciones: </label>
                        <input
                            type="text"
                            name="observations"
                            class="form-control"
                            value="<?php echo $observations?>"
                            style = "resize:none;"
                            required>
                    </div>

                    <input type="submit" class="btn btn-light  btn-block" name="update" value="Guardar"></input>
                    <!-- se agregan como links las opciones de editar y eliminar desde  -->
                    <!-- <a href="edit_registry.php?id=<?php echo $id?>" class="btn btn-light btn-block" title="Editar">Editar</a>                    -->
                    <a href="delete_official.php?id=<?php echo $id?>" class="btn btn-light btn-block" title="Eliminar">Eliminar</a>
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

    <form action ="list_official.php"  method="POST" class= "text-center ">
    <input type = "submit" name= "ppal" value = "Volver al listado"  style="color:black"></input>
    </form><br><br><br><br><br><br><br>



<?php

    include("includes/footer.php");
?>
