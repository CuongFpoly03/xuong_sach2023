<div class="main">
    <div class="all-detail">
        <div class="left">
                <?php extract($muoi_list_sach_one); ?>
                <div class="all-col">
                    <img src="../img/<?= $hinh_sach?>" alt="" />
                    <div class="text-detail">
                        <legend>
                           <?= $ten_sach ?>
                        </legend>
                        <p>Tên loai: <?= $ten_dm ?></p>
                        <span>Giá: $ <?= $gia_sach ?></span>
                        <div class="submit">
                            <button>MUA NGAY</button>
                            <a href="?act=cart&ma_sach=<?= $ma_sach?>"><button>THÊM VÀO GIỎ HÀNG</button></a>
                        </div>
                    </div>
                </div>
        </div>
        <div class="right">
            <div class="top-detail">
                <img src="../img/product-3.jpg" alt="" />
                <p>CÔNG TY CỔ PHẦN THƯƠNG MẠI DỊCH VỤ PHONG VŨ ✅</p>
            </div>
            <div class="info-nua">
                <legend>Chính sách bán hàng</legend>
                <p>🚒 Miễn phí giao hàng cho đơn hàng từ 5 triệu.</p>
                <p>🔰 Cam kết hàng chính hãng 100%.</p>
                <p>🔁 Đổi trả trong vòng 10 ngày.</p>

                <legend>Dịch vụ khác</legend>
                <p>⚙ Gói dịch vụ bảo hành/ Sửa chữa tận nơi.</p>
            </div>
        </div>
    </div>

    <div class="description">
        <legend>MÔ TẢ SẢN PHẨM</legend>
        <div class="small-des">
            <p>
                <?= $mo_ta ?>
            </p>
            <img src="../img/<?= $hinh_sach ?>" alt="" />
        </div>
    </div>

    <!-- BAI SP LIÊN QUAN -->
    <div class="pro-relate">
        <div class="text-laptop">
            <legend>SẢN PHẨM LIÊN QUAN</legend>
        </div>
        <hr style="color: white; border: 1.5px solid white" />
        <div class="sp-laptop">
            <?php foreach($sp_cungloai as $spcl): ?>
                <?php extract($spcl) ?>
                <a href="?act=chitiet&ma_sach=<?=$ma_sach ?>"></a>
            <div class="sp-one">
                <img src="../img/<?= $hinh_sach?>" alt="" />
                <div class="text-sp">
                    <legend><?= $ten_sach ?></legend>
                    <span>Giá: $ <?= $gia_sach ?></span>
                </div>
            </div>
            <?php endforeach; ?>


            <!-- <div class="sp-one">
                <img src="../img/product-1.jpg" alt="" />
                <div class="text-sp">
                    <legend>Tên sản phẩm</legend>
                    <p>
                        mô tả
                    </p>
                    <span>100đ</span>
                </div>
            </div>

            <div class="sp-one">
                <img src="../img/product-1.jpg" alt="" />
                <div class="text-sp">
                    <legend>Tên sản phẩm</legend>
                    <p>
                        mô tả
                    </p>
                    <span>100đ</span>
                </div>
            </div>

            <div class="sp-one">
                <img src="../img/product-1.jpg" alt="" />
                <div class="text-sp">
                    <legend>Tên sản phẩm</legend>
                    <p>
                        mô tả
                    </p>
                    <span>100đ</span>
                </div>
            </div>

            <div class="sp-one">
                <img src="../img/product-1.jpg" alt="" />
                <div class="text-sp">
                    <legend>Tên sản phẩm</legend>
                    <p>
                        mô tả
                    </p>
                    <span>100đ</span>
                </div>
            </div> -->
        </div>
    </div