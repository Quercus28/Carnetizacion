<?php
    include("BD/db.php");
    include("includes/header.php")
?>

<header class="page-header font-small text-center pt-4 pb-3" style="background-color:#0E8EC9; color:white" >
   
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
                Formulario de Servidor Publico
            </legend> 
            <div class="signup-content">
                <form action="save_official.php" method="POST" id="signup-form" class="signup-form">
                        
                <div class="form-group">
                            <label for="email">Correo Electrónico*</label>
                            <input 
                            type="email" 
                            name="in_email" 
                            class="form-control"
                            id="email"
                            required>
                        </div>  
                        
                        
                        <!--falta revisar este selec nuevo-->
                        <div class="form-group"> 
                            <label for="caja">¿Desea tomarse la foto?</label>
                            <div class="select-list1">
                                <select name="caja" id="caja" required>
                                    <option value="NG">Seleccione una opción</option>
                                    <option value="SI">Si</option>
                                    <option value="NO">No</option>
                                </select>
                            </div>
                            <label for="">- En caso de que desee y autorice usar la foto del año actual, elija la opción "NO"*</label>
                        </div>
                         <!--falta revisar este selec nuevo-->
                        <div class="form-row">
                            <div class="form-group">
                                <label for="tipo">Tipo de carnet que desea*</label>
                                <div class="select-list1">
                                    <select name="tipo" id="tipo" required>
                                        <option value="NG">Seleccione una opción de carnet que desea:</option>
                                        <option value="carnet">Solo carnet</option>
                                        <option value="completo">Carnet, porta - carnet y cinta</option>
                                        <option value="copia">Copia de solo carnet</option>
                                        <option value="copiacompleto">Copia de carnet, porta - carnet y cinta</option>
                                    </select>
                                </div>
                            </div>

                            
                            <div class="form-group">
                                <label for="Costo">Costo</label>
                                <input type="text" disabled=disabled class="form-input" name="Costo" id="caja"/>
                                


                            </div>
                        </div>

                <div class="form-group" >
                            <label for="in_identification">Número de Identificación</label>
                            <input
                                type="number"
                                name="in_identification"
                                class="form-input"
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
                                type="number"
                                name="in_phone"
                                class="form-control"
                                placeholder="Número de teléfono celular"
                                style = "resize:none;"
                                required>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                         <label for="tipo">Cargo*</label>
                            <div class="select-list1">
                                <select name="in_job_title" id="tipo" required>
                                            <option value="NG">Seleccione el Cargo:</option>
                                            <option value="agente">Agente de Tránsito</option>
                                            <option value="asesor">Asesor</option>
                                            <option value="protocolo">Asesor de Protocolo</option>
                                            <option value="administrativo">Auxiliar Administrativo</option>
                                            <option value="generales">Auxiliar de Servicios Generales</option>
                                            <option value="trituradora">Ayudante Trituradora</option>
                                            <option value="bombero">Bombero</option>
                                            <option value="celador">Celador</option>
                                            <option value="comandante">Comandante de Tránsito</option>
                                            <option value="comisario">Comisario de Familia</option>
                                            <option value="comunicador">Comunicador</option>
                                            <option value="concejal">Concejal</option>
                                            <option value="conductor">Conductor T.P.</option>
                                            <option value="contratista">Contratista-Asesor</option>
                                            <option value="coordinador">Coordinador</option>
                                            <option value="corregidora">Corregidora</option>
                                            <option value="curador">Curador</option>
                                            <option value="ejecutivo">Director Ejecutivo</option>
                                            <option value="general">Director General</option>
                                            <option value="tecnico">Director Técnico</option>
                                            <option value="gerente">Gerente</option>
                                            <option value="centro">Gerente del Centro</option>
                                            <option value="mision">Empleado en Misión</option>
                                            <option value="policia">Inspector de Policía Urbano</option>
                                            <option value="policia1acat">Inspector de Policía Urbano 1A CAT</option>
                                            <option value="programa">Líder de Programa</option>
                                            <option value="proyecto">Líder de Proyecto</option>
                                            <option value="maestro">Maestro T.C.</option>
                                            <option value="minero">Minero</option>
                                            <option value="obrero">Obrero</option>
                                            <option value="construccion">Obrero de Construcción</option>
                                            <option value="vias">Obrero de Vías</option>
                                            <option value="operario">Operario</option>
                                            <option value="practicante">Practicante</option>
                                            <option value="excelencia">Practicante De Excelencia</option>
                                            <option value="especializado">Profesional Especializado</option>
                                            <option value="universitario">Profesional Universitario</option>
                                            <option value="secretaria">Secretaría</option>
                                            <option value="secretariadespacho">Secretaría de Despacho</option>
                                            <option value="secretario">Secretario</option>
                                            <option value="secretariodespacho">Secretario de Despacho</option>
                                            <option value="subsecretaria">Subsecretaría de Despacho</option>
                                            <option value="subsecretario">Subsecretario de Despacho</option>
                                            <option value="supervisor">Supervisor de Tránsito</option>
                                            <option value="tecnicoadministrativo">Técnico Administrativo</option>
                                            <option value="salud">Técnico Área de Salud</option>
                                            <option value="operativo">Técnico Operativo</option>
                                        </select>
                                </div>
                            </div>
                    
                        <div class="form-group">
                        <label for="tipo">Secretaría*</label>
                            <div class="select-list1">
                                <select name="in_secretary" id="tipo" required>
                                            <option value="NG">Seleccione la secretaría:</option>
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
                        <input type="submit" class="btn btn-light  btn-block" name="save" value="Guardar"></input>
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
                <form action ="index.php" method="POST" class= "text-center ">
                    <input type = "submit" class="btn btn-light btn-block" name= "ppal" value = "Volver al menú principal"  style="color:black"></input>
               </form>
            </div>
        </div>
    </div>

<?php
    if(isset($_POST['nologin'])) {?>
        <div class="container p-4">
            <div class="roow">
                <div class="col-mod-4">
                    <form action ="indexlog.php" method="POST" class= "text-center ">
                        <input type = "submit" class="btn btn-light btn-block" name= "ppal" value = "Volver al menú principal"  style="color:black"></input>
                    </form>
                </div>
            </div>
        </div>

<?php } ?>

<br><br><br><br><br><br><br><br>
<?php include("includes/footer.php") ?>