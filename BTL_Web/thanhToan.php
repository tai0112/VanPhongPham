<?php
include "./connection/connection.php";
date_default_timezone_set('Asia/Ho_Chi_Minh');
$date = date('Y-m-d h:i:s');
$id = $_GET['id'];

$queryTimKiemGH = "SELECT maGH FROM giohang WHERE maTK = '$id'";

$resultTimKiemGH = mysqli_query($conn, $queryTimKiemGH);

$idCart = 0;
while ($row = mysqli_fetch_array($resultTimKiemGH)) {
    $idCart = $row['maGH'];
}

session_start();
$queryHoaDon = "SELECT * FROM CHITIETGIOHANG WHERE maGH=$idCart";
$queryThanhTien = "SELECT sum(thanhTien) as total FROM GIOHANG WHERE maGH=$idCart";
echo $queryThanhTien;
$resultThanhTien = mysqli_query($conn, $queryThanhTien);
$thanhTien = 0;
while ($row = mysqli_fetch_array($resultThanhTien)) {
    $thanhTien = $row['total'];
}

echo $thanhTien;


$result = mysqli_query($conn, $queryHoaDon);
$queryTaoHD = "INSERT INTO HOADON(maHD, maTaiKhoan, ngayMua, thanhTien) values(null, '$id', '$date', '$thanhTien')";
$resultTaoHD = mysqli_query($conn, $queryTaoHD);
$queryMaHD = "SELECT * FROM hoadon WHERE ngayMua = '$date' AND maTaiKhoan = '$id'";
$resultTimKiemHD = mysqli_query($conn, $queryMaHD);
$maHD = 0;

while ($row = mysqli_fetch_row($resultTimKiemHD)) {
    $maHD = $row[0];
    $maTaiKhoan = $row[1];
}

$queryDeleteGioHang = "DELETE FROM chitietgiohang WHERE maGH = $idCart";
$resultDeleteGioHang = mysqli_query($conn, $queryDeleteGioHang);

$queryUpdateGioHang = "UPDATE giohang set thanhTien = 0 WHERE maTK = '$id'";
$resultUpdateGioHang = mysqli_query($conn, $queryUpdateGioHang);

while ($row = mysqli_fetch_array($result)) {
    $queryChiTietHD = "INSERT INTO chitiethd(maHD, maSP, tenSP, hinhAnh, soLuong, thanhTien) VALUES('$maHD', '$row[1]', '$row[2]', '$row[3]', '$row[4]', '$row[5]')";
    $resultChiTietHD = mysqli_query($conn, $queryChiTietHD);
}

header('Location: ./sendEmail.php');
