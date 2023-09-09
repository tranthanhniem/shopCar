<div class="container">
    <h2>Bán Hàng</h2>
</div>
<hr>
<div class="container">
    <form name="buyAdd" id="formAdd" action="./index.php">
        <div class="form-row">
            <div class="col-md-1 mb-3">
                <strong> Họ Tên Khách Hàng:</strong>
            </div>
            <div class="col-md-4 mb-3">
                <input type="text" class="form-control" name="full_name" placeholder="Họ Tên" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-1 mb-3">
                <strong>Sdt:</strong>
            </div>
            <div class="col-md-4 mb-3">
                <input type="text" class="form-control" name="sdt" placeholder="SDT" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-1 mb-3">
                <strong>Địa Chỉ</strong>
            </div>
            <div class="col-md-4 mb-3">
                <input type="text" name="address" placeholder="Địa Chỉ" required>
            </div>
        </div>
        <button onclick="myFunction()" class="btn btn-dark" type="submit">Submit</button>
        <button class="btn btn-dark" type="reset">Reset </button>
        <b id="noteForm"></b>
    </form>
</div>
<script>
    function myFunction() {
        alert("Đặt hàng Thành Công!");
    }
</script>