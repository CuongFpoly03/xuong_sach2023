<style>
    .info-pay {
        margin: 50px auto;
        border: 1px solid black;
    }

    .pay-one {
        margin: 30px 50px;

    }

    .small-pay-one input {
        margin: 10px 15px;
    }

    .pay-two {
        margin: 20px 50px;
    }

    .pay-two input {
        padding: 10px 20px;
        margin: 10px 15px
    }

    .small-pay-two input {
        margin: 10px 15px;
        padding: 10px 20px;
    }

    form {
        width: 90%;
        margin: 0 auto;
        margin-top: 140px;
    }

    .table {
        width: 90%;
        margin: 0px auto;
    }
</style>

<form action="?act=hoadonconfirm" method="post">
    <h2 style="margin: 40px 0px">THÔNG TIN THANH TOÁN HOÁ ĐƠN</h2>
    <div class="info-pay">
        <div class="pay-one">
            <h5>Hình thức thanh toán </h5>
            <!-- <form action="" method="POST"> --> 
                <select name="trang_thai" id="trang_thai" style="display: none">
                    <option value="1">Xử lí đơn hàng</option>
                    <option value="2">Đang giao hàng</option>
                    <option value="3">Đơn hàng thành công!</option>
                </select>
            <!-- </form> -->
            <select name="dh_pttt" id="">
                <option value="0">chọn hình thức thanh toán</option>
                <option value="one">Thanh toán trực tiếp</option>
                <option value="two">Thanh toán chuyển khoản</option>
            </select>
        </div>

        <?php if (isset($_SESSION['ten_kh'])) {
            $ten_kh = $_SESSION['ten_kh']['ten_kh'];
            $email_kh = $_SESSION['ten_kh']['email_kh'];
            $so_dt = $_SESSION['ten_kh']['so_dt'];
            $dia_chi = $_SESSION['ten_kh']['dia_chi'];
        } else {
            $ten_kh = "";
            $email_kh = "";
            $so_dt = "";
            $dia_chi = "";
        } ?>
        <div class="pay-two">
            <h4>Thông tin người đặt</h4>
            <div class="small-pay-two">
                <div>
                    <label for="">Tên khách hàng:</label>
                    <input type="text" name="ten_kh" placeholder="Ho ten" pattern=".{8,}" title="8 ký tự trở lên!" required value="<?= $ten_kh ?>">
                    <label for="">Số điện thoại:</label>
                    <input type="text" name="so_dt" placeholder="So dt" value="<?= $so_dt ?>">
                    <label for="">Email:</label>
                    <input type="email" name="email_kh" placeholder="email" pattern=".{8,}" title="8 ký tự trở lên!" required value="<?= $email_kh ?>">
                    <label for="">Địa chỉ</label>
                    <input type="text" name="dia_chi" placeholder="dia chi:" pattern=".{8,}" title="8 ký tự trở lên!" required value="<?= $dia_chi ?>">
                </div>
            </div>
        </div>
        <div class="pay-two">
            <h4>Thông tin người nhận</h4>
            <div calss="small-pay-two">
                <div>
                    <label for="">Tên khách hàng:</label>
                    <input type="text" name="ten_kh" placeholder="Ho ten" pattern=".{8,}" title="8 ký tự trở lên!" required value="<?= $ten_kh ?>">
                    <label for="">Số điện thoại:</label>
                    <input type="text" name="so_dt" placeholder="So dt" pattern=".{8,}" title="8 ký tự trở lên!" required value="<?= $so_dt ?>">
                </div>
            </div>
            <input type="checkbox" checked>Tôi đồng ý, với các điều khoản dịch vụ trên.
        </div>
    </div>

    <table class="table table-bordered border-dark" style="text-align: center">
        <h2 style="margin: 20px 55px">Sản phẩm cần thành toán</h2>
        <tr>
            <th>Chọn</th>
            <th>STT</th>
            <th>Hình</th>
            <th>Tên sách</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Ngày đặt hàng</th>
            <th>Thành tiền</th>
        </tr>
        <?php foreach ($carts as $stt => $cart) : ?>
            <?php $i = 0; ?>
            <tr>
                <td><input type="checkbox" checked></td>
                <td><?= $stt + 1 ?></td>
                <td><img src="img/<?= $cart['hinh_sach'] ?>" alt="" width="60" height="60"></td>
                <td><?= $cart['ten_sach'] ?></td>
                <td><?= $cart['gia_sach'] ?></td>
                <td><?= $cart['so_luong'] ?></td>
                <td><?= (date('d/m/Y h:i:sa')) ?></td>
                <td><?= $cart['thanh_tien'] ?></td>
            </tr>
        <?php endforeach ?>
    </table>

    <table class="table table-bordered border-dark" style="text-align: center">
        <h2 style="margin: 20px 55px">Tổng của đơn hàng</h2>
        <tr>
            <th>Thanh toán 💵</th>
            <th>Tổng sl sản phẩm 🔢</th>
            <th>Tổng tạm tính 💵</th>
            <th>Thành tiền 💵</th>
            <th>Pay 🏧</th>
        </tr>
        <tr>
            <td>Tất cả sản phẩm</td>
            <td> <?php
                    if (isset($_SESSION['cart'])) {
                        echo count($_SESSION['cart']);
                    }
                    ?></td>
            <td><?= $sum ?>đ</td>
            <td><?= $sum ?>đ</td>
            <td><button type="submit" class="btn btn-outline-success">Đồng ý thanh toán</button></td>
        </tr>
    </table>
</form>
<div style="margin:40px 55px">
    <!-- <button type="button" class="btn btn-outline-success">Chọn tất cả</button>
            <button type="button" class="btn btn-outline-danger">Xóa tất cả</button> -->
    <a href="?act=view-cart"><button type="button" class="btn btn-outline-danger">Quay lại</button></a>
</div>