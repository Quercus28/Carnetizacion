<?php
    include("BD/db.php");
    include("includes/header.php")
?>

<header class="page-header font-small text-center pt-4 pb-3" style="background-color:#0E8EC9; color:white">

</header>

<div class="main">
    <section class="signup">
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
        <div class="container">
            <fieldset>
                <legend>
                    Formulario de Contratista
                </legend>
                <div class="signup-content">
                    <form action="save_official.php" method="POST" id="signup-form" class="signup-form">

                        <div class="form-group">
                            <label for="in_email">Correo Electrónico*</label>
                            <input type="email" name="in_email" class="form-input" id="email" required>
                        </div>


                        <!--falta revisar este selec nuevo-->
                        <div class="form-group">
                            <label for="in_photo">¿Desea tomarse la foto?</label>
                            <div class="select-list1">
                                <select name="in_photo" id="caja" required>
                                    <option value="NG">Seleccione una opción</option>
                                    <option value="SI">Si</option>
                                    <option value="NO">No</option>
                                </select>
                            </div>
                            <label for="">- En caso de que desee y autorice usar la foto del año actual, elija la opción
                                "NO"*</label>
                        </div>
                        <!--falta revisar este selec nuevo,(deben meter en costo el valor de solo carnet 5000 o de carnet completo 6000) -->
                        <div class="form-row">
                            <div class="form-group">
                                <label for="in_carnet_type">Tipo de carnet que desea*</label>
                                <div class="select-list1">
                                    <select name="in_carnet_type" id="tipo" required>
                                        <option value="NG">Seleccione una opción de carnet que desea:</option>
                                        <option value="carnet">Solo carnet</option>
                                        <option value="completo">Carnet, porta - carnet y cinta</option>
                                        <option value="copia">Copia de solo carnet</option>
                                        <option value="copiacompleto">Copia de carnet, porta - carnet y cinta</option>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="in_cost">Costo</label>
                                <input type="number" disabled=disabled class="form-input" name="in_cost" id="caja" />



                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="in_identification">Número de cédula.*</label>
                                <input type="number" name="in_identification" class="form-input" required>
                                <label for="Cedula">Sin espacios; comas ni puntos*</label>
                            </div>

                            <div class="form-group">
                                <label for="in_phone">Número de telefónico de contacto.*</label>
                                <input type="number" name="in_phone" class="form-input" id="caja" required>
                                <label for="in_phone">- Celular*</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="in_name">Nombres*</label>
                                <input type="text" name="in_name" class="form-input" id="caja" style="resize:none;"
                                    required>
                                <label for="">- Nombre y Apellidos completos, usando mayusculas iniciales. como desea
                                    que aparezca en el carné.*</label>
                            </div>
                            <div class="form-group">
                                <label for="in_lastname">Apellidos*</label>
                                <input type="text" name="in_lastname" class="form-input" id="caja" style="resize:none;"
                                    required>
                            </div>
                        </div>

                        <!--hay que revisar este selec box-->
                        <div class="form-row">

                            <div class="form-group">
                                <label for="in_secretary">Secretaría*</label>
                                <div class="select-list1">
                                    <select name="in_secretary" id="tipo" required>
                                        <option value="NG">Seleccione la secretaría:</option>
                                        <option value="app">Agencia APP</option>
                                        <option value="concejo">Concejo de Medellin</option>
                                        <option value="dagrd">DAGRD</option>
                                        <option value="planeacion">Departamento Administrativo de Planeación</option>
                                        <option value="despacho">Despacho Alcalde</option>
                                        <option value="valorizacion">Fondo de Valorización del Municipio de Medellín
                                        </option>
                                        <option value="sapiencia">SAPIENCIA</option>
                                        <option value="comunicaciones">Secretaría de Comunicaciones</option>
                                        <option value="cultura">Secretaría de Cultura Ciudadana</option>
                                        <option value="desarrollo">Secretaria de Desarrollo Económico</option>
                                        <option value="educacion">Secretaría de Educación</option>
                                        <option value="evaluacion">Secretaría de Evaluacion y Control</option>
                                        <option value="humana">Secretaría de Gestión Humana y Servicio a la Ciudadanía
                                        </option>
                                        <option value="control">Secretaría de Gestión y Control Territorial</option>
                                        <option value="hacienda">Secretaría de Hacienda</option>
                                        <option value="inclusion">Secretaría de Inclusión Social, Familia y Derechos
                                            Humanos</option>
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
                            </div>



                            <div class="form-group">
                                <label for="in_supervisor">Supervisor del contrato.*</label>
                                <input type="text" class="form-input" name="in_supervisor" id="caja"
                                    style="resize:none;" required>
                                <label for="">- Esta información sera verificada.*</label>

                            </div>
                        </div>

                        <div class="form-row">

                            <div class="form-group form-icon">
                                <label for="in_expiration_date">Fecha de vencimiento del contrato.*</label>
                                <input type="date" class="form-input" name="in_expiration_date" id="birth_date"
                                    style="resize:none;" required>
                            </div>


                            <div class="form-group">
                                <label for="in_program">Proyecto, programa o convenio.*</label>
                                <input type="text" class="form-input" name="in_program" id="caja" style="resize:none;"
                                    required>


                            </div>
                        </div>





                        <div class="form-row">
                            <!--<div class="form-group">
                                <input type="text" name="in_photo_code" class="form-control"
                                    placeholder="Código de foto" style="resize:none;" required>
                            </div>-->
                            <div class="form-group">
                                <label for="in_photo_code">Código de Foto</label>
                                <input type="text" name="in_photo_code" class="form-input" id="caja"
                                    style="resize:none;" required>
                            </div>
                            <div class="form-group">
                                <label for="in_pay_method">Seleccione el Médoto de Pago*</label>
                                <div class="select-list1">
                                    <select name="in_pay_method" id="tipo" required>
                                        <option value="NG">Método de pago deseado</option>
                                        <option value="efectivo">Pago en Efectivo</option>
                                        <option value="qr">Pago con Código QR</option>
                                        <option value="transferencia">Pago con Transferencia Bancaria</option>
                                        <option value="credito">Pago con Tarjeta de Crédito</option>
                                        <option value="pse">Pago con PSE</option>
                                        <option value="consingacion">Pago con Consignación Bancaria</option>
                                        <option value="otros">Otros</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <!--  <input type="submit" class="btn btn-light  btn-block" name="save" value="Guardar"></input> -->
                            <input type="submit" name="save" id="guardar" class="form-submit" value="Guardar"></input>
                        </div>
                    </form>
                </div>
        </div>
</div>
</div>
</section>
</div>
<div class="container p-4">
    <div class="roow">
        <div class="col-mod-4">
            <form action="index.php" method="POST" class="text-center ">
                <input type="submit" class="btn btn-light btn-block" name="ppal" value="Volver al menú principal"
                    style="color:black"></input>
            </form>
        </div>
    </div>
</div>

<?php
    if(isset($_POST['nologin'])) {?>
<div class="container p-4">
    <div class="roow">
        <div class="col-mod-4">
            <form action="indexlog.php" method="POST" class="text-center ">
                <input type="submit" class="btn btn-light btn-block" name="ppal" value="Volver al menú principal"
                    style="color:black"></input>
            </form>
        </div>
    </div>
</div>

<?php } ?>

<br><br><br><br><br><br><br><br>
<?php include("includes/footer.php") ?>