<?php
require '../../models/model/type_of_carCls.php';
?>
<div class="title_type_of_car">Danh sách loại xe</div>
<div class="content_type_of_car">
    <?php
    $obj_type_of_car = new type_of_car();
    $list_type_of_car = $obj_type_of_car->type_of_car__Get_All();
    $l = count($list_type_of_car);
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
                    <th>Mã Loại Xe</th>
                    <th>Tên Loại Xe</th>
                    <th>Hình Ảnh</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($list_type_of_car as $v) {
                    ?>
                    <tr align="center">
                        <td>
                            <?php echo $v->type_of_car_id; ?>
                        </td>
                        <td>
                            <?php echo $v->type_of_car_code; ?>
                        </td>
                        <td>
                            <?php echo $v->type_of_car_name; ?>
                        </td>
                        <td>
                            <img style="width: 40px; height: 40px;" src="../img/<?php
                            echo $v->photo;
                            ?>" alt="">
                        </td>
                        <td align="center">

                            <!-- Xóa type_of_car -->
                            <a
                                href="../type_of_car/type_of_carAct.php?req=type_of_carDelete&type_of_car_id=<?php echo $v->type_of_car_id; ?>">
                                <img class="iconimg" src="../img/delete.png" width="20px" height="20px" />
                            </a>

                            <!-- cập nhật-->
                            <a href="../admin/index.php?req=type_of_carUpdate&type_of_car_id=<?php echo $v->type_of_car_id; ?>">
                                <img class="iconimg" src="../img/update.png" width="20px" height="20px" />
                            </a>

                            <!-- khóa type_of_car -->
                            <?php
                            if ($v->ability == 0) {
                                ?>
                                <a
                                    href="../type_of_car/type_of_carAct.php?req=type_of_carSetlock&type_of_car_id=<?php echo $v->type_of_car_id; ?> &ability=<?php echo $v->ability; ?>">
                                    <img src="../img/lock.png" alt="" class="iconimg" width="20px" height="20px">
                                </a>
                                <?php
                            } else {
                                ?>
                                <a
                                    href="../type_of_car/type_of_carAct.php?req=type_of_carSetlock&type_of_car_id=<?php echo $v->type_of_car_id; ?>&ability=<?php echo $v->ability; ?>">
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