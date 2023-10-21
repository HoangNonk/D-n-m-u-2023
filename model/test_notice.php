<?php 
$notification = [
    [
        "name" => "add",
        "notice" => "Thêm thành công",
    ],
    [
        "name" => "delete",
        "notice" => "Xóa thành công",
    ],
    [
        "name" => "edit",
        "notice" => "Cập nhật thành công !",
    ],
    [
        "name" => "checkbox_err",
        "notice" => "Chưa có mục nào được chọn !",
    ],
    [
        "name" => "dm_err",
        "notice" => "Chưa chọn danh mục !",
    ],
    [
        "name" => "dm_empty",
        "notice" => "Chưa có danh mục\nCần tạo danh mục trước !",
    ],
];
                                                                                                                                                                                                                                                           
    function alert($notification){
        foreach ($notification as $key) {
            if (isset($_SESSION[$key['name']])) {
                $alert = $key['notice'];
                echo ("<script>alert('$alert')</script>");
            }
            unset($_SESSION[$key['name']]);
        }
    }
