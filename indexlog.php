<?php
    include("includes/header.php")


?>

<div class="container">
    <div class="ppal">
        <div class="btns">
            <div class="form-group form-buttom">
                <form action ="form_servidor.php"  method="POST">
                    <input type = "submit" name= "login" value = "formulario Funcionario" class="btn"></input>
                </form>
            </div>

            <div class="form-group form-buttom">
                <form action ="form_contratista.php"  method="POST">
                    <input type = "submit" name= "login" value = "formulario Contratista" class="btn"></input>
                </form>
            </div>


            <div class="form-group form-buttom">
                <form action ="list_official.php"  method="POST" >
                    <input type = "submit" name= "list" value = "Listar Funcionarios" class="btn"></input>
                </form>
            </div>

            <div class="form-group form-buttom">
                <form action ="listar_contractor.php"  method="POST" >
                    <input type = "submit" name= "list" value = "Listar Contratistas" class="btn"></input>
                </form>
            </div>

            <div class="form-group form-buttom">
                <form action ="index.php"  method="POST" >
                    <input type = "submit" name= "list" value = "Cerrar sesión"  class="btn"></input>
                </form>
            </div>

        </div>
        <div class="imagen2">
            <figure>
                <img src="img\escudoAlcaldia.png" alt="escudo alcaldia">
            </figure>
        </div>
    </div>
</div>



<?php
    include("includes/footer.php");
?>
