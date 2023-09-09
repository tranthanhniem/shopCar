<?php
require '../../models/model/carCls.php';
require '../../models/model/car_companyCls.php';
require '../../models/model/type_of_carCls.php';
?>
<div class="title_car">Danh sách xe</div>
<div class="content_car">
    <?php
    $obj_car = new car();
    $obj_car_company = new car_company();
    $obj_type_of_car = new type_of_car();
    $list_car = $obj_car->car__Get_All();
    $l = count($list_car);
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
                    <th>Mã Xe</th>
                    <th>Tên Xe</th>
                    <th>Giá</th>
                    <th>Loại Xe</th>
                    <th>Hãng Xe</th>
                    <th>Hình Ảnh 1</th>
                    <th>Hình Ảnh 2</th>
                    <th>Hình Ảnh 3</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($list_car as $v) {
                    ?>
                    <tr align="center">
                        <td>
                            <?php echo $v->car_id; ?>
                        </td>
                        <td>
                            <?php echo $v->car_code; ?>
                        </td>
                        <td>
                            <?php echo $v->car_name; ?>
                        </td>
                        <td>
                            <?php echo $v->price; ?>
                        </td>
                        <td>
                            <?php echo ($obj_type_of_car->type_of_car__Get_By_Id($v->type_of_car_name)->type_of_car_name); ?>
                        </td>
                        <td>
                            <?php echo ($obj_car_company->car_company__Get_By_Id($v->car_company_name)->car_company_name); ?>
                        </td>
                        <td>
                            <?php
                            if ($v->photo1 == NULL) {
                                echo "Ảnh chưa được cập nhật";
                            } else {
                                ?>
                                <img style="width: 60px; height: 33px;" src="../img/<?php
                                echo $v->photo1;
                                ?>" alt="">
                            <?php } ?>
                        </td>
                        <td>
                            <?php
                            if ($v->photo2 == NULL) {
                                echo "Ảnh chưa được cập nhật";
                            } else {
                                ?>
                                <img style="width: 60px; height: 33px;" src="../img/<?php
                                echo $v->photo2;
                                ?>" alt="">
                            <?php } ?>
                        </td>
                        <td>
                            <?php
                            if ($v->photo3 == NULL) {
                                echo "Ảnh chưa được cập nhật";
                            } else {
                                ?>
                                <img style="width: 60px; height: 33px;" src="../img/<?php
                                echo $v->photo3;
                                ?>" alt="">
                            <?php } ?>
                        </td>
                        <td align="center">

                            <!-- Xóa car -->
                            <a href="../car/carAct.php?req=carDelete&car_id=<?php echo $v->car_id; ?>">
                                <img class="iconimg" src="../img/delete.png" width="20px" height="20px" />
                            </a>

                            <!-- cập nhật-->
                            <a href="../admin/index.php?req=carUpdate&car_id=<?php echo $v->car_id; ?>">
                                <img class="iconimg" src="../img/update.png" width="20px" height="20px" />
                            </a>

                            <!-- khóa car -->
                            <?php
                            if ($v->ability == 0) {
                                ?>
                                <a
                                    href="../car/carAct.php?req=carSetlock&car_id=<?php echo $v->car_id; ?> &ability=<?php echo $v->ability; ?>">
                                    <img src="../img/lock.png" alt="" class="iconimg" width="20px" height="20px">
                                </a>
                                <?php
                            } else {
                                ?>
                                <a
                                    href="../car/carAct.php?req=carSetlock&car_id=<?php echo $v->car_id; ?>&ability=<?php echo $v->ability; ?>">
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