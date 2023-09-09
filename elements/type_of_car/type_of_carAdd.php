<div class="container">
    <h2>Quản lý loại xe</h2>Thêm mới
</div>
<hr>
<div class="container">
    <form name="type_of_carAdd" id="formAdd" method="post"
        action="../type_of_car/type_of_carAct.php?req=type_of_carAdd">
        <div class="form-row">
            <div class="col-md-1 mb-3">
                <strong> Mã Loại Xe:</strong>
            </div>
            <div class="col-md-4 mb-3">
                <input type="text" class="form-control" name="type_of_car_code" placeholder="Mã Loại Xe" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-1 mb-3">
                <strong>Tên Loại Xe:</strong>
            </div>
            <div class="col-md-4 mb-3">
                <input type="text" class="form-control" name="type_of_car_name" placeholder="Tên Loại Xe" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-1 mb-3">
                <strong>Hình Ảnh:</strong>
            </div>
            <div class="col-md-4 mb-3">
                <input type="file" name="photo" required>
                <!-- <input type="file" name="choosefile" value="" /> -->
            </div>
        </div>
        <button class="btn btn-dark" type="submit">Submit</button>
        <button class="btn btn-dark" type="reset">Reset </button>
        <b id="noteForm"></b>
    </form>
</div>