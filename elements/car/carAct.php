<?php

session_start();
require("../../models/model/carCls.php");
if (isset($_GET['req'])) {
    $requestAction = $_GET['req'];
    switch ($requestAction) {
        case 'carAdd':
            $car_code = $_POST['car_code'];
            $car_name = $_POST['car_name'];
            $price = $_POST['price'];
            $type_of_car_name = $_POST['type_of_car_name'];
            $car_company_name = $_POST['car_company_name'];
            $car_specitications = $_POST['car_specitications'];
            $photo1 = $_POST['photo1'];
            $photo2 = $_POST['photo2'];
            $photo3 = $_POST['photo3'];
            // $photo = base64_encode(file_get_contents($_POST['photo']));
            // echo ($photo);
            // die();
            $car = new car();
            $rs = $car->car__Add($car_code, $car_name, $price, $type_of_car_name, $car_company_name, $car_specitications, $photo1, $photo2, $photo3);
            if ($rs) {
                header('location:../admin/index.php?req=carAdd&result=ok');
            } else {
                header('location:../admin/index.php?req=carAdd&result=notok');
            }
            break;

        case 'carDelete':
            $car_id = $_GET['car_id'];
            $car = new car();
            $rs = $car->car__Delete($car_id);
            if ($rs) {
                header('location:../admin/index.php?req=carTable&result=ok');
            } else {
                header('location:../admin/index.php?req=carTable&result=notok');
            }
            break;


        case 'carUpdate':
            $car_code = $_POST['car_code'];
            $car_name = $_POST['car_name'];
            $price = $_POST['price'];
            $type_of_car_name = $_POST['type_of_car_name'];
            $car_company_name = $_POST['car_company_name'];
            $car_specitication = $_POST['car_specitication'];
            $photo1 = $_POST['photo1'];
            $photo2 = $_POST['photo2'];
            $photo3 = $_POST['photo3'];
            $car_id = $_POST['car_id'];
            $car = new car();
            $rs = $car->car__Update($car_code, $car_name, $price, $type_of_car_name, $car_company_name, $car_specitications, $photo, $photo2, $photo3, $car_id);
            if ($rs) {
                header('location:../admin/index.php?req=carTable&result=ok');
            } else {
                header('location:../admin/index.php?req=carTable&result=notok');
            }
            break;

        case 'carSetlock':
            $car_id = $_GET['car_id'];
            $ability = $_GET['ability'];
            $objcar = new car();
            if ($ability == 0) {
                $rs = $objcar->car__Set_Ability($car_id, 1);
            } else {
                $rs = $objcar->car__Set_Ability($car_id, 0);
            }
            if ($rs) {
                header('location:../admin/index.php?req=carTable&result=ok');
            } else {
                header('location:../admin/index.php?req=carTable&result=notok');
            }
            break;

        default:
            header('location:../../index.php');
    }
} else {
    header('location:../../index.php');
}
?>