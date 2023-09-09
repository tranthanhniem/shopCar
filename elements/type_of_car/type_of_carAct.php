<?php

session_start();
require("../../models/model/type_of_carCls.php");
if (isset($_GET['req'])) {
    $requestAction = $_GET['req'];
    switch ($requestAction) {
        case 'type_of_carAdd':
            $type_of_car_code = $_POST['type_of_car_code'];
            $type_of_car_name = $_POST['type_of_car_name'];
            $photo = $_POST['photo'];
            // $photo = base64_encode(file_get_contents($_POST['photo']));
            // echo ($photo);
            // die();
            $type_of_car = new type_of_car();
            $rs = $type_of_car->type_of_car__Add($type_of_car_code, $type_of_car_name, $photo);
            if ($rs) {
                header('location:../admin/index.php?req=type_of_carAdd&result=ok');
            } else {
                header('location:../admin/index.php?req=type_of_carAdd&result=notok');
            }
            break;

        case 'type_of_carDelete':
            $type_of_car_id = $_GET['type_of_car_id'];
            $type_of_car = new type_of_car();
            $rs = $type_of_car->type_of_car__Delete($type_of_car_id);
            if ($rs) {
                header('location:../admin/index.php?req=type_of_carTable&result=ok');
            } else {
                header('location:../admin/index.php?req=type_of_carTable&result=notok');
            }
            break;

        case 'type_of_carSetlock':
            $type_of_car_id = $_GET['type_of_car_id'];
            $ability = $_GET['ability'];
            $objtype_of_car = new type_of_car();
            if ($ability == 0) {
                $rs = $objtype_of_car->type_of_car__Set_Ability($type_of_car_id, 1);
            } else {
                $rs = $objtype_of_car->type_of_car__Set_Ability($type_of_car_id, 0);
            }
            if ($rs) {
                header('location:../admin/index.php?req=type_of_carTable&result=ok');
            } else {
                header('location:../admin/index.php?req=type_of_carTable&result=notok');
            }
            break;

        case 'type_of_carUpdate':
            $type_of_car_code = $_POST['type_of_car_code'];
            $type_of_car_name = $_POST['type_of_car_name'];
            $photo = $_POST['photo'];
            $type_of_car_id = $_POST['type_of_car_id'];
            $type_of_car = new type_of_car();
            $rs = $type_of_car->type_of_car__Update($type_of_car_code, $type_of_car_name, $photo, $type_of_car_id);
            if ($rs) {
                header('location:../admin/index.php?req=type_of_carTable&result=ok');
            } else {
                header('location:../admin/index.php?req=type_of_carTable&result=notok');
            }
            break;



        default:
            header('location:../../index.php');
    }
} else {
    header('location:../../index.php');
}
?>