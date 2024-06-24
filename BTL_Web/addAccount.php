<?php
include "./connection/connection.php";
$id = $_POST["inputID"];
$maLoai = $_POST['inputMaLoai'];
$tenSP = $_POST['inputEmail'];
$gia = $_POST['inputGia'];
$moTa = $_POST['inputMoTa'];

if (!($id == "" || $maLoai == "" || $tenSP == "" || $gia == "" || $moTa == "")) {
    if (isset($_POST['add'])) {
        $queryAddProduct = "INSERT INTO `taikhoan` (`maTK`, `loaiTK`, `username`, `password`, `name`) VALUES (NULL, '$maLoai', '$tenSP', '$gia', '$moTa')";
        $result = mysqli_query($conn, $queryAddProduct);
    }
    if (isset($_POST['update'])) {
        $queryUpdateProduct = "UPDATE taikhoan
            SET loaiTK = '$maLoai', username = '$tenSP', password = '$gia', name = '$moTa'
            WHERE maTK = $id";

        $result = mysqli_query($conn, $queryUpdateProduct);
    }
} else {
    echo "<script>
            alert('Bạn chưa nhập đầy đủ thông tin');
            </script>
            ";
}



header( "refresh:0; ./accountManagement.php" ); 

