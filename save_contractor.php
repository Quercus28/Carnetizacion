<?php

    include("BD/db.php");

    if(isset($_POST['save']))
    {
        $identification = $_POST['in_identification'];
        $name = $_POST['in_name'];
        $lastname = $_POST['in_lastname'];
        $email = $_POST['in_email'];
        $phone = $_POST['in_phone'];
        $job_title = $_POST['in_job_title'];
        $secretary = $_POST['in_secretary'];
        $supervisor = $_POST['in_supervisor'];
        $project = $_POST['in_project'];
        $photo_code = $_POST['in_photo_code'];
        $carnet_type = $_POST['in_carnet_type'];
        $cost = $_POST['in_cost'];
        $pay_method = $_POST['in_pay_method'];
        $pay_status = $_POST['in_pay_status']; 
        $attentionDateTime = $_POST['in_attentionDataTime'];
        $photoDate = $_POST['in_photoDate']; 
        $elaborationDate = $_POST['in_elabotarionDate']; 
        $deliveryDate = $_POST['in_deliveryDate'];
        $deliveryDate = $_POST['in_ExpirationDate'];
        $carnet_status = $_POST['in_status']; 
        $deliveryDate = $_POST['in_observation'];


        $query = "INSERT INTO contractor (Identification, Name, LastName, Email, Phone, JobTitle, Secretary, Project, PhotoCode, CarnetType, Cost, PayMethod, PayStatus, CarnetStatus) VALUES ('$identification', '$name',
        '$lastname', '$email', '$phone', '$job_title', '$secretary', '$project', '$photo_code', '$carnet_type', '$cost',
        '$pay_method', '$pay_status', '$carnet_status')";
        var_dump($query);

        $result = mysqli_query($conn, $query);
        var_dump($result);

        if(!$result)
        {
            die("Guardado no exitoso");
        }

        $_SESSION['message'] = 'El registro se ha guardado con éxito';
        $_SESSION['message_type'] = 'success';

        header('Location: form_contractor.php');
        exit();
    }

?>