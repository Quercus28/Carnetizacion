<?php
    include("BD/db.php");

    if(isset($_POST['update']))
    {
            $id = $_GET['id'];
            $name = $_POST['name'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $secretary = $_POST['secretary'];
            $project = $_POST['project'];
            $jobTitle = '';
            $supervisor = '';
            $photoCode = '';
            $carnetType = '';
            $cost = '';
            $date = '2020-11-11';

        $query = "UPDATE contractor SET Identification = '$id', Name = '$name', LastName = '$lastname',
        Email = '$email', Phone = '$phone', Secretary = '$secretary', Project =  '$project',
        JobTitle = '$jobTitle', Supervisor = '$supervisor', PhotoCode = '$photoCode', CarnetType = '$carnetType',
        Cost = '$cost', ExpirationDate = '$date'  WHERE Identification = '$id'";

        var_dump($query);

        mysqli_query($conn, $query);
        header('Location:listar_contractor.php');
    }
?>