<?php
    function list_kh($kyw) {
        $sql = "SELECT * from taikhoan where 1";
        if ($kyw != '') {
            $sql.= " AND id LIKE '%".$kyw."%' OR user LIKE '%".$kyw."%' OR email LIKE '%".$kyw."%' OR tel LIKE '%".$kyw."%' OR address LIKE '%".$kyw."%' OR role LIKE '%".$kyw."%'";
        }
        $sql.= " order by id desc";
        return pdo_query($sql);
    }

    function add_kh($user, $pass, $email, $address, $tel, $role, $img) {
        $sql = "INSERT INTO taikhoan(user, pass, img, email, address, tel, role) 
                VALUES ('$user','$pass','$img','$email','$address','$tel','$role')";
        pdo_execute($sql);
    }

    function update_kh($id, $tkkh, $mkkh, $email, $diachikh, $sdtkh, $vaitro) {
        $sql = "UPDATE taikhoan SET user='$tkkh',pass='$mkkh',email='$email',address='$diachikh',tel='$sdtkh',role='$vaitro' WHERE id = '$id'";
        pdo_execute($sql);
    }

    function update_info_user($id, $email, $phone, $address, $img) {
        $sql = "UPDATE taikhoan SET email='$email',address='$address',tel='$phone', img='$img' WHERE id = '$id'";
        pdo_execute($sql);
    }

    function update_pass_user($id, $pass) {
        $sql = "UPDATE taikhoan SET pass='$pass' WHERE id = '$id'";
        pdo_execute($sql);
    }

    function get_pass($email, $user) {
        $sql = "SELECT * from taikhoan where email = '$email' and user = '$user'";
        pdo_execute($sql);
    }

    function edit_kh($id) {
        $sql = "SELECT * from taikhoan where id = '$id'";
        $kh = pdo_query_one($sql);
        return $kh;
    }

    function delete_kh($id) {
        $sql = "DELETE from taikhoan where id = '$id'";
        pdo_execute($sql);
    }

    function delete_checkbox_kh($checkbox = []) {
        foreach ($checkbox as $box) {
            $sql = "DELETE from taikhoan where id=" . $box;
            pdo_execute($sql);
        }
    }
