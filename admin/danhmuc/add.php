
<div class="row">
    <div class="row formtitle">
        <h1>THÊM MỚI DANH MỤC</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=adddm" method="POST">
            <div class="row mb10">
                <p class="mb10">Mã loại</p>
                <input type="text" value="AUTO INCREMENT - Tự động tăng" name="maloai" id="" disabled>
            </div>
            <div class="row mb10">
                <p class="mb10">Tên loại</p>
                <input type="text" name="tenloai" id="" required>
            </div>
            <div class="row mb10">
                <input type="submit" name="themmoi" value="Thêm mới">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listdm"><input type="button" value="Danh sách"></a>
            </div>
            <?php
            if (isset($thongbao) && $thongbao != '') {
                echo $thongbao;
            }
            ?>
        </form>
    </div>
</div>