<?php
require '../../models/model/userCls.php';
$user_id = $_GET['user_id'];
$user = new user();
$getuser = $user->user__Get_By_Id($user_id);
?>
<div class="container">
    <h2>Quản Lý Người Dùng</h2>Cập nhật
</div>
<hr>
<div class="container">

    <div class="content_user">
        <form name="userUpdate" id="formUpdate" method="post" action="../user/userAct.php?req=userUpdate">
            <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" />
            <div class="form-row">
                <div class="col-md-1 mb-3">
                    <strong>Tên Đăng Nhập:</strong>
                </div>
                <div class="col-md-4 mb-3">
                    <input type="text" class="form-control" name="user_name" value="<?php echo $getuser->user_name; ?>"
                        required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-1 mb-3">
                    <strong>Email:</strong>
                </div>
                <div class="col-md-4 mb-3">
                    <input type="email" class="form-control" name="email" value="<?php echo $getuser->email; ?>"
                        required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-1 mb-3">
                    <strong>Mật Khẩu:</strong>
                </div>
                <div class="col-md-4 mb-3">
                    <input type="password" class="form-control" name="password"
                        value="<?php echo $getuser->password; ?>" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-1 mb-3">
                    <strong>Họ Tên:</strong>
                </div>
                <div class="col-md-4 mb-3">
                    <input type="text" class="form-control" name="full_name" value="<?php echo $getuser->full_name; ?>"
                        required>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-1 mb-3">
                    <strong>Giới Tính:</strong>
                </div>
                <div class="col-md-4 mb-3">
                    <a>Nam </a> <input type="radio" name="gender" value="1" <?php if ($getuser->gender == 1)
                        echo 'checked'; ?> required />
                    <a>Nữ </a><input type="radio" name="gender" value="0" <?php if ($getuser->gender == 0)
                        echo 'checked'; ?> required />
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-1 mb-3">
                    <strong>SDT:</strong>
                </div>
                <div class="col-md-4 mb-3">
                    <input type="text" class="form-control" name="phone" min="9" max="10"
                        value="<?php echo $getuser->phone; ?>" required>
                </div>
            </div>
            <button class="btn btn-dark" type="submit">Submit</button>
            <button class="btn btn-dark" type="reset">Reset</button>

        </form>
    </div>
</div>