<?php 
    include '../model/notification.php';
?>
<div class="row">
    <div class="row formtitle mb10">
        <h1>DANH SÁCH DANH MỤC</h1>
    </div>
    <form action="index.php?act=listdm" method="POST" class="row formsearch">
        <input id="search" type="text" name="kyw" placeholder="Nhập thông tin danh muc">
        <button type="submit" name="search"><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>
    <form action="index.php?act=xoadm" method="POST" class="row formcontent">
        <div class="row mb10 formds">
            <table>
                <tr>
                    <th><i class="fa-solid fa-square-check fa-xl"></i></th>
                    <th>MÃ DANH MỤC</th>
                    <th>TÊN DANH MỤC</th>
                    <th>SỐ LƯỢNG SẢN PHẨM</th>
                    <th>THAO TÁC</th>
                </tr>
                <?php if (count($listdanhmuc) == 0) { ?>
                    <tr>
                        <td style="text-align:center" colspan="4">Chưa có danh mục sản phẩm nào</td>
                    </tr>
                    <?php } else {
                    foreach ($listdanhmuc as $dm) {
                        extract($dm);
                        $suadm = "index.php?act=suadm&id=" . $id;
                        $xoadm = "index.php?act=xoadm&id=" . $id;
                    ?>
                        <tr>
                            <td><input name="checkbox[]" value=<?= $id ?> type="checkbox"></td>
                            <td><?= $id ?></td>
                            <td><?= $name ?></td>
                            <td><?= $sl = join(', ',sl_sanpham($id)) ?></td>
                            <td>
                                <div class="btnbox">
                                    <button class="button edit">
                                        <a href="<?= $suadm ?>"><i class="fa-solid fa-pen"></i></a>
                                    </button>
                                    <button class="button delete">
                                        <!-- <a onclick="return confirm(`Xóa danh mục này ?\n[ Đồng nghĩa với việc xóa hết các sản phẩm trong danh mục và các bình luận liên quan]`)" href="<?= $xoadm ?>"><i class="fa-solid fa-trash"></i></a> -->
                                        <a onclick="return confirm(` Xóa danh mục này ?\n\n[ ! ] Việc này cũng sẽ xóa các thông tin liên quan :\n* Các sản phẩm của danh mục\n* Các bình luận của sản phẩm`)" 
                                        href="<?= $xoadm ?>"><i class="fa-solid fa-trash"></i></a>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
            </table>
        </div>
        <div class="row mb20">
            <input type="button" onclick="checkAll()" value="Chọn tất cả" />
            <input type="button" onclick="checkRemoveAll()" value="Bỏ chọn tất cả" />
            <input class="delete_all" type="submit" onclick="return confirm(` Xóa các danh mục này ?\n\n[ ! ] Việc này cũng sẽ xóa các thông tin liên quan :\n* Các sản phẩm của danh mục\n* Các bình luận của sản phẩm`)" name="delete_checkbox" value="Xóa các mục đã chọn" />
            <a href="index.php?act=adddm">
                <input type="button" value="Thêm danh mục" />
            </a>
        </div>
    </form>
</div>