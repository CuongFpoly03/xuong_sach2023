<?php
require_once 'pdo.php';
// function total_ngay()
// {
//     $sql = "SELECT SUM(tong_tien) AS total FROM don_hang WHERE DATE(ngay_dh) = CURDATE()";
//     $result = pdo_query($sql);
//     $total = $result[0]['total']; // Lấy giá trị tổng doanh thu từ kết quả truy vấn
//     return $total; // Trả về tổng doanh thu
// }
//tổng doanh thu 1ngày
function total_ngay()
{
    $sql = "SELECT SUM(tong_tien) AS total FROM don_hang WHERE DATE(ngay_dh) = CURDATE()";
    // var_dump($sql); die;
    $result = pdo_query($sql);

    if ($result) {
        if (count($result) > 0 && isset($result[0]['total'])) {
            return $result[0]['total'];
        } else {
            return 0.0;
        }
    } else {
        return 0.0;
    }
}
//tổng doanh thu 1 tuân
function total_tuan()
{
    $sql = "SELECT SUM(tong_tien) AS total FROM don_hang WHERE ngay_dh BETWEEN DATE_SUB(CURDATE(), INTERVAL 1 WEEK) AND CURDATE()";
    $result = pdo_query($sql);

    if ($result) {
        if (count($result) > 0 && isset($result[0]['total'])) {
            return floatval($result[0]['total']);
        } else {
            return 0.0;
        }
    } else {
        return 0.0;
    }
}
// thang
function total_thang()
{
    $sql = "SELECT SUM(tong_tien) AS total FROM don_hang WHERE MONTH(ngay_dh) = MONTH(CURDATE()) AND YEAR(ngay_dh) = YEAR(CURDATE())";
    $result = pdo_query($sql);

    if ($result) {
        if (count($result) > 0 && isset($result[0]['total'])) {
            return floatval($result[0]['total']);
        } else {
            return 0.0;
        }
    } else {
        return 0.0;
    }
}

// all doanh thu
function total_doanhthu()
{
    $sql = "SELECT SUM(tong_tien) AS total FROM don_hang";
    $result = pdo_query($sql);

    if ($result) {
        if (count($result) > 0 && isset($result[0]['total'])) {
            return floatval($result[0]['total']);
        } else {
            return 0;
        }
    } else {
        return 0;
    }
}

// tinh số lượng bán được 
function total_soLuongBan()
{
    $sql = "SELECT SUM(so_luong) AS total_quantity FROM chitiet_donhang";
    $result = pdo_query($sql);

    if ($result) {
        if (count($result) > 0 && isset($result[0]['total_quantity'])) {
            return intval($result[0]['total_quantity']);
        } else {
            return 0;
        }
    } else {
        return 0;
    }
}


// tinh sach ban nhieu nhả
function sanPhamBanNhieuNhat()
{
    $sql = "SELECT s.ma_sach, s.ten_sach, SUM(ctdh.so_luong) AS total_quantity 
            FROM chitiet_donhang ctdh
            JOIN sach s ON ctdh.ma_sach = s.ma_sach
            GROUP BY ctdh.ma_sach 
            ORDER BY total_quantity DESC 
            LIMIT 1";

    $result = pdo_query($sql);

    if ($result) {
        if (count($result) > 0 && isset($result[0]['ma_sach'])) {
            return $result[0];
        } else {
            return null;
        }
    } else {
        return null;
    }
}

// soluong sách còn trong kho 
function total_soluongdaban()
{
    $sql = "SELECT ma_sach, SUM(so_luong) AS total_soluong FROM chitiet_donhang GROUP BY ma_sach";
    $result = pdo_query($sql);

    if ($result) {
        return $result;
    } else {
        return [];
    }
}
function total_soluongtrongkho()
{
    $sql = "SELECT ma_sach, so_luong AS total_trongkho, ten_sach FROM sach";
    $result = pdo_query($sql);

    if ($result) {
        return $result;
    } else {
        return [];
    }
}
function soLuongConTrongKho()
{
    $sachdaban = total_soluongdaban();
    $conlaitrongkho = total_soluongtrongkho();
    $conlai = [];

    foreach ($conlaitrongkho as $sp_conlai) {
        $ma_sach = $sp_conlai['ma_sach'];
        $total_sp_conlai = $sp_conlai['total_trongkho'];
        $ten_sach = $sp_conlai['ten_sach'];

        foreach ($sachdaban as $sold) {
            if ($sold['ma_sach'] === $ma_sach) {
                $total_sp_daban = $sold['total_soluong'];
                $soluong_conlai = $total_sp_conlai - $total_sp_daban;
                $conlai[$ten_sach] = $soluong_conlai;
                break;
            }
        }
    }

    return $conlai; // Trả về một mảng chứa thông tin về số lượng còn trong kho của mỗi sản phẩm
}


// soluong khach hang moi
function soLuongKhachHangMoi()
{
    $sql = "SELECT COUNT(DISTINCT kh.ma_kh) AS khachhang_moi 
            FROM khach_hang kh
            LEFT JOIN chitiet_donhang dh ON kh.ma_kh = dh.ma_kh
            WHERE dh.ma_kh IS NULL";

    $result = pdo_query_one($sql);

    if ($result) {
        return $result['khachhang_moi'];
    } else {
        return 0; 
    }
}

// thời gian mua hàng nhiều nhất
function thoiGianMuaNhieuNhat()
{
    $sql = "SELECT DATE_FORMAT(ngay_dh, '%Y-%m-%d') AS ngay_dh, COUNT(*) AS total_ngaydh 
            FROM don_hang 
            GROUP BY ngay_dh 
            ORDER BY total_ngaydh DESC 
            LIMIT 1";

    $result = pdo_query_one($sql);

    if ($result) {
        return $result; 
    } else {
        return null;
    }
}

