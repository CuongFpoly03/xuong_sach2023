<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style2.css">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York, USA</small>
                <small class="ms-4"><i class="fa fa-envelope me-2"></i>info@example.com</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small>Follow us:</small>
                <a class="text-body ms-3" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-twitter"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="?act=" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="fw-bold text-warning  m-0">Nhà<span class="text-success"> Sách</span> 24h</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="?act=" class="nav-item nav-link active">Trang chủ</a>
                    <!-- <a href="about.html" class="nav-item nav-link">Về</a> -->
                    <!-- <a href="?act=sanpham" class="nav-item nav-link">All sản phẩm</a> -->
                    <div class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Danh mục</a>
                        <div class="dropdown-menu m-0">
                            <?php foreach ($all_danhmuc as $adm) : ?>
                                <?php extract($adm) ?>
                                <a href="?act=locdanhmuc&ma_dm=<?= $ma_dm ?>" class="dropdown-item"><?= $ten_dm ?></a>
                            <?php endforeach ?>
                            <!-- <a href="feature.html" class="dropdown-item">Sách giáo khoa</a>
                            <a href="testimonial.html" class="dropdown-item">Tài lệu</a>
                            <a href="404.html" class="dropdown-item">Sách nghệ thuật</a> -->
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Liên hệ</a>
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn-sm-square bg-white rounded-circle ms-3" href="?act=searchsp">
                        <small class="fa fa-search text-body"></small>
                    </a>
                    <a class="btn-sm-square bg-white rounded-circle ms-3" href="?act=view-cart">
                        <small class="fa fa-shopping-bag text-body">
                            <?php
                            if (isset($_SESSION['cart'])) {
                                echo count($_SESSION['cart']);
                            }
                            ?>
                        </small>
                    </a>

                    <?php
                    if (isset($_SESSION['ten_kh'])) {
                        extract($_SESSION['ten_kh']);
                    ?>
                        <div class="nav-item dropdown">
                            <a href="" class="nav-link " data-bs-toggle="dropdown">👨🏻‍💼<?= $ten_kh ?></a>
                            <div class="dropdown-menu m-0">
                                <a href="?act=qldonhang" class="dropdown-item">Quản lí đơn hàng</a>
                                <a href="" class="dropdown-item">Đổi mật khẩu</a>
                                <a href="" class="dropdown-item">cập nhập tài khoản</a>
                               <?php if($cap_bac == 1 ){ ?> <a href="admin/index.php" class="dropdown-item">Đăng nhập Admin</a><?php }?>
                                <a href="?act=thoat" class="dropdown-item">Thoát</a>
                            </div>
                        </div>
                    <?php } else {
                    ?>
                            <a class="btn-sm-square bg-white rounded-circle ms-3" href="?act=login">
                                <small class="fa fa-user text-body"></small>
                            </a>
                            <?php //include_once 'views/accounts/login.php'; ?>
                    <?php }
                    ?>
                   
                </div>
            </div>
        </nav>
    </div>