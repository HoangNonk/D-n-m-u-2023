<?php
session_start();
include 'model/pdo.php';
include 'model/sanpham.php';
include 'model/danhmuc.php';
include 'model/binhluan.php';
include 'model/khachhang.php';

$list_danhmuc = list_danhmuc('');
$list_sanpham = list_sanpham('', 0);
$list_sanpham_home = list_sanpham_home();
$list_kh = list_kh('');
$list_top10 = list_top10();

include 'view/header.php';

if (isset($_GET['act']) && $_GET['act'] != '') {
    $act = $_GET['act'];

    switch ($act) {
        case 'dangnhap':
            if (isset($_POST['dangnhap'])) {
                $list_kh = list_kh('');
                foreach ($list_kh as $kh) {
                    if ($kh['user'] == $_POST['user'] && $kh['pass'] == $_POST['pass']) {
                        $_SESSION['signed'] = $kh['role'];
                        $_SESSION['iduser'] = $kh['id'];
                        $_SESSION['nameuser'] = $kh['user'];
                    } else {
                        $thongbao = 'Tài khoản hoặc mật khẩu không đúng !';
                    }
                }
            }
            include 'view/controluser.php';
            include 'view/dangnhap.php';
            break;

        case 'dangky':
            if (isset($_POST['dangki'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                foreach ($list_kh as $kh) {
                    if ($user == $kh['user'] || $phone == $kh['tel'] || $email == $kh['email']) {
                        $same = 1;
                    } else {
                        $same = 0;
                    }
                }

                if ($same == 0) {
                    if ($_POST['pass'] == $_POST['repass']) {
                        add_kh($user, $pass, $email, $address, $phone, 2);
                        $_SESSION['signup'] = 1;
                    } else {
                        $thongbao = 'Mật khẩu không khớp !';
                    }
                }else {
                    $thongbao = 'Tài khoản / Email hoặc SDT đăng ký đã tồn tại !';
                }
            }
            include 'view/controluser.php';
            include 'view/dangky.php';
            break;

        case 'quenmk':
            if (isset($_POST['getpass'])) {
                $email_phone = $_POST['email_phone'];
                $user = $_POST['user'];
                foreach ($list_kh as $kh) {
                    if ($user == $kh['user'] && $email_phone == $kh['email'] || $email_phone == $kh['tel']) {
                        $pass = $kh['pass'];
                    } else {
                        $thongbao = 'Sai thông tin tài khoản / email hoặc sdt đăng ký';
                    }
                }
            }
            include 'view/controluser.php';
            include 'view/quenmk.php';
            break;

        case 'dangxuat';
            $_SESSION['logout'] = 1;
            include 'view/home.php';
            break;

        case 'info':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $id = $_GET['id'];
                $kh = edit_kh($id);
            }
            include 'view/controluser.php';
            include 'view/userinfo.php';
            break;

        case 'editinfo':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $id = $_GET['id'];
                $kh = edit_kh($id);
            }
            include 'view/controluser.php';
            include 'view/updateinfo.php';
            break;

        case 'updateinfo':
            if (isset($_POST['update'])) {
                $id = $_POST['id'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                update_info_user($id, $email, $phone, $address);
                $_SESSION['updateinfo'] = $id;
            }
            include 'view/controluser.php';
            include 'view/updateinfo.php';
            break;

        case 'doimk':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $id = $_GET['id'];
                $kh = edit_kh($id);
            }
            include 'view/controluser.php';
            include 'view/updatemk.php';
            break;

        case 'updatemk':
            if (isset($_POST['update'])) {
                $id = $_POST['id'];
                if ($_POST['pass'] == $_POST['repass']) {
                    $pass = $_POST['pass'];
                    update_pass_user($id, $pass);
                    $_SESSION['updatemk'] = $id;
                } else {
                    $_SESSION['repass_fail'] = $id;
                }
            }
            include 'view/controluser.php';
            include 'view/userinfo.php';
            break;

        case 'sanpham':
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
                for ($i = 0; $i < count($list_danhmuc); $i++) {
                    if ($list_danhmuc[$i]['id'] == $iddm) {
                        $ten_dm = $list_danhmuc[$i]['name'];
                        break;
                    }
                }
            } else {
                $iddm = 0;
            }

            if (isset($_POST['kyw']) && $_POST['kyw'] != '') {
                $kyw = $_POST['kyw'];
                $search_result = 'Kết quả tìm kiếm';
            } else {
                $kyw = '';
                $search_result = '';
            }

            $list_sanpham = list_sanpham($kyw, $iddm);
            include 'view/controluser.php';
            include 'view/dssanpham.php';
            break;

        case 'chitiet';
            if (isset($_GET['detail']) && ($_GET['detail'] > 0)) {
                $detail = $_GET['detail'];
                $sp = edit_sanpham($detail);
                $sp_cungloai = sp_cungloai($detail, $sp['iddm']);
                $list_bl = list_bl_5($_GET['detail']);

                $_SESSION['view'] = $sp['luotxem'];
                $_SESSION['view'] += 1;
                update_view($detail,$_SESSION['view']);
                unset($_SESSION['view']);
            }

            if (isset($_POST['send'])) {
                $idpro = $_POST['id'];
                $comment = $_POST['comment'];
                $iduser = $_SESSION['iduser'];
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $time = date('h:i:sa d/m/Y');
                add_bl($idpro, $iduser, $comment, $time);

                $detail = $idpro;
                $sp = edit_sanpham($detail);
                $sp_cungloai = sp_cungloai($detail, $sp['iddm']);
                $list_bl = list_bl_5($idpro);
                $_SESSION['commented'] = 1;
                header("location: " . $_SERVER['HTTP_REFERER']);
            }
            include 'view/controluser.php';
            include 'view/chitiet.php';
            break;

        default:
            # code...
            break;
    }
} else {
    include 'view/home.php';
}

include 'view/footer.php';
