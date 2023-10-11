

<div class="row">
    <div class="row formtitle">
        <h1>SỬA THÔNG TIN TÀI KHOẢN #<?= $kh['id'] ?></h1>
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
                <input type="text" name="tkkh" value="<?= $kh['user'] ?>" id="" disabled>
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
            <div class="row mb10">
                <input type="submit" name="update" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listkh"><input type="button" value="Danh sách"></a>
            </div>
        </form>
    </div>
</div>