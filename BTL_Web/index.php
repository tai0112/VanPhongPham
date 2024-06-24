<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>VĂN PHÒNG PHẨM</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
</head>

<body>


    <?php include './header.php' ?>


    <section id="hero">
        <h2>Super value deals</h2>
        <h1>On all products</h1>
        <p>Save more with coupons & up to 70% off! </p>
        <button>Show Now</button>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="img/features/f1.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f3.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f4.png" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f5.png" alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f6.png" alt="">
            <h6>24/7 Support</h6>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Morden Design</p>
        <div class="pro-container">
            <?php
            include "./connection/connection.php";
            $querySanPham = "select * from sanpham limit 8 offset 3";
            $result = mysqli_query($conn, $querySanPham);
            while ($row = mysqli_fetch_array($result)) {
                echo '
                                <a style="text-decoration:none" href="./detailProduct.php?id=' . $row['maSP'] . '">
                                <div class="pro">
                                <img src="' . $row['hinhAnh'] . '" alt="">
                                <div class="des">
                                    <span>gel pens</span>
                                    <h5>' . $row['tenSP'] . '</h5>
                                    <div class="star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4 class="price">' . $row['giaSP'] . '</h4>
                                </div>
                                <a href="./cart.php?id=' . $row['maSP'] . '"><i class="fal fa-shopping-cart cart"></i></a></div>
                                </a>';
            }
            ?>
        </div>
    </section>


    <?php include "./footer.php"; ?>
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