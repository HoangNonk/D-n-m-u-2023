<?php
    function thongke_dm() {
        $sql = "SELECT dm.id, dm.name, 
        COUNT(*) 'soluong', 
        MIN(price) 'gia_min', 
        MAX(price) 'gia_max', 
        AVG(price) 'gia_avg' 
        FROM danhmuc dm JOIN sanpham sp ON dm.id = sp.iddm
        GROUP BY dm.id, dm.name
        ORDER BY soluong DESC";
        return pdo_query($sql);
    }

    function thongke_sp() {
        $sql = "SELECT sp.id, sp.name, 
        COUNT(*) 'soluong', 
        MIN(price) 'gia_min', 
        MAX(price) 'gia_max', 
        AVG(price) 'gia_avg' 
        FROM sanpham sp JOIN binhluan bl ON sp.id = bl.idpro
        GROUP BY sp.id, sp.name
        ORDER BY soluong DESC limit 0,5";
        return pdo_query($sql);
    }
?>