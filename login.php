<?php
    include("includes/header.php");
?>

<header class="page-header font-small text-center pt-4 pb-3" style="background-color:#0E8EC9; color:white align-items:center" >
    <a> Ingreso Como Administrador </a>
</header>

<?php
    if(isset($_POST['log']))
    {
        if ($_POST['password'] != "1234")
        {
?>
            <script>
                alert('La contraseña es incorrecta');
            </script>
<?php
        } else{
?>
        <?php header('Location: indexlog.php');?>
<?php       }
    }
?>
   <style>
        .head{
            margin: 0;
        }
        .center{
            margin: 100px 450px;
        }
    </style>

    <div class="container p- 4">
        <div class="row">
            <div class="center" style="align:center">
                <div class="card card-body" >
                    <form action="login.php" method="POST">
                        <legend>Ingresar:</legend>
                        <br>
                        <input
                            type="password"
                            name="password"
                            class="form-control"
                            placeholder="Constraseña"
                            style = "resize:none;"
                            required>
                        <br>
                        <input name="log" type="submit" value="Entrar">
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include("includes/footer.php") ?>