<?php
// include_once './pdo.php';
//hàm thêm sách vào giỏ
function add_to_cart($ma_sach, $ten_sach, $so_luong, $hinh_sach, $gia_sach) {
    $sach = [
        'ma_sach'=>$ma_sach,
        'ten_sach'=>$ten_sach,
        'so_luong'=>$so_luong,
        'hinh_sach'=>$hinh_sach,
        'gia_sach'=>$gia_sach,
        'thanh_tien' => $gia_sach * $so_luong
    ];
    //GIỏ hàng chưa có, thì thêm giỏ mới.
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'][$ma_sach] = $sach;
    } else {
        //GIỏ hàng đã có
        //Kiểm tra xem hàng đã có trong giỏ chưa, nếu có thì chỉ cần tăng số lượng lên
        if (isset($_SESSION['cart'][$ma_sach])) {
            $_SESSION['cart'][$ma_sach]['so_luong'] += 1;
        } else {
            $_SESSION['cart'][$ma_sach] = $sach;
        }
    }
}

//Tính tổng của đơn hàng
function sum_cart() {
    $carts = $_SESSION['cart'];
    $sum = 0;
    foreach ($carts as $cart) {
        $sum += $cart['gia_sach'] * $cart['so_luong'];
    }
    return $sum;
}

//tạo đơn hàng
function inser_donhang($ten_dh,$diachi_dh, $sodt_dh, $email_dh,$dh_pttt, $tong_tien, $ngay_dh, $trang_thai){
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date = date("Y-m-d H:i:s");
    $sql = "INSERT INTO don_hang(ten_dh, diachi_dh, sodt_dh, email_dh, dh_pttt, tong_tien, ngay_dh, trang_thai) VALUES ('$ten_dh', '$diachi_dh', '$sodt_dh', '$email_dh','$dh_pttt', '$tong_tien', '$date', '$trang_thai')";
    // echo $sql; die;
    return pdo_execute_return_lastInsertId($sql);
}
function load_one_dh($ma_dh){
    $sql = "SELECT * FROM don_hang WHERE ma_dh = $ma_dh";
    return pdo_query_one($sql);
}

//thm vào giỏ hàng
function insert_ct_donhang($ma_kh, $ma_dh, $ma_sach, $hinh_ct, $so_luong, $don_gia, $thanh_tien){
    $sql = "INSERT INTO chitiet_donhang(ma_kh, ma_dh, ma_sach, hinh_ct, so_luong, don_gia, thanh_tien) VALUES ('$ma_kh', '$ma_dh', '$ma_sach', '$hinh_ct', '$so_luong', '$don_gia', '$thanh_tien')";
    return pdo_execute($sql);
}
function load_all_ctdh($ma_dh){
    $sql = "SELECT * FROM chitiet_donhang WHERE ma_dh = $ma_dh";
    return pdo_query($sql);
}







