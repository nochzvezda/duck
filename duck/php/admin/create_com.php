<?php

session_start();
include "../../php-connect/connect.php";

if(isset($_POST['comment_photo'])) {
    $commentphoto = $_POST['comment_photo'];
    if($commentphoto === '') {
        unset($commentphoto);
    }
}

if(isset($_POST['comment_name'])) {
    $commentname = $_POST['comment_name'];
    if($commentname === '') {
        unset($commentname);
    }
}

if(isset($_POST['comment_link'])) {
    $commentlink = $_POST['comment_link'];
    if($commentlink === '') {
        unset($commentlink);
    }
}

if(isset($_POST['comment_date'])) {
    $commentdate = $_POST['comment_date'];
    if($commentdate === '') {
        unset($commentdate);
    }
}

if(isset($_POST['comment_comment'])) {
    $commentcomment = $_POST['comment_comment'];
    if($commentcomment === '') {
        unset($commentcomment);
    }
}

// $commentphoto = trim($_POST['comment_photo']);
$commentname = trim($_POST['comment_name']);
$commentlink = trim($_POST['comment_link']);
$commentdate = trim($_POST['comment_date']);
$commentcomment = trim($_POST['comment_comment']);

$uploaddir = '../img/';
$uploaddir2 = 'img/';
$apend=date('YmdHis').rand(100, 1000). '.jpg';
$uploadfile = "$uploaddir$apend";
$uploadfile2 = "$uploaddir2$apend";

if(($_FILES['comment_photo']['type'] == 'image/gif' || $_FILES['comment_photo']['type'] == 'image/jpeg' || $_FILES['comment_photo']['type'] == 'image/png')
&& ($_FILES['comment_photo']['size'] != 0 and $_FILES['comment_photo']['size'] <= 512000))
{
if (move_uploaded_file($_FILES['comment_photo']['tmp_name'], $uploadfile))
{
    $size = getimagesize($uploadfile);
    if ($size[0] < 501 && $size[1]<1501)
    {
        $queryImgComment = "INSERT INTO `comments`(`photo_company`, `name`, `link`, `created_at`, `comment`) VALUES ('$commentphoto', '$commentname', '$commentlink','$commentdate', '$commentcomment')"; 
        addslashes($queryImgComment);
        $resImgComment =  mysqli_query($connect, $qCreateComment) or die(mysqli_error($connect));
        header("location: comment.php");
    }
    else{
        $_SESSION['message'] = 'ОШИБКА: Загружаемое изображение больше ширины 500 и высоты 1500';
        unlink($uploadfile);
        header('location: ' . $_SERVER['HTTP_REFERER']);
    }
}
else{
    $_SESSION['message'] = 'ОШИБКА: изображение не загружен попробуйте еще раз';
    header('location: ' . $_SERVER['HTTP_REFERER']);
}
} else{
    $_SESSION['message'] = 'ОШИБКА: изображение не должно превышать размера 512Кб';
    header('location: ' . $_SERVER['HTTP_REFERER']);
}



$qCreateComment = "INSERT INTO `comments`(`photo_company`, `name`, `link`, `created_at`, `comment`) VALUES ('$commentphoto', '$commentname', '$commentlink','$commentdate', '$commentcomment')";
addslashes($qCreateComment);
$qCreateComment = mysqli_query($connect, $qCreateComment) or die(mysqli_error($connect));


header("location: comment.php");
?>