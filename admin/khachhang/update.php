

<div class="row">
<div class="row">
        <h4 class="title_cate">SỬA THÔNG TIN KHÁCH HÀNG #<?= $kh['id'] ?></h4>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=updatekh" method="POST">
            <div class="row mb10">
                <p class="mb10">Mã khách hàng</p>
                <input type="text" value="AUTO INCREMENT - Tự động tăng" name="makh" id="" value="<?= $kh['id'] ?>" disabled>
                <input type="hidden" name="id" value="<?= $kh['id'] ?>">
            </div>
            <div class="row mb10">
                <p class="mb10">Tài khoản</p>
                <input type="text" name="" value="<?= $kh['user'] ?>" id="" disabled>
                <input type="hidden" name="tkkh" value="<?= $kh['user'] ?>" id="">
            </div>
            <div class="row mb10">
                <p class="mb10">Mật khẩu</p>
                <input type="password" name="mkkh" value="<?= $kh['pass'] ?>" id="" required>
            </div>
            <div class="row mb10">
                <p class="mb10">Email</p>
                <input type="email" name="email" value="<?= $kh['email'] ?>" id="" pattern="/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/" required>
            </div>
            <div class="row mb10">
                <p class="mb10">Địa chỉ</p>
                <input type="text" value="<?= $kh['address'] ?>" name="diachikh" id="">
            </div>
            <div class="row mb10">
                <p class="mb10">SDT</p>
                <input type="tel" value="<?= $kh['tel'] ?>" pattern="034[0-9]{7,8}" name="sdtkh" id="" required>
            </div>
            <div class="row mb10">
                <p class="mb10">Vai trò</p>
                <select name="vaitro" id="" required>
                    <option value="">Chọn vai trò</option>
                    <option value="1" <?= $kh['role'] == 1 ? 'selected' : ''?>>Nhân viên quản trị</option>
                    <option value="2" <?= $kh['role'] == 2 ? 'selected' : ''?>>Khách hàng</option>
                </select>
            </div>
            <?php if (isset($thongbao) && $thongbao != '') { ?>
                    <div class="row">
                        <p style="color: red;"><?= $thongbao ?></p>
                    </div>
                <?php } ?>
            <div class="row mb10">
                <input type="submit" name="update" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listkh"><input type="button" value="Danh sách"></a>
            </div>
        </form>
    </div>
</div>