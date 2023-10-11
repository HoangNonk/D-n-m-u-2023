<?php include 'model/notification.php' ?>
<div class="boxcenter">
    <div class="row mb header">
        <div class="header_title">
            <img width="80px" src="upload/logo.png" alt="">
            <h1 style="margin-left: 10px">X Shop</h1>
        </div>
        <div class="sign">
            <?php if (isset($_SESSION['active']) && (count($list_kh) > 0)) {
                if ($_SESSION['active'] == 1) { ?>
                    <a href="admin/index.php"><i class="fa-brands fa-atlassian"></i> Quản trị</a>
                    <a href="index.php?act=info&id=<?= $_SESSION['iduser'] ?>"><i class="fa-solid fa-user-pen"></i> <?= $_SESSION['nameuser'] ?></a>
                    <a onclick="return confirm('Đăng xuất ?')" href="index.php?act=dangxuat"><i class="fa-solid fa-arrow-right-from-bracket"></i> Đăng xuất</a>
                <?php } else { ?>
                    <a href="#"><i class="fa-solid fa-cart-shopping"></i> Giỏ hàng</a>
                    <a href="index.php?act=info&id=<?= $_SESSION['iduser'] ?>"><i class="fa-solid fa-user"></i> <?= $_SESSION['nameuser'] ?></a>
                    <a onclick="return confirm('Đăng xuất ?')" href="index.php?act=dangxuat"><i class="fa-solid fa-arrow-right-from-bracket"></i> Đăng xuất</a>
                <?php } ?>
            <?php } else { ?>
                <a href="index.php?act=dangnhap"><i class="fa-solid fa-user"></i> Đăng nhập/Đăng ký </a>
                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            <?php } ?>

        </div>
    </div>
    <div class="row mb menu flex between">
        <ul style="width: 60%;" class="flex between">
            <li><a href="index.php">Trang chủ</a></li>
            <li class="dropdown">Danh mục
                <ul class="dropdown-list">
                    <?php foreach ($list_danhmuc as $dm) { 
                            extract($dm)    
                    ?>
                        <li><a style="" href="index.php?act=sanpham&iddm=<?= $id ?>"><?= $name ?></a></li>
                    <?php } ?>
                </ul>
            </li>
            <li><a href="index.php?act=sanpham">Sản phẩm</a></li>
            <li><a href="index.php?act=gioithieu">Giới thiệu</a></li>
            <li><a href="index.php?act=lienhe">Liên hệ</a></li>
            <li><a href="index.php?act=gopy">Góp ý</a></li>
            <li><a href="index.php?act=hoidap">Hỏi đáp</a></li>
        </ul>
        <form class="searching" action="index.php?act=sanpham" method="POST">
            <input class="" type="search" placeholder="Tìm kiếm sản phẩm" name="kyw">
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i> Tìm</button>
        </form>
    </div>