<?php
require_once "../models/loai_sach.php";
require_once "../models/san_pham.php";
require_once "../models/khach_hang.php";
require_once "../models/don_hang.php";
include_once '../models/chart.php';


$act = $_GET['act'] ?? "";
switch ($act) {
    case "":
        $title = "Tổng hợp";
        $totalday = total_ngay();
        $totalweek  = total_tuan();
        $totalmonth  = total_thang();
        $totaldoanhthu  = total_doanhthu();
        $totalsoluongban  = total_soLuongBan();
        $sp_bannhieunhat = sanPhamBanNhieuNhat();
        $slctk = soLuongConTrongKho();
        $khachhangmoi = soLuongKhachHangMoi();
        $thoigian = thoiGianMuaNhieuNhat();
        // var_dump($slctk);die;
        // extract($totalday);
        $VIEW = './layout/home.php';
        break;
        //BAI LOAI
    case "danhmuc":
        $title = "Danh Sách danh mục";
        if (isset($_GET['ma_dm'])) {
            $ma_dm = $_GET['ma_dm'];
            delete_dm($ma_dm);
            $thongbao = "Xóa dữ liệu thành công!";
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $ma_dm = $_POST['ma_dm'];
            delete_dm_item($ma_dm);
            $thongbao = 'xóa dữ liệu thành công!';
        }
        $listsach = all_list_dm();
        $VIEW = "loai-sach/list.php";
        break;
    case "add":
        $title = "Thêm danh mục";
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $ten_dm = $_POST['ten_dm'];
            $trang_thai = $_POST['trang_thai'] ?? 0;
            add_dm($ten_dm, $trang_thai);
            setcookie("thongbao", "Thêm Loại thành công!", time() + 1);
            header("location: ?act=danhmuc");
            die;
        }
        $VIEW = "loai-sach/add.php";
        break;
    case "update":
        $title = "Update danh mục";
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $ten_dm = $_POST['ten_dm'];
            $ma_dm = $_POST['ma_dm'];
            $trang_thai = $_POST['trang_thai'] ?? 0;
            update_dm($ma_dm, $ten_dm, $trang_thai);
            $thongbao = "Cập nhập dữ liệu thành công";
        }
        if (isset($_GET['ma_dm'])) {
            $ma_dm = $_GET['ma_dm'];
            $dm = list_one_dm($ma_dm);
            extract($dm);
        }
        $VIEW = "loai-sach/update.php";
        break;
        //BAI SẢN PHẨM sách
    case 'sanpham':
        $title = "Danh sách sản phẩm";
        if (isset($_GET['ma_sach'])) {
            $ma_sach = $_GET['ma_sach'];
            delete_sach($ma_sach);
            $thongbao = "Xóa dữ liệu thành công!";
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $ma_sach = $_POST['ma_sach'];
            delete_sach_item($ma_sach);
            $thongbao = 'xóa dữ liệu thành công!';
        }

        $sanpham = all_list_sanpham();
        $VIEW = "san-pham/list.php";
        break;
    case 'addsp':
        $title = "thêm sản phẩm";
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            extract($_POST);
            $file = $_FILES['hinh_sach'];
            $hinh_sach = $file['name'];
            move_uploaded_file($file['tmp_name'], "../img/" . $hinh_sach);

            sach($ten_sach, $hinh_sach, $so_luong, $gia_sach, $mo_ta, $nha_xb, $ma_dm);
            header("location: ?act=sanpham");
            die;
        }
        $listsach = all_list_dm();
        $VIEW = "san-pham/add.php";
        break;
    case 'updatesp':
        $title = "Update sản phẩm";
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            extract($_POST);

            $file = $_FILES['hinh_sach'];
            //Lấy tên ảnh
            if ($file['size'] > 0) {
                $hinh_sach = $file['name'];
                //Upload ảnh
                move_uploaded_file($file['tmp_name'], "../img/" . $hinh_sach);
            } else {
                $hinh_sach = $_POST['hinh_sach'];
            }
            update_sp($ma_sach, $ten_sach, $hinh_sach, $so_luong, $gia_sach, $mo_ta, $nha_xb, $ma_dm);
            $thongbao = "Cập nhập dữ liệu thành công";
        }
        if (isset($_GET['ma_sach'])) {
            $ma_sach = $_GET['ma_sach'];
            $sach = list_one_sach($ma_sach);
            extract($sach);
        }
        $listsach = all_list_dm();
        $VIEW = "san-pham/update.php";
        break;
        //     //KHACH HANG
    case "listkh":
        $title = 'Danh sách khách hàng';
        if (isset($_GET['ma_kh'])) {
            $ma_kh = $_GET['ma_kh'];
            delete_kh($ma_kh);
            $thongbao = "Xóa dữ liệu thành công!";
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $ma_kh = $_POST['ma_kh'];
            delete_kh_item($ma_kh);
            $thongbao = 'xóa dữ liệu thành công!';
        }
        $khachhang = load_all_kh();
        $VIEW = "khach-hang/list.php";
        break;
    case "updatekh":
        $title = "Sửa khách hàng";
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            extract($_POST);
            update_kh($ma_kh, $ten_kh, $email_kh, $mat_khau, $so_dt, $dia_chi, $gioi_tinh, $cap_bac, $trang_thai);
            $thongbao = "Cập nhập dữ liệu thành công";
        }
        if (isset($_GET['ma_kh'])) {
            $ma_kh = $_GET['ma_kh'];
            $kh = list_one_kh($ma_kh);
            extract($kh);
            $VIEW = "Khach-hang/update.php";
        }
        break;
    case "listdh":
        $title = "Đơn hàng";
        $listdh = load_all_dhadnct();
        // var_dump($listdh);
        $VIEW = "don-hang/list.php";
        break;
    case "listdhct":
        $title = "chi tiết đơn hàng";
        if (isset($_GET['ma_ct'])) {
            $ma_ct = $_GET['ma_ct'];
            $loadone = list_dh_ctdh($ma_ct);
            extract($loadone);
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // var_dump($_POST); die;
            if (isset($_POST['trang_thai'])) {
                $trang_thai = ($_POST['trang_thai'] === '1' ? "Đang xử lí" : ($_POST['trang_thai'] === '2' ? "Đang giao hàng" : ($_POST['trang_thai'] === '3' ? "Đơn hàng thành công !" : ($_POST['trang_thai'] === '4' ? "Huỷ đơn hàng" : ""))));
                $ma_dh = isset($_POST['ma_dh']) ? $_POST['ma_dh'] : $_POST['ma_dh'];
                updateDonHangStatus($trang_thai, $ma_dh);
                header('location: ?act=listdh');
                exit();
                // echo "<script>alert('thay đổi thành công!');</script>";
                // $listctdh = list_dh_ctdh($ma_ct);
            }
        }
        $VIEW = "don-hang/chitietsp.php";
        break;
    default:
        // include "../admin/404.php";
        echo "../404.php";
}



include './layout/header.php';
include $VIEW;
include './layout/footer.php';
