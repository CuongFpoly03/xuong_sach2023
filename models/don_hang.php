<?php
function load_all_dh()
{
    $sql = "SELECT * FROM don_hang ORDER BY ma_dh desc";
    return pdo_query($sql);
}
function load_all_dhadnct()
{
    $sql = "SELECT don_hang.*, ma_ct FROM don_hang JOIN chitiet_donhang ON don_hang.ma_dh = chitiet_donhang.ma_dh ORDER BY ma_dh desc";
    return pdo_query($sql);
}

// userr
function updateDonHangStatuss($trang_thai, $ma_dh) {
    $sql = "UPDATE don_hang SET trang_thai = '$trang_thai' WHERE ma_dh = $ma_dh";
    pdo_execute($sql);
}

function load_all_dh_home()
{
    $sql = "SELECT * FROM don_hang ORDER BY ma_dh desc limit 0,5";
    return pdo_query($sql);
}

function list_dh_ctdh($ma_ct){
    $sql = "SELECT chitiet_donhang.*, ten_kh, ten_dh, ten_sach FROM chitiet_donhang JOIN don_hang ON chitiet_donhang.ma_dh = don_hang.ma_dh
                                                                  JOIN khach_hang ON chitiet_donhang.ma_kh = khach_hang.ma_kh 
                                                                  JOIN sach ON chitiet_donhang.ma_sach = sach.ma_sach WHERE ma_ct = $ma_ct";
                                                                //   echo $sql; die;
    return pdo_query_one($sql);
}
// function updateDonHangStatus($trang_thai, $ma_dh) {
//     $sql = "UPDATE don_hang SET trang_thai = '$trang_thai' WHERE ma_dh = $ma_dh";
//         pdo_execute($sql);
// }
// function getCurrentOrderStatus($ma_dh) {
//     // Thực hiện truy vấn để lấy trạng thái của đơn hàng từ cơ sở dữ liệu
//     // Giả sử bạn có một bảng 'orders' trong cơ sở dữ liệu có trường 'status'
//     // và sử dụng PDO để thao tác với cơ sở dữ liệu
//     $pdo = new PDO('mysql:host=localhost;dbname=duans', 'username', 'password');
//     $stmt = $pdo->prepare('SELECT trang_thai FROM don_hang WHERE ma_dh = :ma_dh');
//     $stmt->bindParam(':ma_dh', $ma_dh);
//     $stmt->execute();
//     $result = $stmt->fetch(PDO::FETCH_ASSOC);

//     if ($result) {
//         return $result['trang_thai'];
//     } else {
//         return false; // Trả về false nếu không tìm thấy đơn hàng
//     }
// }

function getCurrentOrderTrangthai($ma_dh) {
    $sql = "SELECT trang_thai FROM don_hang WHERE ma_dh = ?";
    $row = pdo_query_one($sql, $ma_dh);

    if ($row) {
        return $row['trang_thai'];
    } else {
        return false; // Trả về false nếu không tìm thấy đơn hàng
    }
}

// Hàm để cập nhật trạng thái đơn hàng trong cơ sở dữ liệu
function updateDonHangTrangthai($trang_thai, $ma_dh) {
    $sql = "UPDATE don_hang SET trang_thai = ? WHERE ma_dh = ?";
    pdo_execute($sql, $trang_thai, $ma_dh);
}




// function delete_dh_item($ma_dh)
// {
//     $mdh = "";
//     foreach ($ma_dh as $item) {
//         $mdh .= $item . ", ";
//         $mdh = rtrim($mdh, ",");
//         $sql = "DELETE FROM don_hang WHERE ma_dh IN ($mdh)";
//         pdo_execute($sql);
//     }
// }
// function delete_dh($ma_dh)
// {
//     $sql = "DELETE FROM don_hang WHERE ma_dh = $ma_dh";
//     pdo_execute($sql);
// }