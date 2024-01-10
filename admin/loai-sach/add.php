
<style>
    .add {
        margin: 20px 50px;
    }
    .form-label {
        margin-left: 10px;
    }
</style>
<section class="add">
    <legend>Thêm loại sách</legend>
    <form action="" method = "POST">
    <h5 style="color: red"><?= $thongbao ?? "" ?></h5>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Tên danh mục:</label>
            <input type="text" class="form-control" name="ten_dm" required>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Trạng thái:</label>
            <input type="checkbox"  name="trang_thai" value="1" checked>
        </div>
        <button name="themmoi" class="btn btn-outline-success">Thêm mới</button>
        <a href="?act=danhmuc"><button type="button" class="btn btn-outline-primary">Danh sách</button></a>
    </form>
</section>