<div class="row m10 flex between">
    <img width="25%" class="logo_sign" src="upload/edit.png" alt="">
    <div class="row mb">
        <h3 class="title_cate">Sửa thông tin</h3>
        <div class="boxcontent formtaikhoan">
            <form action="index.php?act=updateinfo" method="POST">
                <input type="hidden" value="<?= $kh['id'] ?>" name="id" id="">
                <div class="row mb10">
                    <p class="mb10">Email</p>
                    <input type="email" name="email" id="" pattern="/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/" value="<?= $kh['email'] ?>" required>
                </div>
                <div class="row mb10">
                    <p class="mb10">Địa chỉ</p>
                    <input type="text" value="<?= $kh['address'] ?>" name="address" id="">
                </div>
                <div class="row mb10">
                    <p class="mb10">SDT</p>
                    <input type="tel" pattern="034[0-9]{7,8}" name="phone" id="" value="<?= $kh['tel'] ?>" required>
                </div>
                <input type="submit" name="update" value="Cập nhật">
            </form>
        </div>
    </div>
</div>