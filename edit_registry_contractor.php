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

<div class="main">
    <section class="signup">
        <div class="container">    

            <div>
                <div class="signup-form">
                    <div class="col-mod-4">
                            <form class = "register-form" action="update_contractor.php?id=<?php echo $_GET['id'];?>" method="POST">
                            <br>
                                <h5>Identificación</h5>
                                <div class="form-group">
                                    <label for="cc">
                                    <i class="zmdi zmdi-account-box material-icons-name"></i>
                                    </label>
                                        <input
                                            type="text"
                                            name="id"
                                            value="<?php echo $id?>"
                                            placeholder="Tipo de vinculación"
                                            style = "resize:none;">
                                </div>
                                <h5>Nombres</h5>
                                <div 
                                class="form-group">
                                <label for="nombre">
                                <i class="zmdi zmdi-account material-icons-name">
                                </i>
                                </label>
                                <input
                                        type="text"
                                        name="name"
                                        value="<?php echo $name?>"
                                        placeholder= "Nombres"
                                        style = "resize:none;" required>
                                </div>
                                <h5>Apellidos</h5>
                                <div class="form-group">
                                    <label for="apellidos">
                                    <i class="zmdi zmdi-account-o material-icons-name">
                                    </i>
                                    </label>
                                    <input
                                        type="text"
                                        name="lastname"
                                        value= "<?php echo $lastname?>"
                                        placeholder="Apellidos"
                                        style = "resize:none;">
                                </div>
                                <h5>Correo Electrónico</h5>
                                <div class="form-group">
                                <label for="correo">
                                <i class="zmdi zmdi-email material-icons-name">
                                </i>
                                </label>
                                    <input
                                        type="email"
                                        name="email"
                                        value= "<?php echo $email?>"
                                        placeholder="Email"
                                        style = "resize:none;">
                                </div>

                                <h5>Teléfono Celular</h5>
                                <div class="form-group">
                                <label for="celular">
                                <i class="zmdi zmdi-phone material-icons-name">
                                </i>
                            </label>
                                    <input
                                        type="number"
                                        name="phone"
                                        value="<?php echo $phone?>"
                                        placeholder="Número telefonico"
                                        style = "resize:none;"
                                        >
                                </div>

                                <h5>Cargo</h5>
                                <div class="form-group">
                                <label for="nombre">
                                <i class="zmdi zmdi-account material-icons-name">
                                </i>
                                </label>
                                    <input
                                        type="text"
                                        name="jobTitle"
                                        value="<?php echo $job_title?>"
                                        placeholder="Cargo"
                                        style = "resize:none;">
                                </div>

                                <h5>Secretaría</h5>
                                <div class="form-group">
                                <label for="nombre">
                                <i class="zmdi zmdi-account material-icons-name">
                                </i>
                                </label>    
                                    <input
                                        type="text"
                                        name="secretary"
                                        value="<?php echo $secretary?>"
                                        placeholder="Secretaría"
                                        style = "resize:none;">
                                </div>

                                <h5>Supervisor</h5>
                                <div class="form-group">
                                <label for="in_supervisor">
                                <i class="zmdi zmdi-accounts-alt material-icons-name">
                                </i>
                            </label>
                                    <input
                                        type="text"
                                        name="supervisor"
                                        value="<?php echo $supervisor?>"
                                        placeholder="Supervisor"
                                        style = "resize:none;">
                                </div>

                                <h5>Proyecto</h5>
                                <div class="form-group">
                                <label for="in_project">
                                <i class="zmdi zmdi-folder material-icons-name">
                                </i>
                            </label>
                                    <input
                                        type="text"
                                        name="project"
                                        value="<?php echo $project?>"
                                        placeholder="Proyecto"
                                        style = "resize:none;">
                                </div>
                                                                                         <h5>Codigo de la foto</h5>
                                <div class="form-group">
                                <label for="nombre">
                                <i class="zmdi zmdi-account material-icons-name">
                                </i>
                                </label>
                                    <input
                                        type="text"
                                        name="photoCode"
                                        value="<?php echo $photoCode?>"
                                        placeholder="Codigo de la foto"
                                        style = "resize:none;">
                                </div>
                                
                                <h5>Tipo de carné</h5>
                                <div class="form-group">
                                <label for="nombre">
                                <i class="zmdi zmdi-folder material-icons-name">
                                </i>
                                </label>
                                    <input
                                        type="text"
                                        name="carnetType"
                                        value="<?php echo $carnetType?>"
                                        placeholder="Tipo de carné"
                                        style = "resize:none;">
                                </div>
                                <h5>Costo</h5>
                                <div class="form-group">
                                <label for="nombre">
                                <i class="zmdi zmdi-money material-icons-name">
                                </i>
                                </label>
                                    <input
                                        type="text"
                                        name="cost"
                                        value="<?php echo $Cost?>"
                                        placeholder="Costo"
                                        style = "resize:none;">
                                </div>

                                <h5>Metodo de pago</h5>
                                <div class="form-group">
                                <label for="nombre">
                                <i class="zmdi zmdi-money material-icons-name">
                                </i>
                                </label>
                                    <input
                                        type="text"
                                        name="payMethod"
                                        value="<?php echo $paymethod?>"
                                        placeholder="Metodo de pago"
                                        style = "resize:none;">
                                </div>

                                <h5>Estado de pago</h5>
                                <div class="form-group">
                                <label for="nombre">
                                <i class="zmdi zmdi-money material-icons-name">
                                </i>
                                </label>
                                    <input
                                        type="text"
                                        name="payStatus"
                                        value="<?php echo $payStatus?>"
                                        placeholder="Tipo de vinculación"
                                        style = "resize:none;">
                                </div>

                                <h5>Dia de atencion</h5>
                                <div class="form-group">
                                <label for="nombre">
                                <i class="zmdi zmdi-calendar material-icons-name">
                                </i>
                                </label>
                                    <input
                                        type="date"
                                        name="attentionDate"
                                        value="<?php echo $attentionDateTime?>"
                                        placeholder="Tipo de vinculación"
                                        onfocus="(this.type='date')"
                                        onfocusout="(this.type='text')"
                                        style = "resize:none;">
                                </div>

                                <h5>Fecha de la foto</h5>
                                <div class="form-group">
                                <label for="nombre">
                                <i class="zmdi zmdi-calendar material-icons-name">
                                </i>
                                </label>
                                    <input
                                        type="text"
                                        name="photoDate"
                                        value="<?php echo $photoDate?>"
                                        placeholder="Fecha de la foto"
                                        onfocus="(this.type='date')"
                                        onfocusout="(this.type='text')"
                                        style = "resize:none;">
                                </div>

                                <h5>Fecha de elaboración</h5>
                                <div class="form-group">
                                <label for="nombre">
                                <i class="zmdi zmdi-calendar material-icons-name">
                                </i>
                                </label>
                                    <input
                                        type="date"
                                        name="elaborationDate"
                                        value="<?php echo $elaborationDate?>"
                                        placeholder="Fecha de elaboración"
                                        onfocus="(this.type='date')"
                                        onfocusout="(this.type='text')"
                                        style = "resize:none;">
                                </div>

                                <h5>Fecha de entrega</h5>
                                <div class="form-group">
                                <label for="nombre">
                                <i class="zmdi zmdi-calendar material-icons-name">
                                </i>
                                </label>
                                    <input
                                        type="date"
                                        name="deliveryDate"
                                        value="<?php echo $elaborationDate?>"
                                        placeholder="Fecha de entrega"
                                        onfocus="(this.type='date')"
                                        onfocusout="(this.type='text')"
                                        style = "resize:none;">
                                </div>

                                <h5>Fecha de vencimiento</h5>
                                <div class="form-group">
                                <label for="nombre">
                                <i class="zmdi zmdi-calendar material-icons-name">
                                </i>
                                </label>
                                    <input
                                        type="date"
                                        name="expirationDate"
                                        value="<?php echo $expirationDate?>"
                                        placeholder="Fecha de vencimiento"
                                        onfocus="(this.type='date')"
                                        onfocusout="(this.type='text')"
                                        style = "resize:none;">
                                </div>

                                <h5>Estado del carné</h5>
                                <div class="form-group">
                                <label for="nombre">
                                <i class="zmdi zmdi-time material-icons-name">
                                </i>
                                </label>
                                    <input
                                        type="text"
                                        name="carnetStatus"
                                        value="<?php echo $carnetStatus?>"
                                        placeholder="Estado del carné"
                                        style = "resize:none;">
                                </div>

                                <h5>Observación</h5>
                                <div class="form-group">
                                <label for="nombre">
                                <i class="zmdi zmdi-label material-icons-name">
                                </i>
                                </label>
                                    <input
                                        type="text"
                                        name="observation"
                                        value="<?php echo $observation?>"
                                        placeholder="Observación"
                                        style = "resize:none;">
                                </div>
                                <input type="submit" class="btn btn-light  btn-block" name="update" value="Guardar"></input>
                                <a href="delete_contractor.php?id=<?php echo $id?>" class="btn btn-light btn-block" title="Eliminar">Eliminar</a>
                            </form>
                            <!-- boton de devolver a listar -->
                            
                    <div class="col-mod-4">
                        <form action ="listar_contractor.php" method="POST" class= "register-form">
                            <input type = "submit" class="btn btn-light btn-block" name= "ppal" value = "Volver al listado"
                            style="color:black"></input>
                        </form>
                    </div>
                
            <!-- cierre boton de devolver a listar -->
            <!-- opcion de carga de imagen-->
            <div>
    <form action="upload.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="image"/>
        <button type="submit" >Subir imagen</button>
    </form>
</div>

            <!-- cierre de opcion de imagen -->
                    </div>        
                </div>
            </div>
        </div>    
    </section>
</div>



               
<br><br>



<?php

    include("includes/footer.php");
?>
