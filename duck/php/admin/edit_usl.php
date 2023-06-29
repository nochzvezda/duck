<?php     
    include "../../php-connect/connect.php";
    session_start();

    if(isset($_GET['idA'])){
        $service = $_GET['idA'];
    }

    if(isset($_POST['service_name']))
        $servicename = $_POST['service_name'];
        if($servicename === ''){
            unset($servicename);
        }
        if(isset($_POST['service_title']))
            $servicetitle = $_POST['service_title'];
            if($servicetitle === ''){
                unset($servicetitle);
            }
            if(isset($_POST['service_title'])){
                $serviceprice = $_POST['service_title'];
                if($serviceprice === ''){
                    unset($serviceprice);
                }

        else{
            $servicename = trim($_POST['service_name']);
            $servicetitle = trim($_POST['service_title']);
            $serviceprice = trim($_POST['service_price']);

            $queryService = "UPDATE `service` SET `service` = '$servicename',`title` = '$servicetitle',`price` = '$serviceprice' WHERE id_service='$service'";
            addslashes($queryService);
            $resService = mysqli_query($connect, $queryService) or die (mysqli_error($connect));
            header("location: uslugi.php");
        }
    }
?>