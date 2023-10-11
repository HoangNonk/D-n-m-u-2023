<?php if (isset($_SESSION['dm_err'])) {
    unset($_SESSION['dm_err'])
?>
    <script>
        alert(`Chưa có danh mục!\nVui lòng thêm danh mục trước !`)
        window.location.href = 'index.php?act=adddm'
    </script>
<?php } ?>

<!-------------------------------------------------------------------------------------------->
<?php if (isset($_SESSION['dm_empty'])) {
    unset($_SESSION['dm_empty'])
?>
    <script>
        alert(`Chưa chọn danh mục !`);
    </script>
<?php } ?>

<!-------------------------------------------------------------------------------------------->
<?php if (isset($_SESSION['add'])) {
    unset($_SESSION['add'])
?>
    <script>
        alert(`Thêm thành công !`);
    </script>
<?php } ?>

<!-------------------------------------------------------------------------------------------->
<?php if (isset($_SESSION['delete'])) {
    unset($_SESSION['delete'])
?>
    <script>
        alert(`Xóa thành công !`);
    </script>
<?php } ?>

<!-------------------------------------------------------------------------------------------->
<?php if (isset($_SESSION['edit'])) {
    unset($_SESSION['edit'])
?>
    <script>
        alert(`Cập nhật thành công !`);
    </script>
<?php } ?>

<!-------------------------------------------------------------------------------------------->
<?php if (isset($_SESSION['signup'])) {
    unset($_SESSION['signup'])
?>
    <script>
        alert(`Đăng kí thành công !`);
        window.location.href = 'index.php?act=dangnhap'
    </script>
<?php } ?>

<!-------------------------------------------------------------------------------------------->
<?php if (isset($_SESSION['signed'])) {
    $_SESSION['active'] = $_SESSION['signed'];
    unset($_SESSION['signed']);
?>
    <script>
        alert(`Xin chào <?= $_SESSION['nameuser'] ?> !`);
        window.location.href = 'index.php'
    </script>
<?php } ?>

<!-------------------------------------------------------------------------------------------->
<?php if (isset($_SESSION['logout'])) {
    unset($_SESSION['logout']);
    unset($_SESSION['active']);
    unset($_SESSION['iduser']);
    unset($_SESSION['nameuser']);
?>
    <script>
        alert(`Đăng xuất thành công !`);
    </script>
<?php } ?>

<!-------------------------------------------------------------------------------------------->
<?php if (isset($_SESSION['updateinfo'])) { ?>
    <script>
        alert(`Cập nhật thành công`);
        window.location.href = 'index.php?act=info&id=<?= $_SESSION['updateinfo'] ?>'
    </script>
<?php
    unset($_SESSION['updateinfo']);
} ?>

<!-------------------------------------------------------------------------------------------->
<?php if (isset($_SESSION['updatemk'])) { ?>
    <script>
        alert(`Cập nhật thành công`);
        window.location.href = 'index.php?act=info&id=<?= $_SESSION['updatemk'] ?>'
    </script>
<?php
    unset($_SESSION['updatemk']);
} ?>

<!-------------------------------------------------------------------------------------------->
<?php if (isset($_SESSION['repass_fail'])) { ?>
    <script>
        alert(`Mật khẩu không khớp`);
        window.location.href = 'index.php?act=info&id=<?= $_SESSION['repass_fail'] ?>'
    </script>
<?php
    unset($_SESSION['repass_fail']);
} ?>

<!-------------------------------------------------------------------------------------------->
<?php if (isset($_SESSION['wronginfo'])) {
    unset($_SESSION['wronginfo']);
?>
    <script>
        alert(`Thông tin sai\n[ ! ] Email / SDT đăng kí không đúng !`);
    </script>
<?php } ?>

