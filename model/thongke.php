<?php
    function thongke_sp_dm() {
        $sql ="SELECT dm.id, dm.name, 
            COUNT(*) AS 'soluong',
            MIN(sp.price) AS 'gia_min',
            MAX(sp.price) AS 'gia_max', 
            AVG(sp.price) AS 'gia_avg'
            FROM danhmuc dm 
            JOIN sanpham sp ON dm.id = sp.iddm
            GROUP BY dm.id, dm.name
            ORDER BY soluong DESC";
        return pdo_query($sql);
    }

    function thongke_bl_sp() {
        $sql = "SELECT sp.id, sp.name, sp.price,
        COUNT(*) 'sl_binhluan',
        FROM sanpham sp JOIN binhluan bl ON sp.id = bl.idpro
        GROUP BY sp.id, sp.name
        ORDER BY soluong DESC";
        return pdo_query($sql);
    }
