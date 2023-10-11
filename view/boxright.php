    <div class="boxright">
        <div class="row mb">
            <div class="boxtitle">DANH MỤC</div>
            <div class="boxcontent2 menudoc">
                <ul>
                    <?php foreach ($list_danhmuc as $dm) {
                        extract($dm);
                    ?>
                        <li><a href="index.php?act=sanpham&iddm=<?= $id ?>"><?= $name ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="row mb10 searchbox">
            <form action="index.php?act=sanpham" method="POST">
                <label for="">Tìm kiếm sản phẩm</label> <br>
                <input class="mb10" type="search" name="kyw">
                <input type="submit" value="Tìm kiếm">
            </form>
        </div>
        <div class="row">
            <div class="boxtitle">TOP 10 YÊU THÍCH</div>
            <div class="row boxcontent">
                <?php foreach ($list_top10 as $sp) {
                    extract($sp);
                ?>
                    <div class="row mb10 top10" onclick="return window.location.href = 'index.php?act=chitiet&detail=<?= $id ?>'">
                        <img src="upload/<?= $img ?>" alt="">
                        <p><?= $name ?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>