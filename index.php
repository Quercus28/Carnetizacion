<?php include("includes/header.php"); ?>

<div class="container">
    <div class="ppal">
        <div class="btns">
            <div class="form-group form-button">

                <form action="form_servidor.php" method="POST">
                    <input type="submit" name="nologin" value="Formulario Funcionario" class="btn"></input>
                </form>

                <form action="form_contratista.php" method="POST">
                    <input type="submit" name="nologin" value="Formulario Contratista" class="btn"></input>
                </form>

                <form action="login.php" method="POST">
                    <input type="submit" value="Ingreso como administrador" src="images/signup-image.jpg" alt="sing up image" class="btn"></input>
                </form>
            </div>
        </div>
        <div class="imagen">
            <figure>
                <img src="img\escudoAlcaldia.png" alt="escudo alcaldia">
            </figure>
        </div>
    </div>
</div>


<?php include("includes/footer.php"); ?>