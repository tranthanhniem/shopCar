<?php
require '../../models/model/carCls.php';
$car_id = $_GET['car_id'];
$car = new car();
$getcar = $car->car__Get_By_Id($car_id);
?>
<div class="container">
    <h2>Quản lý loại xe</h2>Cập nhật
</div>
<hr>
<div class="container">

    <div class="content_car">
        <form name="carUpdate" id="formUpdate" method="post" action="../car/carAct.php?req=carUpdate">
            <input type="hidden" name="car_id" value="<?php echo $car_id; ?>" />
            <div class="form-row">
                <div class="col-md-1 mb-3">
                    <strong>Mã Xe:</strong>
                </div>
                <div class="col-md-4 mb-3">
                    <input type="text" class="form-control" name="car_code" value="<?php echo $getcar->car_code; ?>"
                        required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-1 mb-3">
                    <strong>Tên Xe:</strong>
                </div>
                <div class="col-md-4 mb-3">
                    <input type="text" class="form-control" name="car_name" value="<?php echo $getcar->car_name; ?>"
                        required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-1 mb-3">
                    <strong>Giá:</strong>
                </div>
                <div class="col-md-4 mb-3">
                    <input type="text" class="form-control" name="price" value="<?php echo $getcar->price; ?>" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-1 mb-3">
                    <strong>Loại Xe:</strong>
                </div>
                <div class="col-md-4 mb-3">
                    <input type="text" class="form-control" name="type_of_car"
                        value="<?php echo $getcar->type_of_car_name; ?>" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-1 mb-3">
                    <strong>Hãng Xe:</strong>
                </div>
                <div class="col-md-4 mb-3">
                    <input type="text" class="form-control" name="car_company"
                        value="<?php echo $getcar->car_company_name; ?>" required>
                </div>
            </div>
            <div class="col-md-1 mb-3">
                <strong>Hình Ảnh 1:</strong>
            </div>
            <div class="col-md-4 mb-3">
                <input type="file" name="photo1" value="<?php echo $getcar->photo2; ?>">
            </div>
            <div class="col-md-1 mb-3">
                <strong>Hình Ảnh 2:</strong>
            </div>
            <div class="col-md-4 mb-3">
                <input type="text" name="photo2" value="<?php echo $getcar->photo2; ?>">
            </div>
            <div class="col-md-1 mb-3">
                <strong>Hình Ảnh 3:</strong>
            </div>
            <div class="col-md-4 mb-3">
                <input type="text" name="photo3" value="<?php echo $getcar->photo3; ?>">
            </div>
    </div>


    <button class="btn btn-dark" type="submit">Submit</button>
    <button class="btn btn-dark" type="reset">Reset</button>

    </form>
</div>
</div>