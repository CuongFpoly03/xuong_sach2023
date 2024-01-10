<section style="margin: 50px auto; width: 80%">
    <div style="margin-top: 150px">
        <h2>Đơn hàng của quý khách</h2>
        <div>
            <legend>cảm ơn quý khách đã tin tưởng và ủng hộ <strong>NHÀ SÁCH 24H</strong></legend>
        </div>
    </div>
    <!--  -->
    <div>
        <h2>Thông tin đơn hàng</h2>
        <table class="table table-bordered border-dark" style="text-align: center">
            <tr>
                <th>Mã đơn hàng</th>
                <th>Ngày đặt hàng</th>
                <th>Tổng đơn hàng</th>
                <th>Phương thức thanh toán</th>
                <th>Trạng thái</th>
            </tr>
            <tr>
                <td><?= $ma_dh ?></td>
                <td><?= $ngay_dh ?></td>
                <td><?= $tong_tien ?></td>
                <td><?= $dh_pttt ?></td>
                <td><?= $trang_thai ?></td>
            </tr>
        </table>
    </div>
    <div>
        <h2>Thông tin người đặt hàng</h2>
        <table class="table table-bordered border-dark" style="text-align: center">
            <tr>
                <th>Họ Tên</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
            </tr>
            <tr>
                <td><?= $ten_dh ?></td>
                <td><?= $email_dh ?></td>
                <td><?= $sodt_dh ?></td>
                <td><?= $diachi_dh ?></td>
            </tr>
        </table>
    </div>
    <div>
        <table class="table table-bordered border-dark" style="text-align: center">
            <h2 style="margin: 20px 0px">Chi tiết giỏ hàng</h2>
            <tr>
                <th>STT</th>
                <th>Hình</th>
                <th>Tên sách</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
            </tr>
            <?php foreach ($carts as $stt => $cart) : ?>
                <?php $i = 0; ?>
                <tr>
                    <td><?= $stt + 1 ?></td>
                    <td><img src="img/<?= $cart['hinh_sach'] ?>" alt="" width="60" height="60"></td>
                    <td><?= $cart['ten_sach'] ?></td>
                    <td><?= $cart['gia_sach'] ?></td>
                    <td><?= $cart['so_luong'] ?></td>
                    <td><?= $cart['thanh_tien'] ?></td>

                </tr>
            <?php endforeach ?>
        </table>
        <div style="margin:40px 55px">
            <!-- <button type="button" class="btn btn-outline-success">Chọn tất cả</button>
            <button type="button" class="btn btn-outline-danger">Xóa tất cả</button> -->
            <a href="?act=view-cart"><button type="button" class="btn btn-outline-danger">Quay lại</button></a>
            <a href="?act=qldonhang"><button type="button" class="btn btn-outline-primary">Quản lí đơn hàng</button></a>
        </div>
    </div>
</section>