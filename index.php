<?php
session_start();
include 'model/pdo.php';
include 'model/sanpham.php';
include 'model/danhmuc.php';
include 'model/binhluan.php';
include 'model/khachhang.php';
include 'model/giohang.php';

$list_danhmuc = list_danhmuc('');
$list_sanpham = list_sanpham('', 0);
$list_sanpham_home = list_sanpham_home();
$list_kh = list_kh('');
$list_top = list_top();

if (isset($_SESSION['iduser'])) {
    $giohang = list_giohang($_SESSION['iduser']);
}

include 'view/header.php';

if (isset($_GET['act']) && $_GET['act'] != '') {
    $act = $_GET['act'];

    switch ($act) {
        case 'giohang':
            $sl = tongsanpham($_SESSION['iduser']);
            $total = tongtien($_SESSION['iduser']);
            include 'view/controluser.php';

            if (isset($_POST['product_id'])) {
                $idpro = $_POST['product_id'];

                $same = 0;
                foreach ($giohang as $row) {
                    if ($idpro == $row['idpro']) {
                        $sl = $row['soluong'] + 1;
                        $same = 1;
                        update_soluong($sl, $idpro);
                        break;
                    }
                }

                if ($same == 0) {
                    $_SESSION['idpro'] = $idpro;
                    $sp = edit_sanpham($idpro);
                    $iduser = $_SESSION['iduser'];
                    $tensp = $sp['name'];
                    $anhsp = $sp['img'];
                    $gia = $sp['price'];
                    $sl = $soluong + 1;
                    them_vao_giohang($iduser, $idpro, $tensp, $anhsp, $gia, $sl);
                }
            }
            $giohang = list_giohang($_SESSION['iduser']);
            include 'view/giohang.php';
            break;

        case 'xoasp_giohang':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sp_giohang($_GET['id'], $_SESSION['iduser']);
            } else {
                //  Xóa danh mục khi chọn checkbox
                if (isset($_POST['delete_checkbox']) && isset($_POST['checkbox'])) {
                    delete_checkbox_sanpham($_POST['checkbox']);
                    $_SESSION['delete'] = '1';
                } else {
                    $_SESSION['checkbox_err'] = '1';
                }
            }
            $sl = tongsanpham($_SESSION['iduser']);
            $total = tongtien($_SESSION['iduser']);
            $giohang = list_giohang($_SESSION['iduser']);
            include 'view/controluser.php';
            include 'view/giohang.php';
            break;

        case 'dangnhap':
            if (isset($_POST['dangnhap'])) {
                if (count($list_kh) > 0) {
                    $list_kh = list_kh('');
                    foreach ($list_kh as $kh) {
                        if ($kh['user'] == $_POST['user'] && $kh['pass'] == $_POST['pass']) {
                            $_SESSION['signed'] = $kh['role'];
                            $_SESSION['iduser'] = $kh['id'];
                            $_SESSION['nameuser'] = $kh['user'];
                            $_SESSION['avatar'] = $kh['img'];
                        } else {
                            $thongbao = 'Tài khoản hoặc mật khẩu không đúng !';
                        }
                    }
                } else {
                    $thongbao = 'Tài khoản hoặc mật khẩu không đúng !';
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

                $file = $_FILES['anh'];
                $file_name = str_replace(' ', '', $file['name']);
                $folder = 'upload/';


                $same = 0;
                foreach ($list_kh as $kh) {
                    if ($user == $kh['user']) {
                        $same = 1;
                        $thongbao = 'Tài khoản đăng ký đã tồn tại !';
                    }

                    if ($phone == $kh['tel']) {
                        $same = 1;
                        $thongbao = 'SDT đăng ký đã tồn tại !';
                    }

                    if ($email == $kh['email']) {
                        $same = 1;
                        $thongbao = 'Email đăng ký đã tồn tại !';
                    }
                }

                if ($same == 0) {
                    if ($_POST['pass'] == $_POST['repass']) {
                        move_uploaded_file($file['tmp_name'], $target_file);
                        add_kh($user, $pass, $email, $address, $phone, 2, $file_name);
                        $_SESSION['signup'] = 1;
                    } else {
                        echo '<script>event.preventDefault()</script>';
                        $thongbao = 'Mật khẩu không khớp !';
                    }
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

                if (isset($_FILES['anh']) && ($_FILES['anh']['size'] > 0)) {
                    $file = $_FILES['anh'];
                    // sử dụng str_replace để xóa các khoảng trắng, tránh lỗi chèn src có space trong thẻ img
                    $file_name = str_replace(' ', '', $file['name']);
                    $folder = 'upload/';
                    $target_file = $folder . $file_name;
                    move_uploaded_file($file['tmp_name'], $target_file);
                    $_SESSION['avatar'] = $file_name;
                } else {
                    $file_name = $_POST['anh'];
                }

                update_info_user($id, $email, $phone, $address, $file_name);
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
                $kh = edit_kh($id);
                if ($_POST['pass'] == $_POST['repass']) {
                    $pass = $_POST['pass'];
                    update_pass_user($id, $pass);
                    $_SESSION['updateinfo'] = $id;
                    include 'view/controluser.php';
                    include 'view/userinfo.php';
                } else {
                    $thongbao = 'Mật khẩu không khớp !';
                    include 'view/controluser.php';
                    include 'view/updatemk.php';
                }
            }

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
            $list = list_dssp();
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
                update_view($detail, $_SESSION['view']);
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
