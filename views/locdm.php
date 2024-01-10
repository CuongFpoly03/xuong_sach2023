<!-- Product Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-0 gx-5 align-items-end">
            <div class="col-lg-6">
                <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-5 mb-3"> Danh mục <?= $tendanhmuc ?> </h1>
                </div>
            </div>
        </div>
        <div class="row-category">
            <a href="?act=sanpham"><button>ALL SẢN PHẨM</button></a>
            <div class="search" style="margin-left: 600px;">
                <form action="?act=searchsp" method ="POST">
                    <input type="search" name="kyw" class="mar-search" placeholder="search..." style="color: black;">
                    <input type="submit" value="search">
                </form>
            </div>
        </div>
        <div class="tab-content">
            <div id="tab-1" class="tab-pane fade show p-0 active">
                <?php foreach ($loc_madm as $asp) : ?>
                    <?php extract($asp) ?>
                    <div class="row g-4">
                        <div class="col-xl data-wow-delay=" 0.1s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="img/<?= $hinh_sach ?>" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href=""><?= $ten_sach ?></a>
                                    <span class="text-dark me-1">$<?= $gia_sach ?></span>
                                    <span class="text-danger text-decoration-line-through">$29.00</span>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="?act=chitiet&ma_sach=<?= $ma_sach ?>"><i class="fa fa-eye text-dark me-2"></i>Chi tiết</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href=""><i class="fa fa-shopping-bag text-dark me-2"></i>Thêm vào giỏ hàng</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                    <a class="btn btn-dark rounded-pill py-3 px-5" href="">Hết</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product End -->