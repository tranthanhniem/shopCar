<?php
require('models/model/carCls.php');
$cars = new car();
if (isset($_GET['id_type'])) {
    $list_car = $cars->getCarByTypeOfCar($_GET['id_type']);
} else if (isset($_GET['id_company'])) {
    $list_car = $cars->getCarByCompanyId($_GET['id_company']);
} else {
    $list_car = $cars->car__Get_All();
}

?>
<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php
            foreach ($list_car as $value) {
                ?>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="elements/img/<?php echo $value->photo1; ?>" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">
                                    <?php echo $value->car_name; ?>
                                </h5>
                                <!-- Product price-->
                                $
                                <?php echo $value->price; ?>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                    href="./index.php?req=view-option&car_id=<?php echo $value->car_id; ?>">View
                                    options</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>