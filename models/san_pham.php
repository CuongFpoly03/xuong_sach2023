<?php
require_once "pdo.php";

function all_list_sanpham()
{
    $sql = "SELECT sach.*, ten_dm FROM sach JOIN danh_muc ON sach.ma_dm = danh_muc.ma_dm ORDER BY ma_sach DESC";
    return  pdo_query($sql);
}

function all_list_sanpham_one($ma_sach)
{
    $sql = "SELECT sach.*, ten_dm FROM sach JOIN danh_muc ON sach.ma_dm = danh_muc.ma_dm WHERE ma_sach = $ma_sach";
    return  pdo_query_one($sql);
}

function ten_list_sach(){
    $sql = "SELECT * FROM sach ORDER BY ma_sach DESC limit 0,10";
    return  pdo_query($sql);
}
//loc sp kyw 
function loadall_dm_loc($kyw = "", $ma_dm)
{
    $sql = "SELECT * FROM sach WHERE 1";
    if ($kyw != "") {
        $sql .= " AND ten_sach like '%" . $kyw . "%'    ";
    }
    if ($ma_dm > 0) {
        $sql .= " AND ma_dm = $ma_dm";
    }
    $sql .= " ORDER BY ma_sach DESC";
    return  pdo_query($sql);
}
function load_ten_dm($ma_dm)
{
    if ($ma_dm > 0) {
        $sql = "SELECT * FROM danh_muc where ma_dm = $ma_dm";
        $dm = pdo_query_one($sql);
        extract($dm);
        return $ten_dm;
    } else {
        return  "";
    }
}
// 

//spcl
function sp_cungloai($ma_dm, $ma_sach)
{
    $sql = "SELECT * FROM sach WHERE ma_dm = $ma_dm AND ma_sach <> $ma_sach";
    // echo $sql; die;
    return  pdo_query($sql);
}

function sach($ten_sach, $hinh_sach, $so_luong, $gia_sach, $mo_ta, $nha_xb, $ma_dm)
{
    $sql = "INSERT INTO sach(ten_sach, hinh_sach, so_luong, gia_sach, mo_ta, nha_xb, ma_dm) VALUES('$ten_sach','$hinh_sach','$so_luong','$gia_sach','$mo_ta', '$nha_xb', '$ma_dm')";
    // echo $sql; die;
    pdo_execute($sql);
}

function delete_sach($ma_sach)
{
    $sql = "DELETE FROM sach WHERE ma_sach = $ma_sach";
    pdo_execute($sql);
}
function delete_sach_item($ma_sach)
{
    $msp = "";
    foreach ($ma_sach as $item) {
        $msp .= $item . ", ";
        $msp = rtrim($msp, ",");
        $sql = "DELETE FROM sach WHERE ma_sach IN ($msp)";
        pdo_execute($sql);
    }
}

function list_one_sach($ma_sach)
{
    $sql = "SELECT * from sach WHERE ma_sach = $ma_sach";
    return pdo_query_one($sql);
}

function update_sp($ma_sach, $ten_sach, $hinh_sach, $so_luong, $gia_sach, $mo_ta, $nha_xb, $ma_dm)
{
    $sql = "UPDATE sach SET ten_sach = '$ten_sach',  hinh_sach = '$hinh_sach',  so_luong = '$so_luong',  gia_sach = '$gia_sach',  mo_ta = '$mo_ta', nha_xb = '$nha_xb', ma_dm = '$ma_dm' WHERE ma_sach = $ma_sach";
    pdo_execute($sql);
}
