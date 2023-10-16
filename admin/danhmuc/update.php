

<div class="row">
    <div class="row">
        <h4 class="title_cate">SỬA THÔNG TIN DANH MỤC  #<?= $dm['id'] ?></h4>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=updatedm" method="POST">
            <div class="row mb10">
                Mã loại <br>
                <input type="text" name="maloai" id="" value=<?= $dm['id'] ?> disabled>
                <input type="hidden" name="id" value=<?= $dm['id'] ?>>
            </div>
            <div class="row mb10">
                Tên loại <br>
                <input type="text" name="tenloai" value="<?= $dm['name'] ?>" id="">
            </div>
            <div class="row mb10">
                <input type="submit" name="update" value="Cập nhật">
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