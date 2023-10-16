<?php
include '../model/notification.php';
?>

<div class="row">
<div class="row">
        <h4 class="title_cate">DANH SÁCH KHÁCH HÀNG</h4>
    </div>
    <form action="index.php?act=listkh" method="POST" class="row formsearch">
        <input id="search" type="text" name="kyw" placeholder="Nhập thông tin tài khoản">
        <button type="submit" name="search"><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>
    <form action="index.php?act=xoakh" method="POST" class="row formcontent">
        <div class="row mb10 formds">
            <table>
                <tr>
                    <th><i class="fa-solid fa-square-check fa-xl"></i></th>
                    <th>ID</th>
                    <!-- <th>Avatar</th> -->
                    <th>User</th>
                    <th>Pass</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>SDT</th>
                    <th>Vai trò</th>
                    <th>
                        <a href="index.php?act=addkh">
                            <i class="fa-solid fa-circle-plus"></i> Thêm
                        </a>
                    </th>
                </tr>

                <?php if (count($list_kh) == 0) { ?>
                    <tr>
                        <td colspan="9" style="text-align:center" colspan="4">Chưa có tài khoản đăng kí nào</td>
                    </tr>
                    <?php } else {
                    foreach ($list_kh as $kh) {
                        extract($kh);
                        $suakh = "index.php?act=suakh&id=" . $id;
                        $xoakh = "index.php?act=xoakh&id=" . $id;
                    ?>
                        <tr>
                            <td>
                                <?php if ($id != $_SESSION['iduser']) { ?>
                                    <input name="checkbox[]" value=<?= $id ?> type="checkbox">
                                <?php } ?>
                            </td>
                            <td><?= $id ?></td>
                            <td>
                                <img width="60px" src="../upload/<?= $img ?>" alt="">
                                <?= $user ?>
                            </td>
                            <td><?= $pass ?></td>
                            <td><?= $email ?></td>
                            <td><?= $address ?></td>
                            <td><?= $tel ?></td>
                            <td><?= ($role == 1) ? 'NV quản trị' : 'KH'; ?></td>
                            <td>
                                <div class="btnbox">
                                    <button class="button edit">
                                        <a href="<?= $suakh ?>"><i class="fa-solid fa-pen"></i></a>
                                    </button>
                                    <?php if ($id != $_SESSION['iduser']) { ?>
                                        <button class="button delete">
                                            <a onclick="return confirm(`Xóa các mục này ?\n\n[ ! ] Việc này cũng sẽ xóa các thông tin liên quan :\n* Thông tin của tài khoản\n* Bình luận của tài khoản`)" href="<?= $xoakh ?>"><i class="fa-solid fa-trash"></i></a>
                                        </button>
                                    <?php } ?>
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
            <input class="delete_all" type="submit" onclick="return confirm(`Xóa các mục này ?\n\n[ ! ] Việc này cũng sẽ xóa các thông tin liên quan :\n* Thông tin của tài khoản\n* Bình luận của tài khoản`)" name="delete_checkbox" value="Xóa các mục đã chọn" />
        </div>
    </form>
</div>