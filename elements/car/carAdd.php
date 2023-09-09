<?php
require '../../models/model/type_of_carCls.php';
require '../../models/model/car_companyCls.php';
?>
<div class="container">
    <h2>Quản lý sản phẩm</h2>Thêm mới
</div>
<hr>
<div class="container">
    <form name="userAdd" id="formAdd" method="post" action="../car/carAct.php?req=carAdd">
        <div class="form-row">
            <div class="col-md-1 mb-3">
                <strong> Mã Xe:</strong>
            </div>
            <div class="col-md-4 mb-3">
                <input type="text" class="form-control" name="car_code" placeholder="Mã Xe" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-1 mb-3">
                <strong> Tên Xe:</strong>
            </div>
            <div class="col-md-4 mb-3">
                <input type="text" class="form-control" name="car_name" placeholder="Tên Xe" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-1 mb-3">
                <strong> Giá:</strong>
            </div>
            <div class="col-md-4 mb-3">
                <input type="text" class="form-control" name="price" placeholder="Giá" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-1 mb-3">
                <?php
                $type_of_car = new type_of_car();
                $list_type_of_car = $type_of_car->type_of_car__Get_All();
                ?>
                <label>Loại Xe</label>
            </div>
            <div class="col-md-1 mb-3">
                <select type="text" class="form-select" name="type_of_car_name" aria-label="Default select example">
                    <?php
                    foreach ($list_type_of_car as $pl) {
                        ?>
                        <option value="<?php echo $pl->type_of_car_id ?>">
                            <?php echo $pl->type_of_car_name; ?>
                        </option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-1 mb-3">
                <?php
                $car_company = new car_company();
                $list_car_company = $car_company->car_company__Get_All();
                ?>
                <label>Hãng Xe</label>
            </div>
            <div class="col-md-1 mb-3">
                <select class="form-select" type="text" name="car_company_name" aria-label="Default select example">
                    <?php
                    foreach ($list_car_company as $al) {
                        ?>
                        <option value="<?php echo $al->car_company_id ?>">
                            <?php echo $al->car_company_name; ?>
                        </option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-1 mb-3">
                <strong> Thông Số Kỹ Thuật:</strong>
            </div>
            <div class="col-md-4 mb-3">
                <input type="text" class="form-control" style="height: 300px; width: 500px;" name="car_specitications"
                    placeholder="Thông Số Kỹ Thuật" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-1 mb-3">
                <strong>Hình Ảnh 1:</strong>
            </div>
            <div class="col-md-4 mb-3">
                <input type="file" name="photo1">
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-1 mb-3">
                <strong>Hình Ảnh 2:</strong>
            </div>
            <div class="col-md-4 mb-3">
                <input type="file" name="photo2">
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-1 mb-3">
                <strong>Hình Ảnh 3:</strong>
            </div>
            <div class="col-md-4 mb-3">
                <input type="file" name="photo3">
            </div>
        </div>
        <button class="btn btn-dark" type="submit">Submit</button>
        <button class="btn btn-dark" type="reset">Reset </button>
        <b id="noteForm"></b>
    </form>
</div>