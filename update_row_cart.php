
<?php 
    session_start();
    include 'model/giohang.php';
    include 'model/pdo.php';
    $giohang = list_giohang($_SESSION['iduser']);
    
    if (isset($_POST['product_id']) && $_POST['product_id'] > 0) {
        $_SESSION['product_id'] = $_POST['product_id'];

        foreach ($giohang as $row) {
            if ($row['idpro'] == $_SESSION['id']) {
                $_SESSION['quantity'] = $row['soluong'] + 1;
                echo '' . $row['soluong'] + 1 . '';
            }
        }
    }
?>
