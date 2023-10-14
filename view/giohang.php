<div class="row">
    <div class="row flex between">
        <h4 class="title_cate">GIỎ HÀNG</h4>
        <h4><i style="font-size: 1.2vw;" class="fa-solid fa-basket-shopping"></i> 20</h4>
    </div>
    <?php if (count($giohang) == 0) { ?>
        <div style="height: 80vh;" class="row flex fl-col center">
            <h4><i style="font-size: 1.2vw;" class="fa-regular fa-face-sad-tear"></i> Giỏ hàng trống</h4>
            <h5><a style="color: rgba(256,155,0,1);" href="index.php"><i style="font-size: 1.2vw;" class="fa-solid fa-basket-shopping"></i> Mua sắm ngay</a></h5>
        </div>
    <?php } else { ?>
        <form action="" class="row formds">
            <table id="cart" class="row mb">
                <?php foreach ($giohang as $row) {
                    extract($row); ?>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><img width="100px" src="upload/<?= $anhsp ?>" alt=""></td>
                        <td>
                            <a href="index.php?act=chitiet&detail=<?= $idpro ?>">
                                <?= $tensp ?>
                            </a>
                        </td>
                        <td><?= $dongia ?> <i class="fa-solid fa-dollar-sign"></i></td>
                        <td>
                            <div class="amount flex center" style="column-gap: 10px">
                                <button id="minus">-</button>
                                <p id="count"><?= $soluong ?></p>
                                <button class="plus">+</button>
                            </div>
                        </td>
                        <td>
                            <button class="button delete">
                                <a><i class="fa-solid fa-trash"></i></a>
                            </button>
                        </td>
                    </tr>
                <?php } ?>
            </table>
            <button type="submit">Thanh toán</button>
        </form>
    <?php } ?>
</div>