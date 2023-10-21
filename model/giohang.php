
<?php
    function list_giohang($iduser) {
        $sql = "SELECT * from giohang where iduser = '$iduser' order by id desc";
        return pdo_query($sql);
    }

    function tongtien($iduser) {
        $sql = "SELECT SUM(giohang.dongia*giohang.soluong) as tongdongia from giohang where iduser = '$iduser'";
        return pdo_query_one($sql);
    }

    function tongsanpham($iduser) {
        $sql = "SELECT SUM(giohang.soluong) as tongsanpham from giohang where iduser = '$iduser'";
        return pdo_query_one($sql);
    }

    function update_soluong($sl, $idpro) {
        $sql = "UPDATE giohang SET soluong = '$sl' where idpro = '$idpro'";
        pdo_execute($sql);
    }

    function get_row_soluong($idpro) {
        $sql = "SELECT giohang.soluong where idpro = '$idpro'";
        $new_quantity = pdo_query_one($sql);
        return $new_quantity;
    }

    function them_vao_giohang($iduser, $idpro, $tensp, $anh, $gia, $sl) {
        $sql = "INSERT INTO giohang (iduser, idpro, tensp, anhsp, dongia, soluong) 
        VALUES ('$iduser','$idpro','$tensp','$anh','$gia','$sl')";
        pdo_execute($sql);
    }
    
    function delete_sp_giohang($idpro, $iduser) {
        $sql = "DELETE from giohang where idpro = '$idpro' and iduser = '$iduser'";
        pdo_execute($sql);
    }