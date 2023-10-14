<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<div class="product" id="product_1">
    <button onclick="sendProductID(995599)">Lưu vào Session</button>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
function sendProductID(productId) {
    $.ajax({
        type: "POST",
        url: "index.php?act=giohang",  // Điều này là URL của tệp PHP bạn muốn sử dụng để xử lý yêu cầu
        data: {product_id: productId}, // Gửi id sản phẩm lên server
        success: function(response) {
            // Xử lý phản hồi từ server (nếu cần)
            console.log('sended');
        }
    });
}
</script>
</body>

</html>