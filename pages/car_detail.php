<?php
require './models/model/carCls.php';
$car_id = $_GET['car_id'];
$car = new car();
$getcar = $car->car__Get_By_Id($car_id);
?>
<!-- Product section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0"
                    src="./elements/img/<?php echo $getcar->photo1; ?>" alt="..." />

            </div>
            <div class="col-md-6">
                <h1 class="display-5 fw-bolder">
                    <?php echo $getcar->car_name; ?>
                </h1>
                <div class="fs-5 mb-5">
                    <span>Giá:
                        <?php echo $getcar->price; ?> VND
                    </span>
                </div>
                <p class="lead">
                    <?php echo $getcar->car_specitications; ?>
                </p>
                <div class="d-flex">
                    <button class="btn btn-outline-dark flex-shrink-0" type="button">
                        <i class="bi-cart-fill me-1"></i>
                        <a href="./index.php?req=buy-action">Buy Now</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<p></p>