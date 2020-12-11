<?php
    include("includes/header.php");
?>

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

    <div class="container rezi2">
        <div class="ppal">
            <div>
                <h2 class="ftitle">  Ingresar </h2> 
                <figure>
                    <img src="img\escudoAlcaldia.png" alt="escudo alcaldia">
                </figure>
            </div>
            <div class="spcpassword">
                <form action="login.php" method="POST">
                    <input
                        type="password"
                        name="password"
                        class="form-control"
                        placeholder="Constraseña"
                        
                        required>
                    
                    <div class="password">
                        <input class="btnsub rezi" name="log" type="submit" value="Entrar">
                        <input class="btnsub rezi" type="submit" name="return" value="Atrás" onclick="history.go(-1);">
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php include("includes/footer.php") ?>