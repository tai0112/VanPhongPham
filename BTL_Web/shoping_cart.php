<?php
include "./header.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIỎ HÀNG</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="./shoping_cart.css">
    <link rel="stylesheet" href="./lib.css">
    <script src="./vendor/bootstrap.js" defer></script>
    <script src="./vendor/jquery-3.6.0.min.js" defer></script>
    <script src="./js/main.js" defer></script>
    <script src="./js/shopping_cart/shopping.js" defer></script>
</head>

<body>
    <style>
        .table_payment .p {
            color: #000;
        }

        .nav__pc {
            text-align: center;
        }

        .type-id {
            background-color: transparent;
        }

        .quantity {
            width: 20%;
        }

        .dn {
            display: none;
        }

        .update_quantity {
            border-radius: 5px;
            padding: 10px;
            color: #000;
        }
    </style>
    <?php
    include "./connection/connection.php";
    ?>
    <h1 class="text-center text-uppercase payment__title">Giỏ hàng</h1>
    <!-- <div class="container">
        <div class="row text-center">
            <div class="checkout col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="checkout__item">
                    <b class="checkout__item--title">Giỏ hàng</b>
                    <div class="checkout__item--step
                            checkout__item--step_active">1</div>
                    <span class="checkout__item--process
                            checkout__item--process--right"></span>
                </div>
            </div>
            <div class="checkout col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="checkout__item">
                    <b class="checkout__item--title title_opacity">Chi tiết
                        thanh toán</b>
                    <div class="checkout__item--step">2</div>
                    <span class="checkout__item--process
                            checkout__item--process--left"></span>
                    <span class="checkout__item--process
                            checkout__item--process--right" style="background-color: gainsboro;"></span>
                </div>
            </div>
            <div class="checkout col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="checkout__item">
                    <b class="checkout__item--title title_opacity">Thông tin
                        đơn hàng</b>
                    <div class="checkout__item--step">3</div>
                    <span class="checkout__item--process
                            checkout__item--process--left"></span>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Phần giỏ hàng của khách -->
    <div class="mt-2 container-fluid">
        <div class="row justify-content-between">
            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                <table class="table table-hover table-light payment__table">
                    <thead>
                        <th colspan="3">Sản phẩm</th>
                        <th class="nav__pc">Giá tiền</th>
                        <th class="nav__pc">Số lượng</th>
                        <th colspan="2">Tạm tính</th>
                    </thead>
                    <?php
                    if (isset($_SESSION['login']['idAccount'])) {
                    }
                    $idAccount = $_SESSION['login']['idAccount'];

                    $queryTimKiemGH = "SELECT maGH FROM giohang WHERE maTK = '$idAccount'";

                    $resultTimKiemGH = mysqli_query($conn, $queryTimKiemGH);

                    $idCart = 0;
                    while ($row = mysqli_fetch_array($resultTimKiemGH)) {
                        $idCart = $row['maGH'];
                    }
                    if (isset($_POST["productID"]) && isset($_POST["quantity"])) {
                        $idProduct = $_POST["productID"];
                        $quantity = $_POST["quantity"];
                    }

                    $queryThanhTien = "select sum(thanhTien) as tongTien from chitietgiohang where maGH = '$idCart'";
                    $resultThanhTien = mysqli_query($conn, $queryThanhTien);

                    $total;
                    while ($row = mysqli_fetch_assoc($resultThanhTien)) {
                        $total = $row["tongTien"];
                    }

                    if (isset($_POST['update'])) {

                        $queryGetTien = "SELECT giaSP FROM sanpham WHERE maSP = $idProduct";
                        $resultGetTien = mysqli_query($conn, $queryGetTien);

                        while ($row = mysqli_fetch_row($resultGetTien)) {
                            $tien = $row[0];
                        }

                        $thanhTien = $tien * $quantity;
                        $queryUpdateCart = "UPDATE chitietgiohang SET soLuong = $quantity, thanhTien = $thanhTien WHERE maSP = $idProduct";
                        $result = mysqli_query($conn, $queryUpdateCart);

                        $queryThanhTien = "select sum(thanhTien) as tongTien from chitietgiohang where maGH = '$idCart'";
                        $resultThanhTien = mysqli_query($conn, $queryThanhTien);


                        while ($row = mysqli_fetch_assoc($resultThanhTien)) {
                            $total = $row["tongTien"];
                        }

                        $queryTimKiemGH = "SELECT maGH FROM giohang WHERE maTK = '$idAccount'";

                        $resultTimKiemGH = mysqli_query($conn, $queryTimKiemGH);

                        $idCart = 0;
                        while ($row = mysqli_fetch_array($resultTimKiemGH)) {
                            $idCart = $row['maGH'];
                        }

                        $queryThanhTien = "select sum(thanhTien) as tongTien from chitietgiohang where maGH = '$idCart'";
                        $resultThanhTien = mysqli_query($conn, $queryThanhTien);
                        while ($row = mysqli_fetch_assoc($resultThanhTien)) {
                            $total = $row["tongTien"];
                        }



                        $queryUpdateCart = "UPDATE giohang set thanhTien = $total WHERE maTK = '$idCart'";
                        $resultUpdateCart = mysqli_query($conn, $queryUpdateCart);
                    }
                    ?>
                    <?php
                    $idAccount = $_SESSION['login']['idAccount'];
                    $queryTimKiemGH = "SELECT maGH FROM giohang WHERE maTK = '$idAccount'";

                    $resultTimKiemGH = mysqli_query($conn, $queryTimKiemGH);

                    $idCart = 0;
                    while ($row = mysqli_fetch_array($resultTimKiemGH)) {
                        $idCart = $row['maGH'];
                    }
                    $queryCart = "SELECT * FROM chitietgiohang WHERE maGH=$idCart";
                    $result = mysqli_query($conn, $queryCart);
                    $cost = 0;
                    back:
                    while ($row = mysqli_fetch_row($result)) {
                        if ($row[4] <= 0) {
                            $queryDeleteProduct = "DELETE FROM chitietgiohang where maGH=$row[0] AND maSP=$row[1]";
                            $resultDelete = mysqli_query($conn, $queryDeleteProduct);
                            goto back;
                        } else {
                            $cost = $row[5] / $row[4];
                        }
                        echo '<tbody class="payment__tableBody">
                            <tr>
                                <td><a href="./deleteProductCart.php?id=' . $row[1] . '"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                                <td><img height="100" width="100" src="' . $row[3] . '" alt="">
                                </td>
                                <td>
                                    <h4>' . $row[2] . '</h4>
                                    <p>
                                    <form action="" method="POST">
                                            <label>Mã sản phẩm:</label>
                                            <input name="maSP" class="type-id" value="' . $row[1] . '" >
                                    </form>
                                    </p>
                                </td>
                                <td class="nav__pc">
                                    <h5 class="price">' . $cost . '</h5>
                                </td>
                                <td class="nav__pc">
                                    <div class="payment__tableBody--count">
                                        <form action="" method="POST">
                                            <input class="quantity" name="quantity" type="number" value="' . $row[4] . '">
                                            <input class="dn" name="productID" type="number" value="' . $row[1] . '">
                                            <input type="submit" value="Cập nhật" name="update" class="update_quantity">
                                        </form>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="price">' . $row[5] . '</h5>
                                </td>
                            </tr>
                        </tbody>';
                    }
                    ?>

                </table>
            </div>
            <div class="sum_payment col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1">
                <h3 class="sum_payment--title">Tổng giỏ hàng</h3>
                <div class="sum__payment--detail">
                    <h3 class="price"><?php echo $total; ?></h3>
                </div>
                <a class="btn btn-danger" href="<?php echo ($total == 0) ? '#' : './thanhToan.php?id=' .$idAccount?>">Thanh toán ngay</a>
                <!-- <a href="./thanhToan.php?id=<?php echo $idAccount; ?>" class="btn btn-danger">Thanh toán ngay</a> -->
            </div>
        </div>
    </div>
    <script>
        document.querySelectorAll('.price').forEach(e => {
            var formated;
            formated = Intl.NumberFormat('vi-VN', {
                style: 'currency',
                currency: 'VND'
            }).format(e.innerHTML);
            e.innerText = formated;
        });
    </script>
</body>

</html>