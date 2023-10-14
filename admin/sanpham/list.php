<?php
include '../model/notification.php';
?>
<div class="row">
    <div class="row">
        <h4 class="title_cate">DANH SÁCH SẢN PHẨM</h4>
    </div>
    <form action="index.php?act=listsp" method="POST" class="row formsearch">
        <select name="iddm" id="">
            <option value="" selected>Danh mục</option>
            <?php foreach ($listdanhmuc as $dm) {
                extract($dm);
            ?>
                <option value=<?= $id ?>><?= $name ?></option>
            <?php } ?>
        </select>
        <input id="search" type="text" name="kyw" placeholder="Nhập thông tin sản phẩm">
        <button type="submit" name="search"><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>
    <form action="index.php?act=xoasp" method="POST" class="row formcontent">
        <div class="row mb10 formds">
            <table>
                <tr>
                    <th><i class="fa-solid fa-square-check fa-xl"></i></th>
                    <th>MÃ SP</th>
                    <th>Danh mục</th>
                    <th>TÊN</th>
                    <th>ẢNH</th>
                    <th class="desc">MÔ TẢ</th>
                    <th>GIÁ</th>
                    <th>View <i class="fa-solid fa-eye"></i></th>
                    <th>
                        <a href="index.php?act=addsp">
                            <i class="fa-solid fa-circle-plus"></i> Thêm
                        </a>
                    </th>
                </tr>
                <?php if (count($list_sanpham) == 0) { ?>
                    <tr>
                        <td style="text-align:center" colspan="9">Chưa có sản phẩm nào</td>
                    </tr>
                    <?php } else {
                    foreach ($list_sanpham as $sp) {
                        extract($sp);
                        $hinh = '../upload/' . $img;
                        $suasp = "index.php?act=suasp&id=" . $id;
                        $xoasp = "index.php?act=xoasp&id=" . $id;
                    ?>
                        <tr>
                            <td><input name="checkbox[]" value=<?= $id ?> type="checkbox"></td>
                            <td><?= $id ?></td>
                            <td style="text-align: start">
                                <?php foreach ($listdanhmuc as $dm) {
                                    if ($dm['id'] == $iddm) {
                                        echo '#' . $iddm . ' - ' . $dm['name'];
                                    }
                                } ?>
                            </td>
                            <td><?= $name ?></td>
                            <td>
                                <img width="100px" src="<?= $hinh ?>" alt="<?= $hinh ?>">
                            </td>
                            <td style="text-align: start"><?= $mota ?></td>
                            <td><?= $price ?> $</td>
                            <td><?= $luotxem ?></td>
                            <td>
                                <div class="btnbox">
                                    <button class="button edit">
                                        <a href="index.php?act=suasp&id=<?= $id ?>"><i class="fa-solid fa-pen"></i></a>
                                    </button>
                                    <button class="button delete">
                                        <a onclick="return confirm(`Xóa các sản phẩm này ?\n\n[ ! ] Việc này cũng sẽ xóa các thông tin liên quan :\n* Thông tin của sản phẩm\n* Bình luận về sản phẩm`)" href="index.php?act=xoasp&id=<?= $id ?>"><i class="fa-solid fa-trash"></i></a>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>

            </table>
        </div>
        <div class="row mb10">
            <input type="button" onclick="checkAll()" value="Chọn tất cả" />
            <input type="button" onclick="checkRemoveAll()" value="Bỏ chọn tất cả" />
            <input class="delete_all" type="submit" name="delete_checkbox" onclick="return confirm(`Xóa các sản phẩm này ?\n\n[ ! ] Việc này cũng sẽ xóa các thông tin liên quan :\n* Thông tin của sản phẩm\n* Bình luận về sản phẩm`)" value="Xóa các mục đã chọn" />
        </div>
    </form>
</div>