<?php
require '../../models/model/userCls.php';
?>
<div class="title_user">Danh sách người dùng</div>
<div class="content_user">
    <?php
    $obj_user = new user();
    $list_user = $obj_user->user__Get_All();
    $l = count($list_user);
    ?>
    <p>Trong bảng có <b>
            <?php echo $l; ?>
        </b></p>
    <?php
    if ($l > 0) {
        ?>
        <table id="tablejs" class="table table-bordered table-striped">
            <thead>
                <tr align="center">
                    <th>id</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Họ Tên</th>
                    <th>Giới Tính</th>
                    <th>SDT</th>
                    <th>Ability</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($list_user as $v) {
                    ?>
                    <tr align="center">
                        <td>
                            <?php echo $v->user_id; ?>
                        </td>
                        <td>
                            <?php echo $v->user_name; ?>
                        </td>
                        <td>
                            <?php echo $v->email; ?>
                        </td>
                        <td>
                            <?php echo $v->password; ?>
                        </td>
                        <td>
                            <?php echo $v->full_name; ?>
                        </td>
                        <td align="center">

                            <?php
                            if ($v->gender == 0) {
                                echo 'Nữ';
                            } else {
                                echo 'Nam';
                            }

                            ?>
                        </td>
                        <td>
                            <?php echo $v->phone; ?>
                        </td>
                        <td>
                            <?php echo $v->ability; ?>
                        </td>
                        <td align="center">

                            <!-- Xóa user -->
                            <a href="../user/userAct.php?req=userDelete&user_id=<?php echo $v->user_id; ?>">
                                <img class="iconimg" src="../img/delete.png" width="20px" height="20px" />
                            </a>

                            <!-- cập nhật-->
                            <a href="../admin/index.php?req=userUpdate&user_id=<?php echo $v->user_id; ?>">
                                <img class="iconimg" src="../img/update.png" width="20px" height="20px" />
                            </a>

                            <!-- khóa user -->
                            <?php
                            if ($v->ability == 0) {
                                ?>
                                <a
                                    href="../user/userAct.php?req=userSetlock&user_id=<?php echo $v->user_id; ?> &ability=<?php echo $v->ability; ?>">
                                    <img src="../img/lock.png" alt="" class="iconimg" width="20px" height="20px">
                                </a>
                                <?php
                            } else {
                                ?>
                                <a
                                    href="../user/userAct.php?req=userSetlock&user_id=<?php echo $v->user_id; ?>&ability=<?php echo $v->ability; ?>">
                                    <img src="../img/unlock.png" alt="" class="iconimg" width="20px" height="20px">
                                </a>
                                <?php
                            }

                            ?>
                        </td>
                        <?php
                }
                ?>
                </tr>
            </tbody>
        </table>
        <?php
    }
    ?>
</div>