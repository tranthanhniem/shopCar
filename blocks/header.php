<?php session_start();
require './models/model/type_of_carCls.php';
$obj_type = new type_of_car();
$list_type = $obj_type->type_of_car__Get_All();

require './models/model/car_companyCls.php';
$obj_company = new car_company();
$list_company = $obj_company->car_company__Get_All();
?>
<div class="row">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="./index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Loại Xe
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php
                        foreach ($list_type as $value) {
                            ?>
                            <li><a class="dropdown-item" href="./index.php?id_type=<?php echo $value->type_of_car_id ?>">
                                    <img style="width: 30px; height: 40px;" src="./elements/img/<?php echo $value->photo ?>"
                                        alt=""> <?php echo $value->type_of_car_name ?></a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Hãng Xe
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php
                        foreach ($list_company as $value) {
                            ?>
                            <li><a class="dropdown-item" href="./index.php?id_company=<?php echo $value->car_company_id ?>"> <img id="iconHang" src="./elements/img/<?php echo $value->photo ?>"
                                        alt=""><?php echo $value->car_company_name?></a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </li>
            </ul>
            <?php
            if (isset($_SESSION['USER']) || isset($_SESSION['ADMIN'])) {
                ?>
                <div id="logout">
                    <a class="nav-link" href="./elements/user/userAct.php?req=logout">
                        <img src="./elements/img/logout.png" class="iconlogin" style="height: 25px; width: 25px;">
                    </a>
                </div>
                <?php
            } else {
                ?>
                <div id="login">
                    <a class="nav-link" href="./elements/login_register/login.php">
                        <img src="./elements/img/login.png" class="iconlogin" style="height: 25px; width: 25px;">
                    </a>
                </div>
                <?php
            }

            ?>

            </li>
        </div>
    </nav>

</div>
<div class="row">
    <div class="bg-dark py-2">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h3 class="display-4 fw-bolder">Shop Car</h3>
                <p class="lead fw-normal text-white-50 mb-0"></p>
            </div>
        </div>
    </div>
</div>