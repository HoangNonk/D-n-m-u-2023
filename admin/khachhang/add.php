<?php
include '../model/notification.php';
?>

<div class="row">
    <div class="row">
        <h4 class="title_cate">THÊM MỚI TÀI KHOẢN</h4>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=addkh" method="POST">
            <div class="row mb10">
                <p class="mb10">Mã khách hàng</p>
                <input type="text" value="AUTO INCREMENT - Tự động tăng" name="makh" id="" disabled>
            </div>
            <div class="row mb10">
                <p class="mb10">Tài khoản</p>
                <input type="text" name="tkkh" id="" required>
            </div>
            <div class="row mb10">
                <p class="mb10">Mật khẩu</p>
                <input type="password" name="mkkh" id="" required>
            </div>
            <div class="row mb10">
                <p class="mb10">Email</p>
                <input type="email" name="email" id="" pattern="/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/" required>
            </div>
            <div class="row mb10">
                <p class="mb10">Địa chỉ</p>
                <input type="text" name="diachikh" id="">
            </div>
            <div class="row mb10">
                <p class="mb10">SDT</p>
                <input type="tel" pattern="034[0-9]{7,8}" name="sdtkh" id="" required>
            </div>
            <div class="row mb10">
                <p class="mb10">Vai trò</p>
                <select name="vaitro" id="" required>
                    <option value="">Chọn vai trò</option>
                    <option value="1">Nhân viên quản trị</option>
                    <option value="2">Khách hàng</option>
                </select>
            </div>
            <?php if (isset($thongbao) && $thongbao != '') { ?>
                <div class="row">
                    <p style="color: red;"><?= $thongbao ?></p>
                </div>
            <?php } ?>
            <div class="row mb10">
                <input type="submit" name="themmoi" value="Thêm mới">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listkh"><input type="button" value="Danh sách"></a>
            </div>
        </form>
    </div>
</div>