<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/grid.css">
    <link rel="stylesheet" href="./css/footer.css">
    <style>

    </style>
    <title>Document</title>
</head>

<body>
    <style>
        body {
            font-family: 'lato', sans-serif;
        }

        .container {
            max-width: 1000px;
            margin-left: auto;
            margin-right: auto;
            padding-left: 10px;
            padding-right: 10px;
        }

        h2 {
            font-size: 26px;
            margin: 20px 0;
            text-align: center;

            small {
                font-size: 0.5em;
            }
        }

        .responsive-table {
            li {
                border-radius: 3px;
                padding: 25px 30px;
                display: flex;
                justify-content: space-between;
                margin-bottom: 25px;
            }

            .table-header {
                background-color: #95A5A6;
                font-size: 14px;
                text-transform: uppercase;
                letter-spacing: 0.03em;
            }

            .table-row {
                background-color: #ffffff;
                box-shadow: 0px 0px 9px 0px rgba(0, 0, 0, 0.1);
            }

            .col-1 {
                flex-basis: 10%;
            }

            .col-2 {
                flex-basis: 40%;
            }

            .col-3 {
                flex-basis: 25%;
            }

            .col-4 {
                flex-basis: 25%;
            }

            @media all and (max-width: 767px) {
                .table-header {
                    display: none;
                }


                li {
                    display: block;
                }

                .col {

                    flex-basis: 100%;

                }

                .col {
                    display: flex;
                    padding: 10px 0;

                    &:before {
                        color: #6C7A89;
                        padding-right: 10px;
                        content: attr(data-label);
                        flex-basis: 50%;
                        text-align: right;
                    }
                }
            }
        }
    </style>
    <?php
    include "./header.php";
    include "./connection/connection.php";
    $maHD;
    if (isset($_GET["idBill"])) {
        $maHD = $_GET["idBill"];
    }
    ?>
    <?php
    $idAccount = $_SESSION['login']['idAccount'];
    if(isset($_POST['search'])) {
        $data = $_POST['data'];
        $queryBill = "SELECT * FROM hoadon WHERE mahd = '" .$data. "' AND maTaiKhoan = $idAccount";
    }
    if(!isset($queryBill)) {
        $queryBill = "SELECT * FROM `hoadon` WHERE `maTaiKhoan` = $idAccount";
        $resultBill = mysqli_query($conn, $queryBill);
        $item_per_page = !empty($_GET["per_page"]) ? $_GET["per_page"] : 4;
        $current_page = !empty($_GET["page"]) ? $_GET["page"] : 1;
        $offset = ($current_page - 1) * $item_per_page;
        $queryBill = "SELECT * FROM hoadon WHERE maTaiKhoan = '$idAccount' ORDER BY maHD asc LIMIT " . $item_per_page . " OFFSET " . $offset . "";
        $totalRecord = mysqli_query($conn, "SELECT * FROM `hoadon` WHERE `maTaiKhoan` = $idAccount");
        $totalRecord = $totalRecord->num_rows;
        $totalPages = ceil($totalRecord / $item_per_page);
    }
    $resultBill = mysqli_query($conn, $queryBill);

    if (!empty($maHD)) {
        $queryDetailBill = "SELECT * FROM chitiethd WHERE maHD = $maHD";
        $resultDetailBill = mysqli_query($conn, $queryDetailBill);
    }
    ?>
    <section id="page-header">

        <h2>#stayhome</h2>

        <p>Save more with coupons & up to 70% off! </p>

    </section>
    <div class="grid wide">
        <form class="mb-3 mt-5" method="POST" action="">
            <label for="exampleFormControlInput1" class="form-label">Tìm kiếm hoá đơn:</label>
            <input type="text" name="data" class="form-control" id="exampleFormControlInput1" placeholder="">
            <input type="submit" name="search" value="Tìm kiếm" class="btn">
        </form>
        <?php if (empty($maHD)) { ?>
            <table class="table table-bordered table-hover mt-5">
                <thead>
                    <tr>
                        <th scope="col">Mã Hoá Đơn</th>
                        <th scope="col">Thời gian mua</th>
                        <th scope="col">Thành Tiền</th>
                        <th scope="col">Chi Tiết Hoá Đơn</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">

                    <?php while ($row = mysqli_fetch_array($resultBill)) { ?>
                        <tr>
                            <th scope="row"><?php echo $row["maHD"] ?></th>
                            <td><?php echo $row["ngayMua"] ?></td>
                            <td class="price"><?php echo $row["thanhTien"] ?></td>
                            <th scope="row"><a class="link-item" href="?idBill=<?php echo $row["maHD"]; ?>">Chi tiết</a></th>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } else { ?>

            <table class="table table-bordered table-hover mt-5">
                <thead>
                    <tr>
                        <th scope="col">Mã Hoá Đơn</th>
                        <th scope="col">Tên Sản Phẩm</th>
                        <th scope="col">Số Lượng</th>
                        <th scope="col">Thành Tiền</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php while ($row = mysqli_fetch_array($resultDetailBill)) { ?>
                        <tr>
                            <th scope="row"><?php echo $row["maHD"] ?></th>
                            <td><?php echo $row["tenSP"] ?></td>
                            <td><?php echo $row["soLuong"] ?></td>
                            <td class="price"><?php echo $row["thanhTien"] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        <?php } ?>
        <?php include "./pagnination.php" ?>
    </div>
    <!-- footer -->
    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign Up</button>
        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/logo.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address:</strong> 218 Đường Lĩnh Nam, Q. Hoàng Mike, TP. Hà Nội</p>
            <p><strong>Phone:</strong> 024.36331854 / Fax: 0243.8623938</p>
            <p><strong>Hours:</strong> 10:00 - 18:00, Mon - Sat</p>

            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-tiktok"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>About</h4>
            <a href="#">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlish</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>

        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img class="col l-6" src="img/pay/app.jpg" alt="">
                <img class="col l-6 ms-2" src="img/pay/play.jpg" alt="">
            </div>
            <p>Secured Payment Gateways</p>
            <img src="img/pay/pay.png" alt="">
        </div>

        <div class="copyright">
            <p>© 2024, Moi Team - Teamwork Makes the Dream Work.</p>
        </div>
    </footer>

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