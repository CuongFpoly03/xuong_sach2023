
<style>
    .loai-laptop {
        margin: 20px 50px;
    }
</style>
<section class="loai-laptop">
    <legend>Danh sách loại Sách</legend>
    <form action="" method="POST">
        <table class="table table-bordered border-primary" style="text-align: center">
            <tr>
                <th>Chọn</th>
                <th>Ma_loai</th>
                <th>Ten_loai</th>
                <th>Trang_thai</th>
                <th>Action</th>
            </tr>
            <?php foreach($listsach as $list): ?>
                <?php extract($list) ?>
            <tr>
                <th><input type="checkbox" name="ma_loai[]"value= <?= $ma_dm ?> class="checkbox" ></th>
                <td><?= $ma_dm ?></td>
                <td><?= $ten_dm ?></td>
                <td><?= $trang_thai ? "hiển thị" : "ẩn" ?></td>
                <td>
                    <a onclick="return confirm('Bạn có muốn xóa không ?')" href="?act=danhmuc&ma_dm=<?=$ma_dm ?>">xóa</a> -
                    <a href="?act=update&ma_dm=<?= $ma_dm ?>">sửa</a>
                </td>
            </tr>
            <?php endforeach;?>
        </table>
        <div>
            <a href="?act=add"><button type="button" class="btn btn-outline-primary">Thêm mới</button></a>
            <button type="button" class="btn btn-outline-success">Chọn tất cả</button>
            <button type="button" class="btn btn-outline-danger">Xóa tất cả</button>
            <button type="button" class="btn btn-outline-warning">Bỏ chọn</button>
        </div>
    </form>
</section>