<?php 
    session_start();
    include "../php-connect/connect.php";

    if(isset($_POST['city1'])){
        $city1 = $_POST['city1'];
        if($city1 ===''){
            unset($city1);
        }
    }


    if(isset($_POST['city2'])){
        $city2 = $_POST['city2'];
        if($city2 ===''){
            unset($city2);
        }
    }

    if(isset($_POST['box'])){
        $box = $_POST['box'];
        if($box ===''){
            unset($box);
        }
    }

    if(isset($_POST['name'])){
        $name = $_POST['name'];
        if($name ===''){
            unset($name);
        }
    }

    if(isset($_POST['email'])){
        $email = $_POST['email'];
        if($email ===''){
            unset($email);
        }
    }

    if(isset($_POST['phone'])){
        $phone = $_POST['phone'];
        if($phone ===''){
            unset($phone);
        }
    }



    if(empty($info_user['id_user'])){
        $_SESSION['message'] = 'Неправильный телефон или пароль';
        header("location: index.php");
    } else{
        if(password_verify($password, $info_user['password'])){
            $_SESSION['phone'] = $info_user['phone'];
            $_SESSION['id_user'] = $info_user['id_user'];
            header("location: lk.php");
        } 
    }


$city1 = trim($_POST['city1']);
$city2 = trim($_POST['city2']);
$box = trim($_POST['box']);
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);

$CreateUser = "INSERT INTO `user`(`name`, `phone`, `email`) VALUES ('$name', '$phone', '$email')";
$CreateOrder = "INSERT INTO `order`(`id_user`,`sending_city`, `distination_city`, `size_box`) VALUES ('$CreateUser', '$city1', '$city2', '$box')";
addslashes($CreateUser, $CreateOrder);
$CreateUser = mysqli_query($connect, $CreateUser, $CreateOrder) or die(mysqli_error($connect));


header("location: index.php");

    
?> 




