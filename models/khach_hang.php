<?php 

// require_once "./pdo.php";

function load_all_kh(){
    $sql = "SELECT * FROM khach_hang ORDER BY ma_kh desc";
    return pdo_query($sql);
}
function delete_kh($ma_kh)
{
    $sql = "DELETE FROM khach_hang WHERE ma_kh = $ma_kh";
    pdo_execute($sql);
}
function delete_kh_item($ma_kh)
{
    $mkh = "";
    foreach ($ma_kh as $item) {
        $mkh .= $item . ", ";
        $mkh = rtrim($mkh, ",");
        $sql = "DELETE FROM khach_hang WHERE ma_kh IN ($mkh)";
        pdo_execute($sql);
    }
}

function list_one_kh($ma_kh)
{
    $sql = "SELECT * from khach_hang WHERE ma_kh = $ma_kh";
    return pdo_query_one($sql);
}

function update_kh($ma_kh, $ten_kh, $email_kh, $mat_khau,$so_dt, $dia_chi, $gioi_tinh, $cap_bac, $trang_thai)
{
    $sql = "UPDATE khach_hang SET ten_kh = '$ten_kh',  email_kh = '$email_kh',  mat_khau = '$mat_khau', so_dt = '$so_dt',  dia_chi = '$dia_chi',  gioi_tinh = '$gioi_tinh', cap_bac = '$cap_bac', trang_thai= '$trang_thai' WHERE ma_kh = $ma_kh";
    pdo_execute($sql);
}

function add_tk( $ten_kh,$email_kh, $mat_khau)
{
    $sql = "INSERT INTO khach_hang(ten_kh, email_kh, mat_khau ) VALUES('$ten_kh','$email_kh','$mat_khau')";
    pdo_execute($sql);
}

function check($ten_kh, $mat_khau){
    $sql = "SELECT * FROM khach_hang WHERE ten_kh = '".$ten_kh."' AND mat_khau = '".$mat_khau."'";
    $dn = pdo_query_one($sql);
    return $dn;
}
function check_email($email_kh){
    $sql = "SELECT * FROM khach_hang WHERE email_kh = '".$email_kh."' ";
    $kh = pdo_query_one($sql);
    return $kh;
}
?>