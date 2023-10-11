</div>
<script>
    const comment = document.getElementById('boxcomment')

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

</body>

</html>