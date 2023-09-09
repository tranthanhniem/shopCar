<?php
require '../models/model/carCls.php';
$obj_car = new Car();
if (isset($_GET['req'])) {
    $req = $_GET['req'];
    switch ($req) {
        case 'buy-action':
            var_dump('buy_action');
            break;
        case 'view-option':
            if (isset($_GET['id'])) {

            }
            break;

        default:
            # code...
            break;
    }
}
?>