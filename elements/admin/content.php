<?php
if (isset($_GET['req'])) {
    $req = $_GET['req'];
    switch ($req) {
        //  1. Add new      
        case 'userAdd':
            require '../user/userAdd.php';
            break;
        case 'carAdd':
            require '../car/carAdd.php';
            break;
        case 'car_companyAdd':
            require '../car_company/car_companyAdd.php';
            break;
        case 'type_of_carAdd':
            require '../type_of_car/type_of_carAdd.php';
            break;

        //  2. Table
        case 'userTable':
            require '../user/userTable.php';
            break;
        case 'carTable':
            require '../car/carTable.php';
            break;
        case 'car_companyTable':
            require '../car_company/car_companyTable.php';
            break;
        case 'type_of_carTable':
            require '../type_of_car/type_of_carTable.php';
            break;

        //  3. Update        
        case 'userUpdate':
            require '../user/userUpdate.php';
            break;
        case 'carUpdate':
            require '../car/carUpdate.php';
            break;
        case 'car_companyUpdate':
            require '../car_company/car_companyUpdate.php';
            break;
        case 'type_of_carUpdate':
            require '../type_of_car/type_of_carUpdate.php';
            break;
        default:
            require 'index.php';
            break;
    }
}
?>