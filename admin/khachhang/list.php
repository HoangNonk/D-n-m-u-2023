<?php 
    include '../model/notification.php';
?>

<div class="row">
    <div class="row formtitle mb10">
        <h1 class="">DANH SÁCH KHÁCH HÀNG</h1>
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
                    <th>User</th>
                    <th>Pass</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>SDT</th>
                    <th>Vai trò</th>
                    <th>THAO TÁC</th>
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
                            <td><input name="checkbox[]" value=<?= $id ?> type="checkbox"></td>
                            <td><?= $id ?></td>
                            <td><?= $user ?></td>
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
                                    <button class="button delete">
                                        <a onclick="return confirm(`Xóa tài khoản này ?\n[ Các bình luận từ người dùng này cũng sẽ bị xóa ]`)" href="<?= $xoakh ?>"><i class="fa-solid fa-trash"></i></a>
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
            <input class="delete_all" type="submit" onclick="return confirm(`Xóa các mục này ?\n[ Đồng nghĩa với việc xóa hết các tài khoản đã chọn và các bình luận của các tài khoản ]`)" name="delete_checkbox" value="Xóa các mục đã chọn" />
            <a href="index.php?act=addkh">
                <input type="button" value="Thêm tài khoản" />
            </a>
        </div>
    </form>

    <!-- <script>
        const delete_all = document.querySelector('.delete_all');
        const checkbox = document.querySelectorAll('input[type="checkbox"]');

        for (let index = 0; index < checkbox.length; index++) {
            const box = checkbox[index];
            box.addEventListener('change', () => {
                box.checked ? delete_all.style.display = "inline-block" :
                    delete_all.style.display = "none"
            })
        }

        function checkAll() {
            for (let index = 0; index < checkbox.length; index++) {
                const box = checkbox[index];
                box.checked = true;
                delete_all.style.display = "inline-block"
            }
        }

        function checkRemoveAll() {
            for (let index = 0; index < checkbox.length; index++) {
                const box = checkbox[index];
                box.checked = false;
                delete_all.style.display = "none"
            }
        }
    </script> -->
</div>