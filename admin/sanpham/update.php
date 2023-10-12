<div class="row">
    <div class="row formtitle">
        <h1>SỬA THÔNG TIN SẢN PHẨM #<?= $sp['id'] ?></h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=updatesp" enctype="multipart/form-data" method="POST">
            <div class="row mb10">
                <p class="mb10">Mã sản phẩm</p>
                <input type="text" value="AUTO INCREMENT - Tự động tăng" name="masp" id="" value="<?= $sp['id'] ?>" disabled>
                <input type="hidden" name="id" value="<?= $sp['id'] ?>">
            </div>
            <div class="row mb10">
                <p class="mb10">Danh mục</p>
                <select name="danhmuc" id="">
                    <?php foreach ($listdanhmuc as $dm) {
                        extract($dm);
                    ?>
                        <option value=<?= $id ?> <?= $id === $sp['iddm'] ? "selected" : ''; ?> ><?= $name ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="row mb10">
                <p class="mb10">Tên sản phẩm</p>
                <input type="text" name="tensp" value="<?= $sp['name'] ?>" id="" required>
            </div>
            <div class="row mb10">
                <p class="mb10">Giá sản phẩm</p>
                <input type="number" min="50" max="1500" name="giasp" value="<?= $sp['price'] ?>" id="" required>
            </div>
            <div class="row mb10">
                <p class="mb10">Hình ảnh sản phẩm</p>
                <img width="30%" height="10%" src="../upload/<?= $sp['img'] ?>" alt="">
                <input type="hidden" name="anhsp" id="" value="<?= $sp['img'] ?>">
                <p class="mb10"><?= $sp['img'] ?></p>
                <input type="file" name="anhsp" accept=".jpg, .jpeg, .png, .jfif, .gif" id="">
            </div>
            <div class="row mb10">
                <p class="mb10">Mô tả</p>
                <textarea name="mota" id="mota" cols="30" rows="10" value=""><?= $sp['mota'] ?></textarea>
            </div>
            <div class="row mb10">
                <input type="submit" name="update" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
            </div>
        </form>
    </div>
</div>