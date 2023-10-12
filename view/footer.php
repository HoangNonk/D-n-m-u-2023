</div>
<div class="boxcenter">
    <div id="footer" class="row">
        <div class="row flex center fl-col mb">
            <img width="80px" src="upload/logo.png" alt="">
            <h3>X Shop</h3>
            <p style="font-style:italic; text-align: center">X Shop là cửa hàng chuyển phân phối và bảo hành các sản phẩm chính hãng từ Apple <br> Chuyên cung cấp các linh kiện airpod, iphone chính hãng và mới nhất , ...
            </p>
        </div>
        <div class="row flex between list_footer">
            <ul>
                <h4>Liên hệ</h4>
                <li><i class="fa-solid fa-location-dot"></i> 141 Trần Phú, Hà Đông, Hà Nội</li>
                <li><i class="fa-solid fa-mobile-screen"></i> 034 654 0479</li>
                <li><i class="fa-solid fa-at"></i> Longlhph31572@gmail.com</li>
                <li><i class="fa-brands fa-facebook"></i> fb/hoanglong.luong.7777 </li>
            </ul>
            <ul>
                <h4>Chính sách</h4>
                <li><i class="fa-solid fa-truck"></i> Giao hàng </li>
                <li><i class="fa-brands fa-shopify"></i> Đặt hàng</li>
                <li><i class="fa-solid fa-rotate-left"></i> Đổi trả</li>
                <li><i class="fa-solid fa-screwdriver-wrench"></i> Bảo hành</li>
            </ul>
            <ul>
                <h4 style="cursor:pointer" onclick="return window.location.href='index.php?act=sanpham'">Sản phẩm</h4>
                <?php foreach ($list_danhmuc as $dm) {
                    extract($dm) ?>
                    <li><a style="" href="index.php?act=sanpham&iddm=<?= $id ?>"><?= $name ?></a></li>
                <?php } ?>
            </ul>
            <form action="#">
                <label for="">Để lại Email để nhận các thông tin mới nhất <br></b> từ chúng tôi !</label> <br><br>
                <input type="email" placeholder="Đăng ký thông tin">
                <button><i class="fa-solid fa-paper-plane"></i> Gửi</button>
            </form>
        </div>
    </div>
</div>
<div class="row flex center">
    <p style="font-style: italic; font-size: 0.8vw">This belong to &copy; Longlhph31572@fpt.edu.vn</p>
</div>
</body>

<script>
    const comment = document.getElementById('boxcomment')

    const videoElement = document.getElementById("video");

    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 1) {
            videoElement.play();
        }
    })

    const add_cart = document.querySelectorAll('.btn_pro button i');
    console.log(add_cart);
    for (let index = 0; index < add_cart.length; index++) {
        const element = add_cart[index];
        element.parentElement.addEventListener('click', () => {
            console.log('click');
            element.classList.add('jumpmove');
            setTimeout(() => {
                alert('Thêm vào giỏ hàng thành công')
                element.classList.remove('jumpmove');
            }, 2500)
        })
    }
</script>

</html>