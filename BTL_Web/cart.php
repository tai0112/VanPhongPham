
<?php
    include "./connection/connection.php";
    session_start();
    if(isset($_SESSION['login']['idAccount'])) {

        $idAccount = $_SESSION['login']['idAccount'];
        $idProduct = $_GET['id'];
    
        echo $idAccount;
    
        $tenSP;
        $hinhAnh;
        $giaSP;
    
        $queryProduct = "select * from sanpham where maSP = $idProduct";
        $result = mysqli_query($conn, $queryProduct);
    
        
        while($row = mysqli_fetch_row($result)) {
            $tenSP = $row[2];
            $giaSP = $row[3];
            $hinhAnh = $row[5];
        }
    
        $queryTimKiemGH = "SELECT maGH FROM giohang WHERE maTK = '$idAccount'";
    
        $resultTimKiemGH = mysqli_query($conn, $queryTimKiemGH);
    
        $idCart = 0;
        while($row = mysqli_fetch_array($resultTimKiemGH)) {
            $idCart = $row['maGH'];
        }
    
        echo $idCart;
        
    
        $queryAddDetailCart = "INSERT INTO chitietgiohang (maGH, maSP, tenSP, hinhAnh,thanhTien) VALUES ('$idCart', '$idProduct', '$tenSP', '$hinhAnh', '$giaSP')";
        $resultAddCartDetail = mysqli_query($conn, $queryAddDetailCart);
    
        $queryThanhTien = "select sum(thanhTien) as tongTien from chitietgiohang where maGH = $idCart";
        $resultThanhTien = mysqli_query($conn, $queryThanhTien);
    
        $total;
        while($row = mysqli_fetch_assoc($resultThanhTien)) {
            $total = $row["tongTien"];
        }
    
        $queryAddCart = "INSERT INTO giohang(maGH, maTK, thanhTien) VALUES ('$idCart', '$idAccount', $total)";
        $queryUpdateCart = "UPDATE giohang set thanhTien = $total WHERE maTK = $idAccount";
    
        $resultAddCart = mysqli_query($conn, $queryAddCart);
        $resultUpdateCart = mysqli_query($conn, $queryUpdateCart);
        
        header('Location: ./shoping_cart.php');
    } else {
        header('Location: ./thongBao.php');
    }

?>
