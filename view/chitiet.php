<?php if (isset($_SESSION['commented'])) {
    unset($_SESSION['commented'])
?>
    <script>
        setTimeout(() => {
            comment.scrollIntoView({ behavior: "smooth" })
        },1000)
    </script>
<?php } ?>
<div class="row mb">
    <div class="boxleft mr">
        <div class="row detail mb10">
            <div class="info_pro">
                <div class="detail_pro">
                    <h3><?= $sp['name'] ?><br><span><?= $sp['price'] ?> $</span></h3>
                    <p>Lượt xem: <?= $sp['luotxem'] += 1 ?></p>
                    <p>Mã sản phẩm: #<?= $sp['id'] ?></p>
                    <p>Danh mục của sản phẩm: <?php foreach ($list_danhmuc as $dm) {
                                                    if ($dm['id'] == $sp['iddm']) {
                                                        echo $dm['name'];
                                                    }
                                                } ?></p>
                    <button>Thêm vào giỏ hàng <i style="font-size:1.2vw" class="fa-solid fa-cart-arrow-down"></i></button>
                </div>
                <img src="upload/<?= $sp['img'] ?>" alt="">

            </div>
            <div class="desc">
                <h5>Mô tả chi tiết</h5>
                <p><?= $sp['mota'] ?></p>
            </div>
        </div>
        <div class="row mb10">
            <div class="detail_pro">
                <h4>Nhận xét & Đánh giá</h4>
            </div>
            <div id="boxcomment" class="row boxcontent">
                <?php if (count($list_bl) == 0) { ?>
                    <p>Chưa có bình luận</p>
                    <?php } else {
                    foreach ($list_bl as $bl) {
                        if ($sp['id'] == $bl['idpro']) { ?>
                            <div class="commentbox row mb10 flex al-start mb10">
                                <img width="40px" src="upload/user.png" alt="">
                                <div class="messbox row">
                                    <?php foreach ($list_kh as $kh) {
                                        if ($kh['id'] == $bl['iduser']) { ?>
                                            <p class="nameuser"><?= $kh['user'] ?></p>
                                        <?php } ?>
                                    <?php } ?>
                                    <p class="cmt"><?= $bl['noidung'] ?></p>
                                    <p class="time"><?= $bl['ngaybinhluan'] ?></p>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>
                <hr>
                <?php if (isset($_SESSION['iduser'])) { ?>
                    <form class="formcomment" action="index.php?act=chitiet" method="POST">
                        <input type="hidden" name="id" value="<?= $sp['id'] ?>">
                        <input type="text" id="" name="comment" placeholder="Viết bình luận" pattern=".*\S+.*" title="Không được để trống" required spellcheck="true">
                        <button type="submit" name="send"><i class="fa-regular fa-comment-dots"></i></button>
                    </form>
                <?php } else { ?>
                    <a href="index.php?act=dangnhap"><button class="signin">Đăng nhập để bình luận</button></a>
                <?php } ?>
            </div>
        </div>
        <div class="row">
            <div class="detail_pro">
                <h4>Các sản phẩm cùng loại</h4>
            </div>
            <ul class="cungloai">
                <?php if (count($sp_cungloai) > 0) { ?>
                    <?php foreach ($sp_cungloai as $sp) {
                        extract($sp);
                    ?>
                        <li onclick="return window.location.href = 'index.php?act=chitiet&detail=<?= $id ?>'">
                            <p># <?= $name ?></p>
                        </li>
                    <?php } ?>
                <?php } else { ?>
                    <li>
                        <p># Không có sản phẩm nào</p>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <?php include 'boxright.php'; ?>
</div>