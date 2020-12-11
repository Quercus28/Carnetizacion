<?php
    include("BD/db.php");

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $job_title = $_POST['job_title'];
        $secretary = $_POST['secretary'];
        $photo_code = $_POST['photo_code'];
        $carnet_type = $_POST['carnet_type'];
        $cost = $_POST['cost'];
        $pay_method = $_POST['pay_method'];
        $pay_status = $_POST['pay_status'];
        $attention_date_time = $_POST['attention_date_time'];
        $photo_date = $_POST['photo_date'];
        $elaboration_date = $_POST['elaboration_date'];
        $delivery_date = $_POST['delivery_date'];
        $carnet_status = $_POST['carnet_status'];
        $observations = $_POST['observations'];

        $query = "UPDATE official SET Identification = '$id', Name = '$name', LastName = '$lastname',
        Email = '$email', Phone = '$phone', JobTitle = '$job_title', Secretary = '$secretary',
        PhotoCode = '$photo_code', CarnetType = '$carnet_type', Cost = '$cost', PayMethod = '$pay_method',
        PayStatus = '$pay_status', AttentionDateTime = '$attention_date_time', PhotoDate = '$photo_date',
        ElaborationDate = '$elaboration_date', DeliveryDate = '$delivery_date', CarnetStatus = '$carnet_status',
        Observations = '$observations' WHERE Identification = '$id'";

        mysqli_query($conn, $query);

        header('Location:list_official.php');
        exit();
    }
?>