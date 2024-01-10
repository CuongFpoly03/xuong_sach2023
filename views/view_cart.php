<style>
    .loai-cartshop {
        margin: 150px 50px;
    }
</style>
<section class="loai-cartshop">
    <h2 style="margin: 40px 0px">SẢN PHẨM GIỎ HÀNG</h2>
    <!-- BAILỌC TÊN SẢN PHẨM -->
    <div>

    </div>
    <form action="" method="POST" id="update_cart_form">
        <input type="hidden" name="update_cart" value="1">
        <table class="table table-bordered border-dark" style="text-align: center">
            <tr>
                <th>Chọn</th>
                <th>STT</th>
                <th>Hình</th>
                <th>Tên sách</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                <th>Hoạt động</th>
            </tr>
            <?php foreach ($carts as $stt => $cart) : ?>
                <?php $i = 0; ?>
                <tr>
                    <td><input type="checkbox" checked></td>
                    <td><?= $stt + 1 ?></td>
                    <td><img src="img/<?= $cart['hinh_sach'] ?>" alt="" width="60" height="60"></td>
                    <td><?= $cart['ten_sach'] ?></td>
                    <td><?= $cart['gia_sach'] ?></td>
                    <td>
                        <input type="button" value="-" onclick="updateCart(<?= $cart['ma_sach'] ?>, 'decrement')">
                        <input style="width: 30px; padding: 0px 7px" type="text" name="quantity_<?= $cart['ma_sach'] ?>" value="<?= $cart['so_luong'] ?>" data-price="<?= $cart['gia_sach'] ?>">
                        <input type="button" value="+" onclick="updateCart(<?= $cart['ma_sach'] ?>, 'increment')">
                    </td>
                    <td><?= $cart['thanh_tien'] ?></td>
                    <td><a href="?act=xoacart&ma_sach=<?= $cart['ma_sach'] ?>">❎</a></td>
                </tr>
            <?php endforeach ?>
            <tr>
                <td colspan="6">Tổng tiền</td>
                <td><?= $sum ?>đ</td>
                <td><a href="?act=hoadon"><button type="button" class="btn btn-outline-success">Thanh toán</button></a></td>
            </tr>
        </table>
        <div>
            <a href="?act="><button type="button" class="btn btn-outline-primary">Thoát khỏi giỏ hàng</button></a>
        </div>
    </form>
    <script>
        document.getElementById('deselect-all').addEventListener('click', function() {
            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = false;
            });
        });
    </script>
</section>