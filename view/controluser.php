<?php include 'model/notification.php' ?>
<div class="boxcenter">
    <div class="row mb header">
        <div class="header_title">
            <img width="80px" src="upload/logo.png" alt="">
            <h1 style="margin-left: 10px">X Shop</h1>
        </div>
        <div class="sign">
            <?php if (isset($_SESSION['active']) && isset($_SESSION['iduser']) && isset($_SESSION['nameuser'])) {
                if ($_SESSION['active'] == 1) { ?>
                    <a href="admin/index.php"><i class="fa-brands fa-atlassian"></i> Quản trị</a>
                    <a href="index.php?act=info&id=<?= $_SESSION['iduser'] ?>"><i class="fa-solid fa-user"></i> <?= $_SESSION['nameuser'] ?></a>
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
    <div class="row mb menu">
        <ul>
            <li><a href="index.php">Trang chủ</a></li>
            <li><a href="index.php?act=gioithieu">Giới thiệu</a></li>
            <li><a href="index.php?act=lienhe">Liên hệ</a></li>
            <li><a href="index.php?act=gopy">Góp ý</a></li>
            <li><a href="index.php?act=hoidap">Hỏi đáp</a></li>
        </ul>
    </div>