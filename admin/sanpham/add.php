
<?php 
    include '../model/notification.php';
?>
<div class="row">
    <div class="row formtitle">
        <h1>THÊM MỚI SẢN PHẨM</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=addsp" enctype="multipart/form-data" method="POST">
            <div class="row mb10">
                <p class="mb10">Mã sản phẩm</p>
                <input type="text" value="AUTO INCREMENT - Tự động tăng" name="masp" id="" disabled>
            </div>
            <div class="row mb10">
                <?php if (count($listdanhmuc) == 0) { ?>
                    <input type="hidden" value="not_exist" name="danhmuc" id="">
                    <p class="mb10">Chưa có danh mục</p>
                    <button class="button add">
                        <a href="index.php?act=adddm">
                            Thêm danh mục
                        </a>
                    </button>
                <?php } else { ?>
                    <p class="mb10">Danh mục</p>
                    <select name="danhmuc" id="">
                        <option value=''>Chọn danh mục</option>
                        <?php foreach ($listdanhmuc as $dm) {
                            extract($dm);
                        ?>
                            <option value=<?= $id ?>><?= $name ?></option>
                        <?php } ?>
                    </select>
                <?php } ?>
            </div>
            <div class="row mb10">
                <p class="mb10">Tên sản phẩm</p>

                <input type="text" name="tensp" id="" required>
            </div>
            <div class="row mb10">
                <p class="mb10">Giá sản phẩm ($)</p>
                <input type="number" min="100" max="1500" name="giasp" id="" required>
            </div>
            <div class="row mb10">
                <p class="mb10">Hình ảnh sản phẩm</p>
                <input type="file" name="anhsp" accept=".jpg, .jpeg, .png, .jfif, .gif" id="" required>
            </div>
            <div class="row mb10">
                <p class="mb10">Mô tả</p>
                <textarea name="mota" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="row mb10">
                <input type="submit" name="themmoi" value="Thêm mới">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
            </div>
        </form>
    </div>
</div>