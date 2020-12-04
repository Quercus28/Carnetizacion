<?php
    include("BD/db.php")
?>

<?php
    include("includes/header.php")
?>
    
    <header class="page-header font-small text-center pt-4 pb-3" style="background-color:#c79be0; color:white" >
        <a> Formulario </a>
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
                <form action="save_registry.php" method="POST">
                    <div class="form-group">
                        <input 
                            type="number" 
                            name="identificacion" 
                            class="form-control" 
                            placeholder="Número de Identificación" 
                            style = "resize:none;" 
                            required>
                    </div>
                    <div class="form-group">
                        <input 
                            type="text"
                            name="nombres" 
                            class="form-control" 
                            placeholder="Nombres" 
                            style = "resize:none;"
                            required>
                    </div>
                    <div class="form-group">
                        <input 
                            type="text"
                            name="apellidos" 
                            class="form-control" 
                            placeholder="Apellidos" 
                            style = "resize:none;"
                            required>
                    </div>
                    <div class="form-group">
                        <input 
                            type="text"
                            name="Secretaria" 
                            class="form-control" 
                            placeholder="Secretaría" 
                            style = "resize:none;"
                            required>
                    </div>     
                    <div class="form-group">
                        <input 
                            type="text"
                            name="vencimientocontrato" 
                            class="form-control" 
                            placeholder="Fecha de vencimiento del contrato" 
                            onfocus="(this.type='date')"
                            onfocusout="(this.type='text')"
                            style = "resize:none;"
                            required>
                    </div>               
                    <div class="form-group">
                        <input 
                            type="tel"
                            name="telefono" 
                            class="form-control" 
                            placeholder="Número de teléfono celular" 
                            style = "resize:none;"
                            required>
                    </div>
                    <div class="form-group">
                        <input 
                            type="email"
                            name="correoelectronico" 
                            class="form-control" 
                            placeholder="Correo electrónico" 
                            style = "resize:none;"
                            required>
                    </div>
                    <div class="form-group">
                        <input 
                            type="text"
                            name="supervisorcontrato" 
                            class="form-control" 
                            placeholder="Supervisor de contrato" 
                            style = "resize:none;"
                            required>
                    </div>
                    <div class="form-group">
                        <input 
                            type="text"
                            name="proyecto" 
                            class="form-control" 
                            placeholder="Proyecto" 
                            style = "resize:none;"
                            required>
                    </div>
                    <div class="form-group">
                        <input 
                            type="text"
                            name="programa" 
                            class="form-control" 
                            placeholder="Programa o convenio" 
                            style = "resize:none;"
                            required>
                    </div>
                    <div class="form-group">
                        <input 
                            type="text"
                            name="dependencia" 
                            class="form-control" 
                            placeholder="Dependencia" 
                            style = "resize:none;"
                            required>
                    </div>

                    <div class="form-group">
                        <input 
                            type="text"
                            name="cargo" 
                            class="form-control" 
                            placeholder="Cargo" 
                            style = "resize:none;"
                            required>
                    </div>
                    <div class="form-group">
                        <input 
                            type="text"
                            name="tipovinculacion" 
                            class="form-control" 
                            placeholder="Tipo de vinculación" 
                            style = "resize:none;"
                            required>
                    </div>


                    <input type="submit" class="btn btn-light  btn-block" name="save" value="Guardar"></input>
                    
                </form>
            </div>
        </div>
        <div class="col-mod-4">
        
        </div>
    </div>
</div>
    <div class="container p-4">
        <div class="roow">
            <div class="col-mod-4">
                <form action ="indexlog.php" method="POST" class= "text-center ">
                    <input type = "submit" class="btn btn-light btn-block" name= "ppal" value = "Volver al menú principal"  style="color:black"></input>
               </form>
            </div>
        </div>         
    </div> 




<?php        
    
    if(isset($_POST['nologin'])) {?>

        <form action ="index.php" method="POST" class= "text-center ">
        <input type = "submit" class="btn btn-light btn-block" name= "ppal" value = "Volver al menú principal"  style="color:black"></input>
        </form>

<?php   
    }    
?>    

<br><br><br><br><br><br><br><br>
<?php
    include("includes/footer.php");
?>
