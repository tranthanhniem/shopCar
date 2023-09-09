<?php

session_start();
require("../../models/model/car_companyCls.php");
if (isset($_GET['req'])) {
    $requestAction = $_GET['req'];
    switch ($requestAction) {
        case 'car_companyAdd':
            $car_company_code = $_POST['car_company_code'];
            $car_company_name = $_POST['car_company_name'];
            $photo = $_POST['photo'];
            // $photo = base64_encode(file_get_contents($_POST['photo']));
            // echo ($photo);
            // die();
            $car_company = new car_company();
            $rs = $car_company->car_company__Add($car_company_code, $car_company_name, $photo);
            if ($rs) {
                header('location:../admin/index.php?req=car_companyAdd&result=ok');
            } else {
                header('location:../admin/index.php?req=car_companyAdd&result=notok');
            }
            break;

        case 'car_companyDelete':
            $car_company_id = $_GET['car_company_id'];
            $car_company = new car_company();
            $rs = $car_company->car_company__Delete($car_company_id);
            if ($rs) {
                header('location:../admin/index.php?req=car_companyTable&result=ok');
            } else {
                header('location:../admin/index.php?req=car_companyTable&result=notok');
            }
            break;

        case 'car_companySetlock':
            $car_company_id = $_GET['car_company_id'];
            $ability = $_GET['ability'];
            $objcar_company = new car_company();
            if ($ability == 0) {
                $rs = $objcar_company->car_company__Set_Ability($car_company_id, 1);
            } else {
                $rs = $objcar_company->car_company__Set_Ability($car_company_id, 0);
            }
            if ($rs) {
                header('location:../admin/index.php?req=car_companyTable&result=ok');
            } else {
                header('location:../admin/index.php?req=car_companyTable&result=notok');
            }
            break;

        case 'car_companyUpdate':
            $car_company_code = $_POST['car_company_code'];
            $car_company_name = $_POST['car_company_name'];
            $photo = $_POST['photo'];
            $car_company_id = $_POST['car_company_id'];
            $car_company = new car_company();
            $rs = $car_company->car_company__Update($car_company_code, $car_company_name, $photo, $car_company_id);
            if ($rs) {
                header('location:../admin/index.php?req=car_companyTable&result=ok');
            } else {
                header('location:../admin/index.php?req=car_companyTable&result=notok');
            }
            break;



        default:
            header('location:../../index.php');
    }
} else {
    header('location:../../index.php');
}
?>