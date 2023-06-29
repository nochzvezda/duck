<?php 
    require_once '../../php-connect/connect.php';
    session_start();
?>

<?php 
    if(isset($_POST['login'])){
        $login = $_POST['login'];
        if($login ===''){
            unset($login);
        }
    }

    if(isset($_POST['password'])){
        $password = $_POST['password'];
        if($password ===''){
            unset($password);
        }
    }

    $login = trim($_POST['login']);
    $password = trim($_POST['password']);

    $check_user = "SELECT * FROM `admin` WHERE `login`='$login' AND `password`='$password'";

    $result = mysqli_query($connect, $check_user);
    $info= mysqli_fetch_array($result);

    if(empty($info['id_admin'])){
        $_SESSION['message'] = 'Неправильный телефон или пароль';
        header("location: login.php");
    } else{
        if($info['password'] ===$password){
            $_SESSION['login'] = $info['login'];
            $_SESSION['id_admin'] = $info['id_admin'];
            header("location: admin-panel.php");
        } else{
            $_SESSION['message'] = 'Неправильный пароль';
            header("location: login.php");
        }
    }
?> 