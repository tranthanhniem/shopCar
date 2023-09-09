<?php
require '../../models/model/car_companyCls.php';
?>
<div class="title_car_company">Danh sách hãng xe</div>
<div class="content_car_company">
    <?php
    $obj_car_company = new car_company();
    $list_car_company = $obj_car_company->car_company__Get_All();
    $l = count($list_car_company);
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
                    <th>Mã Hãng Xe</th>
                    <th>Tên Hãng Xe</th>
                    <th>Hình Ảnh</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($list_car_company as $v) {
                    ?>
                    <tr align="center">
                        <td>
                            <?php echo $v->car_company_id; ?>
                        </td>
                        <td>
                            <?php echo $v->car_company_code; ?>
                        </td>
                        <td>
                            <?php echo $v->car_company_name; ?>
                        </td>
                        <td>
                            <img style="width: 60px; height: 33px;" src="../img/<?php
                            echo $v->photo;
                            ?>" alt="">
                        </td>
                        <td align="center">

                            <!-- Xóa car_company -->
                            <a
                                href="../car_company/car_companyAct.php?req=car_companyDelete&car_company_id=<?php echo $v->car_company_id; ?>">
                                <img class="iconimg" src="../img/delete.png" width="20px" height="20px" />
                            </a>

                            <!-- cập nhật-->
                            <a href="../admin/index.php?req=car_companyUpdate&car_company_id=<?php echo $v->car_company_id; ?>">
                                <img class="iconimg" src="../img/update.png" width="20px" height="20px" />
                            </a>

                            <!-- khóa car_company -->
                            <?php
                            if ($v->ability == 0) {
                                ?>
                                <a
                                    href="../car_company/car_companyAct.php?req=car_companySetlock&car_company_id=<?php echo $v->car_company_id; ?> &ability=<?php echo $v->ability; ?>">
                                    <img src="../img/lock.png" alt="" class="iconimg" width="20px" height="20px">
                                </a>
                                <?php
                            } else {
                                ?>
                                <a
                                    href="../car_company/car_companyAct.php?req=car_companySetlock&car_company_id=<?php echo $v->car_company_id; ?>&ability=<?php echo $v->ability; ?>">
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