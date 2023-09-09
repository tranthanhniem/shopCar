<?php
require '../../models/model/type_of_carCls.php';
$type_of_car_id = $_GET['type_of_car_id'];
$type_of_car = new type_of_car();
$gettype_of_car = $type_of_car->type_of_car__Get_By_Id($type_of_car_id);
?>
<div class="container">
    <h2>Quản lý loại xe</h2>Cập nhật
</div>
<hr>
<div class="container">

    <div class="content_type_of_car">
        <form name="type_of_carUpdate" id="formUpdate" method="post"
            action="../type_of_car/type_of_carAct.php?req=type_of_carUpdate">
            <input type="hidden" name="type_of_car_id" value="<?php echo $type_of_car_id; ?>" />
            <div class="form-row">
                <div class="col-md-1 mb-3">
                    <strong>Mã Loại Xe:</strong>
                </div>
                <div class="col-md-4 mb-3">
                    <input type="text" class="form-control" name="type_of_car_code"
                        value="<?php echo $gettype_of_car->type_of_car_code; ?>" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-1 mb-3">
                    <strong>Tên Loại Xe:</strong>
                </div>
                <div class="col-md-4 mb-3">
                    <input type="text" class="form-control" name="type_of_car_name"
                        value="<?php echo $gettype_of_car->type_of_car_name; ?>" required>
                </div>
            </div>
            <div class="col-md-1 mb-3">
                <strong>Hình Ảnh:</strong>
            </div>
            <div class="col-md-4 mb-3">
                <input type="text" name="photo" value="<?php echo $gettype_of_car->photo; ?>" required>
            </div>
    </div>


    <button class="btn btn-dark" type="submit">Submit</button>
    <button class="btn btn-dark" type="reset">Reset</button>

    </form>
</div>
</div>