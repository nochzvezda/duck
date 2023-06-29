<?php 
    
    include "../php-connect/connect.php";
    session_start();
    // var_dump($_SESSION['phone']);

    if(isset($_POST['phone'])){
        $phone = $_POST['phone'];
        if($phone ===''){
            unset($phone);
        }
    }

    if(isset($_POST['password'])){
        $password = $_POST['password'];
        if($password ===''){
            unset($password);
        }
    }

    $phone = trim($_POST['phone']);
    $password = trim($_POST['password']);

    

    $check_user = "SELECT * FROM `user` WHERE `phone`='$phone'";
    $check_order = "SELECT * FROM `orders` WHERE `id_order`='$id_user'";

    $result1 = mysqli_query($connect, $check_order);
    $result = mysqli_query($connect, $check_user);
    $info_user = mysqli_fetch_array($result);
    $info_order = mysqli_fetch_array($result1);
    if(empty($info_user['id_user'])){
        $_SESSION['message'] = 'Неправильный телефон или пароль';
        header("location: index.php");
    } else{
        if(password_verify($password, $info_user['password'])){
            $_SESSION['phone'] = $info_user['phone'];
            $_SESSION['id_user'] = $info_user['id_user'];
            $_SESSION['id_order'] = $info_order['id_order'];
            header("location: lk.php");
        } 
    }
?> 




