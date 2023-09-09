<?php
require '../../models/model/car_companyCls.php';
$car_company_id = $_GET['car_company_id'];
$car_company = new car_company();
$getcar_company = $car_company->car_company__Get_By_Id($car_company_id);
?>
<div class="container">
    <h2>Quản lý hãng xe</h2>Cập nhật
</div>
<hr>
<div class="container">

    <div class="content_car_company">
        <form name="car_companyUpdate" id="formUpdate" method="post"
            action="../car_company/car_companyAct.php?req=car_companyUpdate">
            <input type="hidden" name="car_company_id" value="<?php echo $car_company_id; ?>" />
            <div class="form-row">
                <div class="col-md-1 mb-3">
                    <strong>Mã Hãng Xe:</strong>
                </div>
                <div class="col-md-4 mb-3">
                    <input type="text" class="form-control" name="car_company_code"
                        value="<?php echo $getcar_company->car_company_code; ?>" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-1 mb-3">
                    <strong>Tên Hãng Xe:</strong>
                </div>
                <div class="col-md-4 mb-3">
                    <input type="text" class="form-control" name="car_company_name"
                        value="<?php echo $getcar_company->car_company_name; ?>" required>
                </div>
            </div>
            <div class="col-md-1 mb-3">
                <strong>Hình Ảnh:</strong>
            </div>
            <div class="col-md-4 mb-3">
                <input type="text" name="photo" value="<?php echo $getcar_company->photo; ?>" required>
            </div>
    </div>


    <button class="btn btn-dark" type="submit">Submit</button>
    <button class="btn btn-dark" type="reset">Reset</button>

    </form>
</div>
</div>