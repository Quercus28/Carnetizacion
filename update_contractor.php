<?php
    include("BD/db.php");

    if(isset($_POST['update']))
    {
            $id = $_GET['id'];
            $name = $_POST['name'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $jobTitle = $_POST['jobTitle'];
            $secretary = $_POST['secretary'];
            $supervisor = $_POST['supervisor'];
            $project = $_POST['project'];
            $photoCode = $_POST['photoCode'];
            $carnetType = $_POST['carnetType'];
            $cost = $_POST['cost'];
            $payMethod = $_POST['payMethod'];
            $payStatus = $_POST['payStatus'];
            $attentionDate = $_POST['attentionDate'];
            $photoDate = $_POST['photoDate'];
            $elaborationDate = $_POST['elaborationDate'];
            $deliveryDate = $_POST['deliveryDate'];
            $expirationDate = $_POST['expirationDate'];
            $carnetStatus = $_POST['carnetStatus'];
            $observation = $_POST['observation'];

        $query = "UPDATE contractor SET Identification = '$id', Name = '$name', LastName = '$lastname', Email = '$email', Phone = '$phone', JobTitle = '$jobTitle', Secretary = '$secretary', Supervisor = '$supervisor', Project =  '$project', PhotoCode = '$photoCode', CarnetType = '$carnetType', Cost = '$cost', PayMethod = '$payMethod', PayStatus = '$payStatus', AttentionDateTime = '$attentionDate', PhotoDate = '$photoDate', ElaborationDate = '$elaborationDate', DeliveryDate = '$deliveryDate', ExpirationDate = '$expirationDate', CarnetStatus = '$carnetStatus', Observations = '$observation'  WHERE Identification = '$id'";

        var_dump($query);

        mysqli_query($conn, $query);
        header('Location:listar_contractor.php');
    }
?>
