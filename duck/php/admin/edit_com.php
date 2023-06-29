<?php     
    include "../../php-connect/connect.php";
    session_start();

    if(isset($_GET['idA'])){
        $comment = $_GET['idA'];
    }

    $uploaddir = '../img/';
    $uploaddir2 = 'img/';
    $apend=date('YmdHis').rand(100, 1000). '.jpg';
    $uploadfile = "$uploaddir$apend";
    $uploadfile2 = "$uploaddir2$apend";

    if(($_FILES['image_product']['type'] == 'image/gif' ||
    $_FILES['image_product']['type'] == 'image/jpeg' || $_FILES['image_product']['type']
    == 'image/png') && ($_FILES['image_product']['size'] != 0 and
    $_FILES['image_product']['size']<=1024000))
    {
    if (move_uploaded_file($_FILES['image_product']['tmp_name'],

    $uploadfile))
    {
    $size = getimagesize($uploadfile);
    if ($size[0] < 501 && $size[1]<1501)
    {


    if(isset($_POST['comment_name']))|| 
    (isset($_POST['comment_link'])) ||
    (isset($_POST['comment_date'])) ||
    (isset($_POST['comment_comment'])) {

        $commentname = $_POST['comment_name'];
        $commentlink = $_POST['comment_link'];
        $commentdate = $_POST['comment_date'];
        $commentcomment = $_POST['comment_comment'];

        if($commentname === '') ||
        ($commentlink === '') ||
        ($commentdate === '') ||
        ($commentcomment === ''){

            unset($commentname);
            unset($commentlink);
            unset($commentdate);
            unset($commentcomment);
               } else{
            $commentphoto = trim($_POST['comment_photo']);
            $commentname = trim($_POST['comment_name']);
            $commentlink = trim($_POST['comment_link']);
            $commentdate = trim($_POST['comment_date']);
            $commentcomment = trim($_POST['comment_comment']);

            $queryComment= "UPDATE `comments` SET `photo_company` = '$commentphoto',`name` = '$commentname',`link` = '$commentlink', `created_at` = '$commentdate',`comment` = '$commentcomment' WHERE id_comment='$comment'";
            addslashes($queryComment);
            $resComment = mysqli_query($connect, $queryComment) or die (mysqli_error($connect));
            header("location: comment.php");
        }

    } else {
        header("location: admin-panel.php");
    }
        } else{
            $_SESSION['message'] = 'ОШИБКА: Загружаемое изображение больше ширины 500 и высоты 1500';
            unlink($uploadfile);
            header('location: ' . $_SERVER['HTTP_REFERER']);
        }}
        else{
            $_SESSION['message'] = 'ОШИБКА: изображение не загружен попробуйте еще раз';
            header('location: ' . $_SERVER['HTTP_REFERER']);
        }
    } else{

        $_SESSION['message'] = 'ОШИБКА: изображение не должно превышать размера 512Кб';
        header('location: ' . $_SERVER['HTTP_REFERER']);
        
    }
?>
