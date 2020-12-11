<?php include("includes/header.php"); ?>

<div class="container p-4 text-center">
    <form action="form_official.php" method="POST">
        <input type="submit" name="nologin" value="Formulario Funcionario"
            style="background-color:#DCDCDC; border-color:black; color:black" class="btn btn-lg"></input>
    </form>
    <form action="form_contractor.php" method="POST">
        <input type="submit" name="nologin" value="Formulario Contratista"
            style="background-color:#DCDCDC; border-color:black; color:black" class="btn btn-lg"></input>
    </form>
    <form action="login.php" method="POST">
        <input type="submit" value="Ingresar como administrador"
            style="background-color:#DCDCDC; border-color:black; color:black" class="btn btn-lg"></input>
    </form>
</div>
<!-- Hola, Arenas -->

<?php include("includes/footer.php"); ?>