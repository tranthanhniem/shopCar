<div class="container">
    <h2>Quản lý hãng xe</h2>Thêm mới
</div>
<hr>
<div class="container" onload="alertDialog()">
    <form name="car_companyAdd" id="formAdd" method="post"
        action="../car_company/car_companyAct.php?req=car_companyAdd">
        <div class="form-row">
            <div class="col-md-1 mb-3">
                <strong> Mã Hãng Xe:</strong>
            </div>
            <div class="col-md-4 mb-3">
                <input type="text" class="form-control" name="car_company_code" placeholder="Mã Hãng Xe" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-1 mb-3">
                <strong>Tên Hãng Xe:</strong>
            </div>
            <div class="col-md-4 mb-3">
                <input type="text" class="form-control" name="car_company_name" placeholder="Tên Hãng Xe" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-1 mb-3">
                <strong>Hình Ảnh:</strong>
            </div>
            <div class="col-md-4 mb-3">
                <input type="file" name="photo" required>
            </div>
        </div>
        <button class="btn btn-dark" type="submit" id="submit">Submit</button>
        <button class="btn btn-dark" type="reset">Reset </button>
        <b id="noteForm"></b>
    </form>
</div>
<script src="../../assets/js/sweetalert.js"></script>