<?php
error_reporting(0);
include "./connection/connection.php";
$id = $_POST["inputID"];
$maLoai = $_POST['inputMaLoai'];
$tenSP = $_POST['inputName'];
$gia = $_POST['inputGia'];
$moTa = $_POST['inputMoTa'];
$hinhAnh = $_POST['inputHinhAnh'];
if (isset($_POST['add'])) {
    if ($id != "" || $maLoai != "" || $tenSP != "" || $gia != "" || $mota != "" || $hinhAnh != "") {
        $queryAddProduct = "INSERT INTO `sanpham` (`maSP`, `maLoaiSP`, `tenSP`, `giaSP`, `moTa`, `hinhAnh`) VALUES (NULL, '$maLoai', '$tenSP', '$gia', '$moTa', '$hinhAnh')";
        $result = mysqli_query($conn, $queryAddProduct);
    } else {
        echo "<script>
            alert('Bạn chưa nhập đầy đủ thông tin');
            </script>
            ";
    }
}
if (isset($_POST['update'])) {
    if ($id != "" || $maLoai != "" || $tenSP != "" || $gia != "" || $mota != "" || $hinhAnh != "") {
        $queryUpdateProduct = "UPDATE sanpham
        SET maLoaiSP = '$maLoai', tenSP = '$tenSP', giaSP = '$gia', moTa = '$moTa', hinhAnh = '$hinhAnh'
        WHERE maSP = $id";
        $result = mysqli_query($conn, $queryUpdateProduct);
    } else {
        echo "<script>
        alert('Bạn chưa nhập đầy đủ thông tin');
        </script>
        ";
    }
}

header("Refresh:0; ./productManagement.php");
// header('location: ./productManagement.php');
