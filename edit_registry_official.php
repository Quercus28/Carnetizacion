<?php
    include("BD/db.php");

    if (isset($_GET['id']))
    {
        $id = $_GET['id'];

        $query = "SELECT * FROM official WHERE Identification = '$id'";
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

    <div class="main">
    <section class="signup">
        <div class="container">
            <h2 class="form-title" style="text-align: center">
                Servidor Público
            </h2>
            <div>
                <div class="signup-form">
                    <form action="update_official.php?id=<?php echo $_GET['id'];?>" method="POST" class="register-form" id="register-form">
                        <h5>Número de Identificación</h5>
                        <div class="form-group">
                            <label for="cc">
                                <i class="zmdi zmdi-account-box material-icons-name"></i>
                            </label>
                            <input
                                type="number"
                                id="cc"
                                name="id"
                                value="<?php echo $id?>"
                                style = "resize:none;"
                                required
                            >
                        </div>
                        <h5>Nombres</h5>
                        <div class="form-group">
                            <label for="nombre">
                                <i class="zmdi zmdi-account material-icons-name">
                                </i>
                            </label>
                            <input
                                type="text"
                                id="nombre"
                                name="name"
                                value="<?php echo $name?>"
                                style = "resize:none;"
                                required
                            >
                        </div>
                        <h5>Apellidos</h5>
                        <div class="form-group">
                            <label for="apellidos">
                                <i class="zmdi zmdi-account-o material-icons-name">
                                </i>
                            </label>
                            <input
                                type="text"
                                id = "apellidos"
                                name="lastname"
                                value= "<?php echo $lastname?>"
                                style = "resize:none;"
                                required
                            >
                        </div>
                        <h5>Correo Electrónico</h5>
                        <div class="form-group">
                            <label for="correo">
                                <i class="zmdi zmdi-email material-icons-name">
                                </i>
                            </label>
                            <input
                                type="email"
                                id = "correo"
                                name="email"
                                value="<?php echo $email?>"
                                style = "resize:none;"
                                required
                            >
                        </div>
                        <h5>Teléfono Celular</h5>
                        <div class="form-group">
                            <label for="celular">
                                <i class="zmdi zmdi-phone material-icons-name">
                                </i>
                            </label>
                            <input
                                type="number"
                                id="celular"
                                name="phone"
                                value="<?php echo $phone?>"
                                style = "resize:none;"
                                required
                            >
                        </div>
                        <h5>Secretaría</h5>
                            <input
                                type="text"
                                id="secretaría"
                                value="<?php echo $secretary?>"
                                name="secretary"
                                style = "resize:none;"
                                required
                            >
                        <h5>Cargo</h5>
                        <div class="form-group">
                            <label for="cargo">
                                <i class="zmdi zmdi-accounts-alt material-icons-name">
                                </i>
                            </label>
                            <input
                                type="text"
                                id="cargo"
                                name="job_title"
                                value="<?php echo $job_title?>"
                                style = "resize:none;"
                                required
                            >
                        </div>
                        <h5>Código de la foto</h5>
                        <div class="form-group">
                            <input
                                type="text"
                                id="codigo de la foto"
                                name="photo_code"
                                value="<?php echo $photo_code?>"
                                style = "resize:none;"
                                required
                            >
                        </div>
                        <h5>Opción de carnet</h5>
                        <div class="form-group">
                            <input
                                type="text"
                                id="cargo"
                                name="carnet_type"
                                value="<?php echo $carnet_type?>"
                                style = "resize:none;"
                                required
                            >
                        </div>
                        <h5>Método de pago</h5>
                        <div class="form-group">
                            <input
                                type="text"
                                id="metodo_de_pago"
                                name="pay_method"
                                value="<?php echo $pay_method?>"
                                style = "resize:none;"
                                required
                            >
                        </div>
                        <h5>Costo</h5>
                        <div class="form-group">
                            <label for="costo">
                                <i class="zmdi zmdi-accounts-alt material-icons-name">
                                </i>
                            </label>
                            <input
                                type="number"
                                id="costo"
                                name="cost"
                                value="<?php echo $cost?>"
                                style = "resize:none;"
                                required
                            >
                        </div>
                        <h5>Estado de pago</h5>
                        <div class="form-group">
                            <label for="costo">
                                <i class="zmdi zmdi-accounts-alt material-icons-name">
                                </i>
                            </label>
                            <input
                                type="text"
                                id="costo"
                                name="pay_status"
                                value="<?php echo $pay_status?>"
                                style = "resize:none;"
                                required
                            >
                        </div>
                        <h5>Día y Hora de atención</h5>
                        <div class="form-group">
                            <label for="costo">
                                <i class="zmdi zmdi-accounts-alt material-icons-name">
                                </i>
                            </label>
                            <input
                                type="text"
                                id="costo"
                                name="attention_date_time"
                                value="<?php echo $attention_date_time?>"
                                onfocus="(this.type='date')"
                                onfocusout="(this.type='text')"
                                style = "resize:none;"
                                required
                            >
                        </div>
                        <h5>Fecha en la que se capturó la foto</h5>
                        <div class="text">
                            <input
                                type="text"
                                id="costo"
                                name="photo_date"
                                value="<?php echo $photo_date?>"
                                onfocus="(this.type='date')"
                                onfocusout="(this.type='text')"
                                style = "resize:none;"
                                required
                            >
                        </div>
                        <h5>Fecha de elaboración del carnet</h5>
                        <div class="text">
                            <input
                                type="text"
                                id="costo"
                                name="elaboration_date"
                                value="<?php echo $photo_date?>"
                                onfocus="(this.type='date')"
                                onfocusout="(this.type='text')"
                                style = "resize:none;"
                                required
                            >
                        </div>
                        <h5>Fecha de entrega</h5>
                        <div class="form-group">
                            <label for="costo">
                                <i class="zmdi zmdi-accounts-alt material-icons-name">
                                </i>
                            </label>
                            <input
                                type="text"
                                id="delivery_date"
                                name="delivery_date"
                                value="<?php echo $delivery_date?>"
                                onfocus="(this.type='date')"
                                onfocusout="(this.type='text')"
                                style = "resize:none;"
                                required
                            >
                        </div>
                        <h5>Estado del carnet</h5>
                        <div class="form-group">
                            <label for="costo">
                                <i class="zmdi zmdi-accounts-alt material-icons-name">
                                </i>
                            </label>
                            <input
                                type="text"
                                id="costo"
                                name="carnet_status"
                                value="<?php echo $carnet_status?>"
                                style = "resize:none;"
                                required
                            >
                        </div>
                        <h5>Observaciones</h5>
                        <div class="form-group">
                            <label for="costo">
                                <i class="zmdi zmdi-accounts-alt material-icons-name">
                                </i>
                            </label>
                            <input
                                type="text"
                                id="costo"
                                name="observations"
                                value="<?php echo $observations?>"
                                style = "resize:none;"
                                required
                            >
                        </div>
                        <input type="submit" class="btn btn-primary  btn-block" name="update" value="Guardar"></input>

                    </form>
                        <div>
                            <form action="upload.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
                                <input type="file" name="image"/>
                                <button type="submit" >Subir imagen</button>
                            </form>
                        </div>

                        <a href="delete_official.php?id=<?php echo $id?>" class="btn btn-light btn-block" title="Eliminar">Eliminar</a>

                        <div class="col-mod-4">
                        <form action ="list_official.php" method="POST" class= "register-form">
                            <input type = "submit" class="btn btn-light btn-block" name= "ppal" value = "Volver al listado"
                            style="color:black"></input>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
    include("includes/footer.php");
?>