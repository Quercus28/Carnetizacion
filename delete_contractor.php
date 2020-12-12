<?php

    include("BD/db.php");

    if(isset($_GET['id']))
    {
        $id = $_GET['id'];


        $query = "DELETE FROM id15421000_id15421000_empcarnet.contractor WHERE Identification = $id";
        $result = mysqli_query($conn, $query);

        if(!$result)
        {
            die("Guardado no exitoso");
            header('Location:listar_contractor.php');
            exit();
        }

        header('Location:listar_contractor.php');
        exit();
    }

?>