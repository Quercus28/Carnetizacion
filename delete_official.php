<?php

    include("BD/db.php");

    if(isset($_GET['id']))
    {
        $id = $_GET['id'];


        $query = "DELETE FROM id15421000_empcarnet . official WHERE Identification = $id ";
        $result = mysqli_query($conn, $query);

        if(!$result)
        {
            die("Guardado no exitoso");
        }

        header('Location:list_official.php');
        exit();
    }

?>