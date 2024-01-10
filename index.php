<?php
session_start();
include './models/loai_sach.php';
include './models/san_pham.php';
include_once './models/cart.php';
include_once './models/khach_hang.php';
include_once './models/don_hang.php';

$all_danhmuc = all_list_dm();
$six_dm = six_list_dm();
$ten_list_sach = ten_list_sach();
$muoi_list_sach = all_list_sanpham();

$act = $_GET['act'] ?? "";
switch ($act) {
    case '':
        $title = "Trang chủ";
        $VIEW = "./views/home.php";
        break;
    case 'sanpham':
        $_SESSION['URI'] = $_SERVER['REQUEST_URI'];
        // echo $_SESSION['URI'];
        $title = "Sản phẩm";
        $VIEW = "./views/sanpham.php";
        break;
    case 'chitiet':
        $_SESSION['URI'] = $_SERVER['REQUEST_URI'];
        $title = 'Chi tiết';
        $ma_sach = $_GET['ma_sach'];
        $muoi_list_sach_one = all_list_sanpham_one($ma_sach);
        extract($muoi_list_sach_one);
        $sp_cungloai = sp_cungloai($ma_dm, $ma_sach);
        $VIEW = './views/detail.php';
        break;
    case 'locdanhmuc':
        $title = 'Danh mục';
        if (isset($_GET['ma_dm']) && ($_GET['ma_dm'] > 0)) {
            $ma_dm = $_GET['ma_dm'];
        } else {
            $ma_dm = 0;
        }
        $loc_madm = loadall_dm_loc("", $ma_dm);
        $all_danhmuc = all_list_dm($ma_dm);
        $tendanhmuc = load_ten_dm($ma_dm);
        $VIEW = './views/locdm.php';
        break;
    case 'searchsp':
        $title = 'Search';
        if (isset($_POST['kyw']) && (['kyw'] != "")) {
            $kyw = $_POST['kyw'];
        } else {
            $kyw = "";
        }
        if (isset($_GET['ma_dm']) && ($_GET['ma_dm'] > 0)) {
            $ma_dm = $_GET['ma_dm'];
        } else {
            $ma_dm = 0;
        }
        $loc_madm = loadall_dm_loc("$kyw", $ma_dm);
        $all_danhmuc = all_list_dm($ma_dm);
        $VIEW = './views/search.php';
        break;
        //login/logout
    case "logup":
        $title = "Đăng ký";
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // var_dump($_POST); die;
            $ten_kh = $_POST['ten_kh'];
            $email_kh = $_POST['email_kh'];
            $mat_khau = $_POST['mat_khau'];
            add_tk($ten_kh, $email_kh, $mat_khau);
            setcookie("thongbao", "Thêm Tài khoản thành công!", time() + 1);
            // header("location: ?act=login");
            // die;
        }
        $VIEW = 'views/accounts/signup.php';
        break;
    case "quenmk":
        $title = "Quên mk";
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // var_dump($_POST); die;
            $email_kh = $_POST['email_kh'];
            $check_email = check_email($email_kh);
            if (is_array($check_email)) {
                $thongbao = "Mật khẩu của bạn là:" . $check_email['mat_khau'];
            } else {
                $thongbao = "email này k tồn tại";
            }
        }
        $VIEW = 'views/accounts/quenmk.php';
        break;
    case "login":
        $title = "Đăng Nhập";
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // echo '<pre>';
            // var_dump($_POST); die;
            // echo '</pre>';
            $ten_kh = $_POST['ten_kh'];
            $mat_khau = $_POST['mat_khau'];
            $check_login = check($ten_kh, $mat_khau);
            if (is_array($check_login)) {
                $_SESSION['ten_kh'] = $check_login;
                // $_SESSION['login-success'] = true;
                header("location: ?act=");
                die;
            } else {
                echo "<script> alert('vui lòng nhâp lại thông tin !');</script>";
            }
        }
        $VIEW = './views/accounts/login.php';
        break;
    case 'thoat':
        session_unset();
        header("location: ?act=login");
        break;
    case "cart":
        //Lưu trữ thông URL trước đó để quay về
        // HTTP_REFF
        // $url = $_SESSION['URI'] ?? '';
        // $url = explode("?", $url);
        // // echo '<pre>';
        // var_dump($url);die;
        // // echo '</pre>';
        // unset($_SESSION['URI']);
        // // var_dump($_SESSION['cart']);die;
        // // unset($_SESSION['cart']);die;
        // echo $url[1];die;
        //lấy mã sách 
        if (isset($_GET['ma_sach'])) {
            $ma_sach = $_GET['ma_sach'] ?? '';
            $sach = all_list_sanpham_one($ma_sach);
            // extract()
            add_to_cart($sach['ma_sach'], $sach['ten_sach'], $sach['so_luong'], $sach['hinh_sach'], $sach['gia_sach']);
        }
        header("location: " . $_SERVER['HTTP_REFERER']);
        break;
    case 'view-cart':
        $title = "sản phẩm giỏ hàng";
        // Xử lý cập nhật số lượng sản phẩm trong giỏ hàng
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_cart'])) {
            foreach ($_SESSION['cart'] as $key => $product) {
                if (isset($_POST['quantity_' . $product['ma_sach']])) {
                    $new_quantity = $_POST['quantity_' . $product['ma_sach']];
                    // Cập nhật số lượng sản phẩm
                    $_SESSION['cart'][$key]['so_luong'] = $new_quantity;
                    // Tính lại thành tiền của sản phẩm
                    $_SESSION['cart'][$key]['thanh_tien'] = $new_quantity * $product['gia_sach'];
                }
            }
        }
        // Tính toán tổng tiền của giỏ hàng
        $total_price = 0;
        foreach ($_SESSION['cart'] as $product) {
            $total_price += $product['thanh_tien'];
        }
        $carts = $_SESSION['cart'];
        $sum = sum_cart();
        $VIEW = './views/view_cart.php';
        break;
    case 'xoacart':
        if (isset($_GET['ma_sach'])) {
            $xoacart = $_GET['ma_sach'];
            if (isset($_SESSION['cart'][$xoacart])) {
                unset($_SESSION['cart'][$xoacart]);
            }
            header('location: ?act=view-cart');
            break;
        }
    case 'hoadon':
        $title = 'Thông tin thanh toán';
        $carts = $_SESSION['cart'];
        $sum = sum_cart();
        $VIEW = './views/hoadon.php';
        break;
    case 'hoadonconfirm':
        $title = 'Thông tin thanh toán';
        // điều kện đăng nhập với đặt hàng
        if (!isset($_SESSION['ten_kh'])) {
            echo "<script>alert('Mời bạn đăng nhập.');</script>";
            $VIEW = './views/accounts/login.php'; // Chuyển hướng đến trang đăng nhập
            break;
        }
        // tạo đơn hàng 
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $ten_dh = $_POST['ten_kh'];
            $email_dh = $_POST['email_kh'];
            $diachi_dh = $_POST["dia_chi"];
            $sodt_dh = $_POST['so_dt'];
            $dh_pttt = isset($_POST['dh_pttt']) ? ($_POST['dh_pttt'] === 'one' ? "Thanh toán trực tiếp" : ($_POST['dh_pttt'] === 'two' ? "Thanh toán chuyển khoản" : "Thanh toán online")) : "Không có lựa chọn";
            $trang_thai = ($_POST['trang_thai'] === '1' ? "Đang xử lí" : ($_POST['trang_thai'] === '2' ? "Đang giao hàng" : ($_POST['trang_thai'] === '3' ? "Đơn hàng thành công!" : "")));
            $tong_tien = sum_cart();
            $ngay_dh = date('d/m/Y h:i:sa');
            $ma_dh = inser_donhang($ten_dh, $diachi_dh, $sodt_dh, $email_dh, $dh_pttt, $tong_tien, $ngay_dh, $trang_thai);
            // Lưu thông tin chi tiết đơn hàng vào CSDL
            foreach ($_SESSION['cart'] as $cart) {
                // Đảm bảo hàm insert_ct_donhang() đã được định nghĩa đúng.
                insert_ct_donhang($_SESSION['ten_kh']['ma_kh'], $ma_dh, $cart['ma_sach'], $cart['hinh_sach'], $cart['so_luong'], $cart['gia_sach'], $cart['thanh_tien']);
            }

            // Xóa giỏ hàng sau khi xử lý đơn hàng
            $_SESSION['cart'] = [];
        }
        $carts = $_SESSION['cart'];
        $sum = sum_cart();
        $VIEW = './views/hoadonconfirm.php';
        break;
    case "qldonhang":
        $title = "Quản lí đơn hàng";
        // Xử lý khi người dùng gửi form để cập nhật trạng thái đơn hàng
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['trang_thai'])) {
                $ma_dh = isset($_GET['ma_dh']) ? $_GET['ma_dh'] : $_POST['ma_dh'];
                $trang_thai_hien_tai = getCurrentOrderTrangthai($ma_dh);
        
                if ($trang_thai_hien_tai === 'Đang xử lý') {
                    $trang_thai = ($_POST['trang_thai'] === '1' ? "Huỷ đơn hàng" : "");
                    updateDonHangTrangthai($trang_thai, $ma_dh);
                    header("Location: ?act=qldonhang");
                    exit();
                } else {
                    echo "Không thể huỷ đơn hàng ở trạng thái hiện tại.";
                    // Thông báo cho người dùng biết rằng không thể huỷ đơn hàng ở trạng thái hiện tại
                }
            }
        }
        $listdonhang = load_all_dh_home();
        $VIEW = './views/qldonhang.php';
        break;
    default:
        echo "./404.php";
        break;
}


include './views/header.php';
include $VIEW;
include './views/footer.php';
