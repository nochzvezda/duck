<?php     
    include "../../php-connect/connect.php";
    session_start();

    if(isset($_GET['idA'])){
        $user = $_GET['idA'];
    }

    if(isset($_POST['user_name']))
        $username = $_POST['user_name'];
        if($username === ''){
            unset($username);
        }
        if(isset($_POST['user_lastname']))
            $userlastname = $_POST['user_lastname'];
            if($userlastname === ''){
                unset($userlastname);
            }
            if(isset($_POST['user_patronymic']))
                $userpatronymic = $_POST['user_patronymic'];
                if($userpatronymic === ''){
                    unset($userpatronymic);
                }
                if(isset($_POST['user_password']))
                $userpassword = $_POST['user_password'];
                if($userpassword === ''){
                    unset($userpassword);
                }
                if(isset($_POST['user_phone']))
                    $userphone = $_POST['user_phone'];
                    if($userphone === ''){
                        unset($userphone);
                    }
                    if(isset($_POST['user_email']))
                        $useremail = $_POST['user_email'];
                        if($useremail === ''){
                            unset($useremail);
                        }
                        if(isset($_POST['user_index']))
                        $userindex = $_POST['user_index'];
                        if($userindex === ''){
                            unset($userindex);
                        }
                        if(isset($_POST['user_gender']))
                            $usergender = $_POST['user_gender'];
                            if($usergender === ''){
                                unset($usergender);
                            }
                            if(isset($_POST['user_age'])){
                                $userage = $_POST['user_age'];
                                if($userage === ''){
                                    unset($userage);
                                }

        else{
            $username = trim($_POST['user_name']);
            $userlastname = trim($_POST['user_lastname']);
            $userpatronymic = trim($_POST['user_patronymic']);
            $userpassword = trim($_POST['user_password']);
            $userphone = trim($_POST['user_phone']);
            $useremail = trim($_POST['user_email']);
            $userindex = trim($_POST['user_index']);
            $usergender = trim($_POST['user_gender']);
            $userage = trim($_POST['user_age']);

            $queryUser = "UPDATE `user` SET `name` = '$username',`lastname` = '$userlastname',`patronymic` = '$userpatronymic',`password` = '$userpassword',`phone` = '$userphone',`email` = '$useremail',`subscript` = '$userindex',`id_gender` = '$usergender',`age` = '$userage' WHERE id_user='$user'";
            addslashes($queryUser);
            $resUser = mysqli_query($connect, $queryUser) or die (mysqli_error($connect));
            header("location: user.php");
        }
    }
?>