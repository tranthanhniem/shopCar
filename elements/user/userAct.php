<?php

session_start();
require("../../models/model/userCls.php");
if (isset($_GET['req'])) {
    $requestAction = $_GET['req'];
    switch ($requestAction) {
        case 'userAdd':
            $user_name = $_POST['user_name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $full_name = $_POST['full_name'];
            $gender = $_POST['gender'];
            $phone = $_POST['phone'];
            $user = new user();
            $rs = 0;
            if ($user->user__Check_user_name($user_name)) {
                $rs = 1;
            }
            // $rs = $user->user__Add($user_name, $email, $password, $full_name, $gender, $phone);           
            // if ($rs) {
            //     header('location:../admin/index.php?req=userAdd&result=ok');
            // } else {
            //     header('location:../admin/index.php?req=userAdd&result=notok');
            // }
            break;

        case 'userDelete':
            $user_id = $_GET['user_id'];
            $user = new user();
            $rs = $user->User__Delete($user_id);
            if ($rs) {
                header('location:../admin/index.php?req=userTable&result=ok');
            } else {
                header('location:../admin/index.php?req=userTable&result=notok');
            }
            break;

        case 'userSetlock':
            $user_id = $_GET['user_id'];
            $ability = $_GET['ability'];
            $objuser = new user();
            if ($ability == 0) {
                $rs = $objuser->user__Set_Ability($user_id, 1);
            } else {
                $rs = $objuser->user__Set_Ability($user_id, 0);
            }
            if ($rs) {
                header('location:../admin/index.php?req=userTable&result=ok');
            } else {
                header('location:../admin/index.php?req=userTable&result=notok');
            }
            break;

        case 'userUpdate':
            $user_name = $_POST['user_name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $full_name = $_POST['full_name'];
            $gender = $_POST['gender'];
            $phone = $_POST['phone'];
            $user_id = $_POST['user_id'];

            $user = new user();
            $rs = $user->user__Update($user_name, $email, $password, $full_name, $gender, $phone, $user_id);
            if ($rs) {
                header('location:../admin/index.php?req=userTable&result=ok');
            } else {
                header('location:../admin/index.php?req=userTable&result=notok');
            }
            break;

        case 'checkLogin':
            $user_name = $_POST['user_name'];
            $password = $_POST['password'];
            $user = new user();

            $rs = $user->User__Check_Login($user_name, $password);
            if ($rs) {
                if ($user_name == "admin") {
                    $_SESSION['ADMIN'] = $user_name;
                    header('location:../admin/index.php');
                } else {
                    $_SESSION['USER'] = $user_name;
                    header('location:../../index.php');
                }

            } else {
                header('location:../login_register/login.php');
            }
            break;

        case 'logout':
            header('location:../../index.php');
            break;

        default:
            header('location:./../index.php');
    }
} else {
    header('location:./../index.php');
}
?>