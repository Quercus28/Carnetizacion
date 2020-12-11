<?php
    include("BD/db.php");
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
                    <div class="col-mod-4">
                        <?php if(isset($_SESSION['message'])) { ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <?= $_SESSION['message']  ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php } ?>
                    </div>
                    <form action="save_official.php" method="POST" class="register-form" id="register-form">
                        <h5>Número de Identificación</h5>
                        <div class="form-group">
                            <label for="cc">
                                <i class="zmdi zmdi-account-box material-icons-name"></i>
                            </label>
                            <input
                                type="number"
                                id="cc"
                                name="in_identification"
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
                                name="in_name"
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
                                name="in_lastname"
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
                                name="in_email"
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
                                name="in_phone"
                                style = "resize:none;"
                                required
                            >
                        </div>
                        <h5>Secretaría</h5>
                        <div class="form-group">
                            <select name="in_secretary" class="form-control" style = "resize:none;" required>
                                <option selected><b>Seleccione una opción</b></option>
                                    <option value="app">Agencia APP</option>
                                    <option value="concejo">Concejo de Medellin</option>
                                    <option value="dagrd">DAGRD</option>
                                    <option value="planeacion">Departamento Administrativo de Planeación</option>
                                    <option value="despacho">Despacho Alcalde</option>
                                    <option value="valorizacion">Fondo de Valorización del Municipio de Medellín</option>
                                    <option value="sapiencia">SAPIENCIA</option>
                                    <option value="comunicaciones">Secretaría de Comunicaciones</option>
                                    <option value="cultura">Secretaría de Cultura Ciudadana</option>
                                    <option value="desarrollo">Secretaria de Desarrollo Económico</option>
                                    <option value="educacion">Secretaría de Educación</option>
                                    <option value="evaluacion">Secretaría de Evaluacion y Control</option>
                                    <option value="humana">Secretaría de Gestión Humana y Servicio a la Ciudadanía</option>
                                    <option value="control">Secretaría de Gestión y Control Territorial</option>
                                    <option value="hacienda">Secretaría de Hacienda</option>
                                    <option value="inclusion">Secretaría de Inclusión Social, Familia y Derechos Humanos</option>
                                    <option value="infraestructura">Secretaría de Infraestructura Física</option>
                                    <option value="juventud">Secretaría de la Juventud</option>
                                    <option value="mujeres">Secretaría de las Mujeres</option>
                                    <option value="ambiente">Secretaría de Medio Ambiente</option>
                                    <option value="movilidad">Secretaría de Movilidad</option>
                                    <option value="participacion">Secretaría de Participación Ciudadana</option>
                                    <option value="salud">Secretaría de Salud</option>
                                    <option value="seguridad">Secretaría de Seguridad y Convivencia</option>
                                    <option value="suministros">Secretaría de Suministros y Servicios</option>
                                    <option value="general">Secretaría General</option>
                                    <option value="privada">Secretaría Privada</option>
                            </select>
                        </div>
                        <h5>Cargo</h5>
                        <div class="form-group">
                            <label for="cargo">
                                <i class="zmdi zmdi-accounts-alt material-icons-name">
                                </i>
                            </label>
                            <input
                                type="text"
                                id="cargo"
                                name="in_job_title"
                                style = "resize:none;"
                                required
                            >
                        </div>
                        <h5>¿Desea tomarse una foto?</h5>
                        <div class="form-group ">
                            <select name="in_photo_code" class="form-control" style = "resize:none;"  required>
                            <option selected><b>Seleccione una opción</b></option>
                                    <option value="C">Sí</option>
                                    <option value="FA">No</option>
                            </select>
                        </div>
                        <h5>Opción de carnet</h5>
                        <div class="form-group ">
                                <select name="in_carnet_type" class="form-control" style = "resize:none;"  required>
                                    <option selected><b>Seleccione una opción</b></option>
                                        <option value="carnet">Solo carnet</option>
                                        <option value="completo">Carnet, porta - carnet y cinta</option>
                                        <option value="copia">Copia de solo carnet</option>
                                        <option value="copiacompleto">Copia de carnet, porta - carnet y cinta</option>
                                </select>
                        </div>
                        <h5>Método de pago</h5>
                        <div class="form-group ">
                                <select name="in_pay_method" class="form-control" style = "resize:none;"  required>
                                    <option selected><b>Seleccione una opción</b></option>
                                        <option value="consignación">consignación</option>
                                        <option value="tarjeta de credito">tarjeta de credito</option>
                                        <option value="tarjeta debito">tarjeta debito</option>
                                        <option value="efectivo">efectivo</option>
                                </select>
                        </div>
                        <h5>Costo</h5>
                        <div class="form-group">
                            <label for="costo">
                                <i class="zmdi zmdi-money material-icons-name">
                                </i>
                            </label>
                            <input
                                type="number"
                                id="costo"
                                name="in_cost"
                                style = "resize:none;"
                                required
                            >
                        </div>
                        <input type="submit" class="btn btn-primary  btn-block" name="save" value="Guardar"></input>
                    </form>
                    <?php
                        if(isset($_POST['nologin'])) {?>
                            <form action ="index.php" method="POST" class= "text-center ">
                                <input type = "submit" class="btn btn-light btn-block" name= "ppal"
                                value = "Volver al menú principal" style="color:black"></input>
                            </form>
                        <?php } else {?>
                            <form action ="indexlog.php" method="POST" class= "text-center ">
                                <input type = "submit" class="btn btn-light btn-block" name= "ppal"
                                value = "Volver al menú principal" style="color:black"></input>
                            </form>
                    <?php }?>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include("includes/footer.php") ?>