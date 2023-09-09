<div class="container">
    <h2>Quản lý người dùng</h2>Thêm mới
</div>
<hr>
<div class="container">
    <form name="userAdd" id="formAdd" method="post" action="../user/userAct.php?req=userAdd">
        <div class="form-row">
            <div class="col-md-1 mb-3">
                <strong> Tên Đăng Nhập:</strong>
            </div>
            <div class="col-md-4 mb-3">
                <input type="text" class="form-control" name="user_name" placeholder="Tên Đăng Nhập" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-1 mb-3">
                <strong>Email:</strong>
            </div>
            <div class="col-md-4 mb-3">
                <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-1 mb-3">
                <strong>Mật Khẩu:</strong>
            </div>
            <div class="col-md-4 mb-3">
                <input type="password" class="form-control" name="password" placeholder="Mật Khẩu" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-1 mb-3">
                <strong>Họ Tên:</strong>
            </div>
            <div class="col-md-4 mb-3">
                <input type="text" class="form-control" name="full_name" placeholder="Họ Tên" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-1 mb-3">
                <strong>Giới Tính:</strong>
            </div>
            <div class="col-md-4 mb-3">
                nam <input type="radio" name="gender" value="1" checked="true" />
                nữ <input type="radio" name="gender" value="0" />
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-1 mb-3">
                <strong>SDT:</strong>
            </div>
            <div class="col-md-4 mb-3">
                <input type="text" class="form-control" name="phone" placeholder="SDT" minlength="9" maxlength="10"
                    required>
            </div>
        </div>
        <button class="btn btn-dark" type="submit">Submit</button>
        <button class="btn btn-dark" type="reset">Reset </button>
        <b id="noteForm"></b>
    </form>
</div>