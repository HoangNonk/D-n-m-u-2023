
<?php
    function list_giohang($iduser) {
        $sql = "SELECT * from giohang where iduser = '$iduser' order by id desc";
        return pdo_query($sql);
    }

    function tongtien($iduser, $id) {
        $sql = "SELECT SUM(giohang.dongia) as tongdongia from giohang where iduser = '$iduser' and id = '$id'";
        return pdo_query_one($sql);
    }

    function update_soluong($sl, $idpro) {
        $sql = "UPDATE giohang SET soluong = '$sl' where idpro = '$idpro'";
        pdo_execute($sql);
    }

    function them_vao_giohang($iduser, $idpro, $tensp, $anh, $gia, $sl) {
        $sql = "INSERT INTO giohang (iduser, idpro, tensp, anhsp, dongia, soluong) 
        VALUES ('$iduser','$idpro','$tensp','$anh','$gia','$sl')";
        pdo_execute($sql);
    }