<?php
    include("BD/db.php");
    include("includes/header.php")
?>

<header class="page-header font-small text-center pt-4 pb-3" style="background-color:#c79be0; color:white" >
    <a> Formulario Contratista</a>
</header>

<div class="container p-4">
    <div class="roow">
        <div class="col-mod-4">

            <?php if(isset($_SESSION['message'])) { ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message']  ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php } ?>

            <div class="card card-body">
                <form action="save_contractor.php" method="POST">
                    <div class="form-group">
                        <input
                            type="number"
                            name="in_identification"
                            class="form-control"
                            placeholder="Número de Identificación"
                            style = "resize:none;"
                            required>
                    </div>
                    <div class="form-group">
                        <input
                            type="text"
                            name="in_name"
                            class="form-control"
                            placeholder="Nombres"
                            style = "resize:none;"
                            required>
                    </div>
                    <div class="form-group">
                        <input
                            type="text"
                            name="in_lastname"
                            class="form-control"
                            placeholder="Apellidos"
                            style = "resize:none;"
                            required>
                    </div>
                    <div class="form-group">
                        <input
                            type="email"
                            name="in_email"
                            class="form-control"
                            placeholder="Correo electrónico"
                            style = "resize:none;"
                            required>
                    </div>
                    <div class="form-group">
                        <input
                            type="number"
                            name="in_phone"
                            class="form-control"
                            placeholder="Número de teléfono celular"
                            style = "resize:none;"
                            required>
                    </div>
                    <div class="form-group">
                        <input
                            type="text"
                            name="in_job_title"
                            class="form-control"
                            placeholder="Cargo"
                            style = "resize:none;"
                            required>
                    </div>
                    <div class="form-group">
                        <input
                            type="text"
                            name="in_secretary"
                            class="form-control"
                            placeholder="Secretaría"
                            style = "resize:none;"
                            required>
                    </div>
                    
                    <div class="form-group">
                        <input
                            type="text"
                            name="in_supervisor"
                            class="form-control"
                            placeholder="Supervisor"
                            style = "resize:none;"
                            required>
                    </div>
                    <div class="form-group">
                        <input
                            type="text"
                            name="in_project"
                            class="form-control"
                            placeholder="Proyecto"
                            style = "resize:none;"
                            required>
                    </div>
                    <div class="form-group">
                        <input
                            type="text"
                            name="in_photo_code"
                            class="form-control"
                            placeholder="Código de foto"
                            style = "resize:none;"
                            required>
                    </div>
                    <div class="form-group">
                        <input
                            type="text"
                            name="in_carnet_type"
                            class="form-control"
                            placeholder="Tipo de carnet"
                            style = "resize:none;"
                            required>
                    </div>
                    <div class="form-group">
                        <input
                            type="number"
                            name="in_cost"
                            class="form-control"
                            placeholder="Costo"
                            style = "resize:none;"
                            required>
                    </div>
                    <div class="form-group">
                        <input
                            type="text"
                            name="in_pay_method"
                            class="form-control"
                            placeholder="Método de pago"
                            style = "resize:none;"
                            required>
                    </div>
                    <div class="form-group">
                        <input
                            type="text"
                            name="in_pay_status"
                            class="form-control"
                            placeholder="Estado de pago"
                            style = "resize:none;"
                            required>
                    </div>
                    <div class="form-group">
                        <input
                            type="date"
                            name="in_attentionDataTime"
                            class="form-control"
                            placeholder="Fecha de atención"
                            style = "resize:none;"
                            required>
                    </div>
                    <div class="form-group">
                        <input
                            type="date"
                            name="in_photoDate"
                            class="form-control"
                            placeholder="Fecha de la foto"
                            style = "resize:none;"
                            required>
                    </div>
                    <div class="form-group">
                        <input
                            type="date"
                            name="in_elabotarionDate"
                            class="form-control"
                            placeholder="Fecha elaboracion de foto"
                            style = "resize:none;"
                            required>
                    </div>
                    <div class="form-group">
                        <input
                            type="date"
                            name="in_deliveryDate"
                            class="form-control"
                            placeholder="Fecha entrega de foto"
                            style = "resize:none;"
                            required>
                    </div>
                    <div class="form-group">
                        <input
                            type="date"
                            name="in_deliveryDate"
                            class="form-control"
                            placeholder="Fecha entrega de foto"
                            style = "resize:none;"
                            required>
                    </div>
                    <div class="form-group">
                        <input
                            type="date"
                            name="in_ExpirationDate"
                            class="form-control"
                            placeholder="Fecha de caducidad de foto"
                            style = "resize:none;"
                            required>
                    </div>
                    <div class="form-group">
                        <input
                            type="text"
                            name="in_status"
                            class="form-control"
                            placeholder="estado del carné"
                            style = "resize:none;"
                            required>
                    </div>
                    <div class="form-group">
                        <input
                            type="text"
                            name="in_observation"
                            class="form-control"
                            placeholder="Observaciones"
                            style = "resize:none;"
                            >
                    </div>
                    
                    <input type="submit" class="btn btn-light  btn-block" name="save" value="Guardar"></input>
                </form>
            </div>
        </div>
        <div class="col-mod-4">

        </div>
    </div>
</div>

<?php
    if(isset($_POST['nologin'])) {?>
        <div class="container p-4">
            <div class="roow">
                <div class="col-mod-4">
                    <form action ="index.php" method="POST" class= "text-center ">
                        <input type = "submit" class="btn btn-light btn-block" name= "ppal" value = "Volver al menú principal"
                        style="color:black"></input>
                    </form>
                </div>
            </div>
        </div>

<?php } else {?>
        <div class="container p-4">
            <div class="roow">
                <div class="col-mod-4">
                    <form action ="indexlog.php" method="POST" class= "text-center ">
                        <input type = "submit" class="btn btn-light btn-block" name= "ppal" value = "Volver al menú principal"
                        style="color:black"></input>
                    </form>
                </div>
            </div>
        </div>
<?php }?>

<br><br><br><br><br><br><br><br>
<?php include("includes/footer.php") ?>