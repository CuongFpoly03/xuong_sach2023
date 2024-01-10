
<style>
    .add {
        margin: 20px 50px;
    }
    .form-label {
        margin-left: 10px;
    }
</style>
<section class="add">
    <legend>Thêm sản phẩm LapTop</legend>
    <form action="" method = "POST" enctype="multipart/form-data">
        <h5 style="color: red"><?= $thongbao ?? "" ?></h5>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Ten_sach:</label>
            <input type="text" class="form-control" name="ten_sach" required>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Hinh_sach:</label>
            <input type="file" class="form-control" name="hinh_sach">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">so_luong:</label>
            <input type="number" class="form-control" name="so_luong" step="0.5" required>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Gia_sach:</label>
            <input type="number" class="form-control" name="gia_sach" required>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Mo_ta:</label><br>
            <textarea name="mo_ta" id="" cols="122" rows="2"></textarea>
        </div> <br>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">nha_xb:</label>
            <input type="text " class="form-control" name="nha_xb" required>
        </div><br>
        Tên danh mục: <select name="ma_dm" id="" style="width:100%; border-radius: 5px; padding: 5px 10px">
            <option value="0">Chọn danh mục</option>
            <?php foreach($listsach as $lo) :?>
                <option value="<?= $lo['ma_dm'] ?>"> <?= $lo['ten_dm'] ?></option>
            <?php endforeach;?>
        </select> <br>
        <button name="themmoi" class="btn btn-outline-success">Thêm mới</button>
        <a href="?act=sanpham"><button type="button" class="btn btn-outline-primary">Danh sách</button></a>
    </form>
</section>