<?php
        // $sql = "SELECT * from sanpham order by id desc";
    function list_sanpham($kyw, $iddm) {
        $sql = "SELECT * FROM sanpham where 1";
        if ($kyw != '') {
            $sql.=" AND id like '%".$kyw."%' OR iddm like '%".$kyw."%' OR name LIKE '%".$kyw."%' OR luotxem LIKE '%".$kyw."%' OR price LIKE '%".$kyw."%' OR mota LIKE '%".$kyw."%'";
        }
        if ($iddm > 0) {
            $sql.=" AND iddm = '".$iddm."'";
        }
        $sql.= " order by id desc";
        return pdo_query($sql);
    }

    function update_view($id,$view) {
        $sql = "UPDATE sanpham SET luotxem = '$view' where id ='$id'";
        pdo_execute($sql);
    }

    function list_sanpham_home() {
        $sql = "SELECT * FROM sanpham where 1 order by id desc limit 0,9";
        return pdo_query($sql);
    }

    function list_top10(){
        $sql="select * from sanpham where 1 order by luotxem desc limit 0,10";
        return pdo_query($sql);
    }

    function sp_cungloai($id,$iddm) {
        $sql = "SELECT * FROM sanpham where iddm = $iddm and id <> $id";
        return pdo_query($sql);
    }

    function add_sanpham($iddm,$name,$price,$img,$mota) {
        $sql = "INSERT INTO sanpham(name, price, img, mota, iddm) 
                VALUES ('$name','$price','$img','$mota','$iddm')";
        pdo_execute($sql);
    }

    function update_sanpham($id,$iddm,$name,$price,$img,$mota) {
        $sql = "UPDATE sanpham SET name='$name',price='$price',img='$img',mota='$mota',iddm='$iddm' WHERE id = '$id'";
        pdo_execute($sql);
    }

    function edit_sanpham($id) {
        $sql = "SELECT * from sanpham where 1 and id = '$id'";
        $sp = pdo_query_one($sql);
        return $sp;
    }

    function delete_sanpham($id) {
        $sql = "DELETE from sanpham where id = '$id'";
        pdo_execute($sql);
    }

    function delete_checkbox_sanpham($checkbox = []) {
        foreach ($checkbox as $box) {
            $sql = "DELETE from sanpham where id=" . $box;
            pdo_execute($sql);
        }
    }
?>