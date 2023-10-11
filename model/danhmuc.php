<?php
    function list_danhmuc($kyw) {
        $sql = "SELECT * from danhmuc where 1";
        if ($kyw != '') {
            $sql.= " AND id like '%".$kyw."%' OR name like '%".$kyw."%'";
        }
        $sql.= "  order by id desc";
        return pdo_query($sql);
    }

    function sl_sanpham($id) {
        $sql = "SELECT COUNT(*) from sanpham where iddm ='$id'";
        return pdo_query_one($sql);
    }

    function add_danhmuc($name, $id) {
        if (isset($name, $id))
        $sql = "INSERT into danhmuc (name) values ('$name')";
        pdo_execute($sql);
    }

    function update_danhmuc($name, $id) {
        $sql = "UPDATE danhmuc set name ='$name' where id = '$id'";
        pdo_execute($sql);
    }

    function edit_danhmuc($id) {
        $sql = "SELECT * from danhmuc where id = '$id'";
        $dm = pdo_query_one($sql);
        return $dm;
    }

    function delete_danhmuc($id) {
        $sql = "DELETE from danhmuc where id = '$id'";
        pdo_execute($sql);
    }

    function delete_checkbox_danhmuc($checkbox = []) {
        foreach ($checkbox as $box) {
            $sql = "DELETE from danhmuc where id=" . $box;
            pdo_execute($sql);
        }
    }
