<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylePage.css">
    <title>Van Phong Pham</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
</head>
<body>

    <?php include "./header.php"; ?>
    
     <!-- login form -->
     <div class="login-form-container">

        <div id="close-login-btn" class="fas fa-times"></div>

        <form action="">
            <h3>ĐĂNG NHẬP</h3>
            <span>Email</span>
            <input type="email" name="" class="box" placeholder="Nhập email hợp lệ" id="">
            <span>Mật Khẩu</span>
            <input type="password" name="" class="box" placeholder="Nhập mật khẩu" id="">
            <div class="checkbox">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me"> Ghi nhớ </label>
            </div>
            <input type="submit" value="ĐĂNG NHẬP" class="btn">
            <p>Quên mật khẩu ? <a href="#">Click here</a></p>
            <p>Chưa có tài khoản ? <a href="#">Tạo tài khoản</a></p>
        </form>
    </div>

    <section id="page-header" class="about-header">
       
        <h2>#KnowUs</h2>
        
        <p>Lorem ipsum dolor sit amet, consectetur</p>
         
    </section>

    <section id="about-head" class="section-p1">
        <img src="img/about/a5.jpg" alt="">
        <div>
            <h2>Giới thiệu</h2>
            <p><b style="color: rgb(41,128,185);">Moi Stationery</b> là website thương mại điện tử thuộc Công ty Cổ phần <b style="color: rgb(41,128,185);">Moi Team</b>. 
            Chúng tôi có kinh nghiệm hơn 10 năm trong ngành nghiên cứu, sản xuất và phân phối bút viết, 
            văn phòng phẩm, học cụ và dụng cụ mỹ thuật.  <b style="color: rgb(41,128,185);">Moi Stationery</b> cung cấp các mặt hàng cho nhiều
            đối tượng khách hàng khác nhau, từ học sinh, sinh viên, giới văn phòng, từ sản phẩm cao cấp cho 
            đến các loại bút viết phổ thông. Tất cả đều được tập đoàn <b style="color: rgb(41,128,185);">Moi Team</b> nghiên cứu, sản xuất và phân phối.</p>

            <abbr title="" style="font-weight: bold;">"Bút viết nên lời, thước kẻ đường đi - Văn phòng phẩm giúp bạn chinh phục mọi mục tiêu !"</abbr>

            <br><br><br><br>

            <marquee bgcolor ="whitesmoke" loop="-1" scrollamount="5" width="100%" >© 2024, Moi Team - Teamwork Makes the Dream Work.
            </marquee>
        </div>
    </section>

    <section id="about-app" class="section-p1">
        <h1>Download Our <a href="#">App</a></h1>
        <div class="video">
            <video autoplay muted loop src="https://cdn.dribbble.com/users/12748/screenshots/12209633/media/2053fabc5420744156b68686142e3c8a.mp4"></video>
        </div>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="img/features/f1.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="https://static.vecteezy.com/system/resources/previews/017/786/408/large_2x/3d-rendering-cartoon-male-online-shopping-image-png.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="https://static.vecteezy.com/system/resources/previews/020/717/027/non_2x/3d-money-saving-concept-piggy-bank-with-a-coin-money-management-3d-rendering-png.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f4.png" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="https://static.vecteezy.com/system/resources/previews/028/335/691/large_2x/high-five-3d-hand-gesture-icon-png.png" alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f6-1.png" alt="">
            <h6>24/7 Support</h6>
        </div>
    </section>

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
                <img src="img/pay/app.jpg" alt="">
                <img src="img/pay/play.jpg" alt="">
            </div>
            <p>Secured Payment Gateways</p>
            <img src="img/pay/pay.png" alt="">
        </div>

        <div class="copyright">
            <p>© 2024, Moi Team - Teamwork Makes the Dream Work.</p>
        </div>
    </footer>



    <script src="script.js"></script>
</body>
</html>