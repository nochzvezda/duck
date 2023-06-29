<?php

session_start();
include "../../php-connect/connect.php";

if(isset($_POST['service_name'])) {
    $servicename = $_POST['service_name'];
    if($servicename === '') {
        unset($servicename);
    }
}

if(isset($_POST['service_title'])) {
    $servicetitle = $_POST['service_title'];
    if($servicetitle === '') {
        unset($servicetitle);
    }
}

if(isset($_POST['service_price'])) {
    $serviceprice = $_POST['service_price'];
    if($serviceprice === '') {
        unset($serviceprice);
    }
}

$servicename = trim($_POST['service_name']);
$servicetitle = trim($_POST['service_title']);
$serviceprice = trim($_POST['service_price']);

$qCreateService = "INSERT INTO `service`(`service`, `title`, `price`) VALUES ('$servicename', '$servicetitle', '$serviceprice')";
addslashes($qCreateService);
$qCreateService = mysqli_query($connect, $qCreateService) or die(mysqli_error($connect));


header("location: uslugi.php");
?>