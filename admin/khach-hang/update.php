
<style>
    .add {
        margin: 20px 50px;
    }
    .form-label {
        margin-left: 10px;
    }
</style>
<section class="add">
    <legend>Cập nhập Khách hàng</legend>
    <form action="" method = "POST">
    <h5 style="color: red"><?= $thongbao ?? "" ?></h5>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Tên khách hàng:</label>
            <input type="text" class="form-control" name="ten_kh" value="<?= $ten_kh ?>" required>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Email_kh:</label>
            <input type="text" class="form-control" name="email_kh" value="<?= $email_kh ?>" required>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Mật_khẩu:</label>
            <input type="text" class="form-control" name="mat_khau" value="<?= $mat_khau ?>" required>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Điện_thoại:</label>
            <input type="number" class="form-control" name="so_dt" value="<?= $so_dt ?>" required>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Đia_chi:</label>
            <input type="text" class="form-control" name="dia_chi" value="<?= $dia_chi ?>" required>
        </div>
       
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">gioi_tinh:</label>
            <input type="text" class="form-control" name="gioi_tinh" value="<?= $gioi_tinh ?>" required>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">cap_bac:</label>
            <input type="text" class="form-control" name="cap_bac" value="<?= $cap_bac ?>" required>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">trang_thai:</label>
            <input type="text" class="form-control" name="trang_thai" value="<?= $trang_thai ?>" required>
        </div>
       
        <input type="hidden" class="form-control" name="ma_kh" value="<?= $ma_kh ?>" required>

        <button name="themmoi" class="btn btn-outline-success">Cập nhập</button>
        <a href="?act=listkh"><button type="button" class="btn btn-outline-primary">Danh sách</button></a>
    </form>
</section>
