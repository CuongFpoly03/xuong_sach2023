<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="./img/carousel-1.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-7">
                                <h1 class="display-2 mb-5 animated slideInDown">Nhà sách 24h</h1>
                                <a href="?act=sanpham" class="btn btn-warning rounded-pill py-sm-3 px-sm-5">Sản phẩm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="./img/carousel-2.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-7">
                                <h1 class="display-2 mb-5 animated slideInDown">Nhà sách 24h</h1>
                                <a href="?act=sanpham" class="btn btn-warning rounded-pill py-sm-3 px-sm-5">Sản phẩm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->
<!-- danh mục loại  -->
<div class="category">
    <h1>Danh mục loại</h1>
    <section class="category-noo">
        <?php foreach ($six_dm as $sdm) : ?>
            <?php extract($sdm) ?>
            <div class="small-cate">
                <a href="">
                    <img src="../img/product-4.jpg" alt="">
                    <legend><?= $ten_dm ?></legend>
                </a>
            </div>
        <?php endforeach; ?>
        <!-- <div class="small-cate">
            <img src="../img/product-1.jpg" alt="">
            <legend>test 1</legend>
        </div>
        <div class="small-cate">
            <img src="../img/product-1.jpg" alt="">
            <legend>test 1</legend>
        </div>
        <div class="small-cate">
            <img src="../img/product-1.jpg" alt="">
            <legend>test 1</legend>
        </div>
        <div class="small-cate">
            <img src="../img/product-1.jpg" alt="">
            <legend>test 1</legend>
        </div>
        <div class="small-cate">
            <img src="../img/product-1.jpg" alt="">
            <legend>test 1</legend>
        </div> -->
    </section>
</div>
<!-- Product Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-0 gx-5 align-items-end">
            <div class="col-lg-6">
                <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-5 mb-3">Sản phẩm sách</h1>
                    <p>BOOKISH.VNAPP KOMO+PHIẾU QUÀ TẶNG NHÀ SÁCH 24H</p>
                </div>
            </div>
        </div>
        <div class="tab-content">
            <div id="tab-1" class="tab-pane fade show p-0 active">
                <?php foreach ($ten_list_sach as $asp) : ?>
                    <?php extract($asp) ?>
                    <div class="row g-4">
                        <div class="col-xl data-wow-delay="0.1s">
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
                                        <a class="text-body" href="?act=chitiet&ma_sach=<?=$ma_sach ?>"><i class="fa fa-eye text-dark me-2"></i>Chi tiết</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="?act=cart&ma_sach=<?= $ma_sach?>"><i class="fa fa-shopping-bag text-dark me-2"></i>Thêm vào giỏ hàng</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                    <a class="btn btn-dark rounded-pill py-3 px-5" href="?act=sanpham">Xem thêm sản phẩm</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product End -->
<!-- Testimonial Start -->
<div class="container-fluid bg-light bg-icon py-6 mb-5">
    <div class="container">
        <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-5 mb-3">Đánh giá</h1>
            <p>2017 - 2023 Sách Mới.Net - Thư viện Ebook miễn phí
                Điều khoản sử dụng - Chính sách bảo mật</p>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="testimonial-item position-relative bg-white p-5 mt-4">
                <i class="fa fa-quote-left fa-3x text-dark position-absolute top-0 start-0 mt-n4 ms-5"></i>
                <p class="mb-4">Để review về một cuốn sách, trước tiên hãy chọn cho mình một cuốn sách mà bản thân yêu thích. Tất nhiên, chẳng có ai lãng phí thời gian để đọc một cuốn sách vô bổ, không có ý nghĩa hay không hứng thú mấy.</p>
                <div class="d-flex align-items-center">
                    <img class="flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg" alt="">
                    <div class="ms-3">
                        <h5 class="mb-1">Hà Lê</h5>
                        <span>Thành Viên</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-item position-relative bg-white p-5 mt-4">
                <i class="fa fa-quote-left fa-3x text-dark position-absolute top-0 start-0 mt-n4 ms-5"></i>
                <p class="mb-4">Khi chúng ta chọn được quyển sách yêu thích và đọc chúng với tất cả tâm huyết và cảm xúc thì chắc chắn khi viết bình luận về nó sẽ cuốn hút hơn bất cứ thứ gì.</p>
                <div class="d-flex align-items-center">
                    <img class="flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg" alt="">
                    <div class="ms-3">
                        <h5 class="mb-1">Nga nguyễn</h5>
                        <span>Quản lí</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-item position-relative bg-white p-5 mt-4">
                <i class="fa fa-quote-left fa-3x text-dark position-absolute top-0 start-0 mt-n4 ms-5"></i>
                <p class="mb-4">Không cần là một quyển sách nổi tiếng hay vang bóng một thời, chỉ cần là một cuốn sách để lại ấn tượng nhất với bạn và bạn cũng nghĩ nó sẽ để lại ấn tượng cho những người khác.</p>
                <div class="d-flex align-items-center">
                    <img class="flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" alt="">
                    <div class="ms-3">
                        <h5 class="mb-1">Yến Lê</h5>
                        <span>Content</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-item position-relative bg-white p-5 mt-4">
                <i class="fa fa-quote-left fa-3x text-dark position-absolute top-0 start-0 mt-n4 ms-5"></i>
                <p class="mb-4">Đừng cố ép mình phải viết review về một cái tên best-seller khi trong đầu của bạn kiến thức về nó chỉ là số không.</p>
                <div class="d-flex align-items-center">
                    <img class="flex-shrink-0 rounded-circle" src="img/testimonial-4.jpg" alt="">
                    <div class="ms-3">
                        <h5 class="mb-1">Dũng Trần</h5>
                        <span>Thành viên</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- Blog Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-5 mb-3">Blog Mới Nhất</h1>
            <p>2017 - 2023 Sách Mới.Net - Thư viện Ebook miễn phí
                Điều khoản sử dụng - Chính sách bảo mật</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid" src="img/blog-1.jpg" alt="">
                <div class="bg-light p-4">
                    <a class="d-block h5 lh-base mb-4" href="">Họ lập nên sự nghiệp bằng cách nào!</a>
                    <div class="text-muted border-top pt-4">
                        <small class="me-3"><i class="fa fa-user text-dark me-2"></i>Admin</small>
                        <small class="me-3"><i class="fa fa-calendar text-dark me-2"></i>01/05/2023</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <img class="img-fluid" src="img/blog-2.jpg" alt="">
                <div class="bg-light p-4">
                    <a class="d-block h5 lh-base mb-4" href="">Những kẻ xất chủng.</a>
                    <div class="text-muted border-top pt-4">
                        <small class="me-3"><i class="fa fa-user text-dark me-2"></i>Admin</small>
                        <small class="me-3"><i class="fa fa-calendar text-dark me-2"></i>01/05/2023</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <img class="img-fluid" src="img/blog-3.jpg" alt="">
                <div class="bg-light p-4">
                    <a class="d-block h5 lh-base mb-4" href="">Thế giới quả là giống lớn có quả nhiều điều phải làm.</a>
                    <div class="text-muted border-top pt-4">
                        <small class="me-3"><i class="fa fa-user text-dark me-2"></i>Admin</small>
                        <small class="me-3"><i class="fa fa-calendar text-dark me-2"></i>01/05/2023</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->