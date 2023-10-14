<?php
include '../model/notification.php';
?>
<div class="row">
    <h4 class="title_cate">BẢNG THỐNG KÊ</h4>
    <form action="index.php?act=xoasp" method="POST" class="row formcontent">
        <div class="row mb10 formds">
            <table>
                <tr>
                    <th>MÃ</th>
                    <th>Danh mục</th>
                    <th>SLSP</th>
                    <th>Giá thấp nhất</th>
                    <th>Giá cao nhất</th>
                    <th>Giá trung bình</th>
                </tr>
                <?php foreach ($thongke as $tk) {
                    extract($tk)
                ?>
                    <tr>
                        <td><?= $id ?></td>
                        <td><?= $name ?></td>
                        <td><?= $soluong ?></td>
                        <td style="text-align: start; padding-left: 3%">
                            <?php foreach ($list_sanpham as $sp) {
                                if ($gia_min == $sp['price']) {
                            ?>
                                    <?= '#' . $sp['id'] . ' - ' . $sp['name'] . ' - ' ?>
                                <?php break;
                                } ?>
                            <?php } ?>
                            <?= $gia_min ?> $
                        </td>
                        <td style="text-align: start; padding-left: 3%">
                            <?php foreach ($list_sanpham as $sp) {
                                if ($gia_max == $sp['price']) {
                            ?>
                                    <?= '#' . $sp['id'] . ' - ' . $sp['name'] . ' - ' ?>
                                <?php break;
                                } ?>
                            <?php } ?>
                            <?= $gia_max ?> $
                        </td>

                        <td><?= $gia_avg ?> $</td>
                    </tr>
                <?php } ?>
            </table>
        </div>
        <div class="row mb10">
            <a href="index.php?act=bieudo">
                <input type="button" value="Biểu đồ chi tiết" />
            </a>
        </div>
    </form>
</div>