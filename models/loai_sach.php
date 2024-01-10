<?php

require_once "pdo.php";
function all_list_dm()
{
    $sql = "SELECT * FROM danh_muc ORDER BY ma_dm DESC";
    return pdo_query($sql);
}

function six_list_dm(){
    $sql = "SELECT * FROM danh_muc ORDER BY ma_dm DESC limit 0,6";
    return pdo_query($sql);
}


function add_dm($ten_dm,$trang_thai)
{
    $sql = "INSERT INTO danh_muc(ten_dm, trang_thai) VALUES('$ten_dm','$trang_thai')";
    pdo_execute($sql);
}

function delete_dm($ma_dm)
{
    $sql = "DELETE FROM danh_muc WHERE ma_dm = $ma_dm";
    // echo $sql; die;
    pdo_execute($sql);
}
function delete_dm_item($ma_dm)
{
    $ml = "";
    foreach ($ma_dm as $item) {
        $ml .= $item . ", ";
        $ml = rtrim($ml, ",");
        $sql = "DELETE FROM danh_muc WHERE ma_dm IN ($ml)";
        pdo_execute($sql);
    }
}

function list_one_dm($ma_dm)
{
    $sql = "SELECT * from danh_muc WHERE ma_dm = $ma_dm";
    return pdo_query_one($sql);
}

function update_dm($ma_dm, $ten_dm, $trang_thai)
{
    $sql = "UPDATE danh_muc SET ten_dm = '$ten_dm',  trang_thai = '$trang_thai' WHERE ma_dm = $ma_dm";
    // echo $sql; die;
    pdo_execute($sql);
}
