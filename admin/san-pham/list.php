<style>
    .loai-laptop {
        margin: 20px 50px;
    }
</style>
<section class="loai-laptop">
    <legend>Danh sách sản phẩm sách</legend>
    <!-- BAILỌC TÊN SẢN PHẨM -->
    <div>

    </div>
    <form action="" method="POST">

        <table class="table table-bordered border-primary" style="text-align: center">
            <tr>
                <th>Chọn</th>
                <th>Ma_sach</th>
                <th>Ten_sach</th>
                <th>hinh_sach</th>
                <th>so_luong</th>
                <th>gia_sach</th>
                <th>mo_ta</th>
                <th>nha_xb</th>
                <th>ngay_xb</th>
                <th>Ten_dm</th>
                <th>hoạt động</th>
            </tr>
            <?php foreach ($sanpham as $sp) : ?>
                <?php extract($sp) ?>
                <tr>
                    <th><input type="checkbox" name="ma_sach[]" value=<?= $ma_sach ?> class="checkbox"></th>
                    <td><?= $ma_sach ?></td>
                    <td><?= $ten_sach ?></td>
                    <td><img src="../img/<?= $hinh_sach ?>" alt="" width="90"></td>
                    <td><?= $so_luong ?></td>
                    <td><?= $gia_sach ?></td>
                    <td><?= $mo_ta ?></td>
                    <td><?= $nha_xb ?></td>
                    <td><?= date("d/m/y", strtotime($ngay_xb)) ?></td>
                    <td><?= $ten_dm ?></td>
                    <td>
                        <a onclick="return confirm('Bạn có muốn xóa không ?')" href="?act=sanpham&ma_sach=<?= $ma_sach ?>">xóa</a> -
                        <a href="?act=updatesp&ma_sach=<?= $ma_sach ?>">sửa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <div>
            <a href="?act=addsp"><button type="button" class="btn btn-outline-primary">Thêm mới</button></a>
            <button type="button" class="btn btn-outline-success">Chọn tất cả</button>
            <button type="button" class="btn btn-outline-danger">Xóa tất cả</button>
            <button type="button" class="btn btn-outline-warning">Bỏ chọn</button>
        </div>
    </form>
</section>