<?php

    session_start();
    if (isset($_POST['product_id'])) {
        $id = $_POST['product_id'];
        $_SESSION['id'] = $id;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><?= $_SESSION['id'] ?></p>
</body>

</html>