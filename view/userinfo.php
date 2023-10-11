<div class="row m10 flex between">
    <img width="25%" class="logo_sign" src="upload/user.png" alt="">
    <div class="row mb">
        <h3 class="title_cate">Thông tin tài khoản</h3>
        <div class="boxcontent formtaikhoan">
            <form action="index.php?act=updateinfo" method="POST">
                <div class="row mb10">
                    <p class="mb10">Tài khoản</p>
                    <input type="text" name="user" id="" value="<?= $kh['user'] ?>" disabled>
                </div>
                <div class="row mb10">
                    <p class="mb10">Email</p>
                    <input type="email" name="email" id="" pattern="/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/" value="<?= $kh['email'] ?>" disabled>
                </div>
                <div class="row mb10">
                    <p class="mb10">Địa chỉ</p>
                    <input type="text" name="address" value="<?= $kh['address'] ?>" disabled>
                </div>
                <div class="row mb10">
                    <p class="mb10">SDT</p>
                    <input type="tel" pattern="034[0-9]{7,8}" name="phone" id="" value="<?= $kh['tel'] ?>" disabled>
                </div>
            </form>
            <a href="index.php?act=editinfo&id=<?= $kh['id'] ?>"><input type="submit" name="update" value="Sửa thông tin"></a>
            <a href="index.php?act=doimk&id=<?= $kh['id'] ?>"><input type="submit" name="repass" value="Đổi mật khẩu"></a>
        </div>
    </div>
</div>