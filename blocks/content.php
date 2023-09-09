<?php

if (isset($_GET['req'])) {
    $req = $_GET['req'];
    switch ($req) {
        case 'view-option':
            require './pages/car_detail.php';
            break;
        case 'buy-action':
            require './pages/buy.php';
            break;
        case 'login':
            require './elements/login_register/login.php';
            break;
        default:
            # code...
            break;
    }
} else {
    require './pages/home.php';
}

?>