<?php
include "./connection/connection.php";
$id = $_GET['id'];
$queryChiTiet = "SELECT * FROM sanpham WHERE maSP = $id";
$result = mysqli_query($conn, $queryChiTiet);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/grid.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./shop/shop1.css">
    <title>Chi tiết sản phẩm</title>
</head>

<body>
    <?php include './header.php' ?>

    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo '<section id="prodetails" class="section-p1">
            <div class="single-pro-image">
                <img src="'. $row['hinhAnh'] .'" width="100%" style="border-radius: 8px;" id="MainImg" alt="" />
            </div>
    
            <div class="single-pro-details">
                <h4>'. $row['tenSP'] .'</h4>
                <h2 class="price">'. $row['giaSP'] .'</h2>
                <a href="./cart.php?id='. $row['maSP'] .'"><button class="normal">Add To Cart</button></a>
                <h4>Product Details</h4>
                <span>'. $row['moTa'] .'</span>
            </div>
        </section>';
    }

    ?>


    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>
                Get E-mail updates about our latest shop and
                <span>special offers.</span>
            </p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address" />
            <button class="normal">Sign Up</button>
        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/logo.png" alt="" />
            <h4>Contact</h4>
            <p>
                <strong>Address:</strong> 218 Đường Lĩnh Nam, Q. Hoàng Mike, TP. Hà
                Nội
            </p>
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
                <img src="img/pay/app.jpg" alt="" />
                <img src="img/pay/play.jpg" alt="" />
            </div>
            <p>Secured Payment Gateways</p>
            <img src="img/pay/pay.png" alt="" />
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