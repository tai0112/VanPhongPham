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

    <?php include "./header.php" ?>
    
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

    <section id="page-header" class="blog-header">
       
        <h2>#readmore</h2>
        
        <p>The right pen can make all the difference in your writing !</p>
         
    </section>

    <section id="blog">

        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/b6 (1).jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>Cà phê: Hơn cả một thức uống</h4>
                <p>Cà phê không chỉ đơn thuần là một thức uống, nó còn là một phần văn hóa của nhiều quốc gia trên thế giới. 
                Cà phê có thể mang đến cho bạn nhiều lợi ích, từ việc giúp bạn tỉnh táo và tập trung đến việc cải thiện sức khỏe và tâm trạng ... </p>
                <a href="#">COTINUE READING</a>
            </div>
            <h1>31/04</h1>
        </div>

        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/b3.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>THÁNG 5. ĐỌC GÌ? XEM GÌ? NGHE GÌ?</h4>
                <p>Xin chào tháng 5! Hôm nay là một ngày “số đẹp”. Thứ 5 ngày mùng 5 tháng 5. Dưới đây là danh sách những cuốn sách bạn có thể tìm đọc, bộ phim bạn có thể xem và list nhạc bạn có thể nghe trong tháng 5 này. ĐỌC GÌ? 1. Gieo thói quen nhỏ, […] </p>
                <a href="#">COTINUE READING</a>
            </div>
            <h1>01/05</h1>
        </div>

        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/p1.png" alt="">
            </div>
            <div class="blog-details">
                <h4>Sinh nhật Văn phòng phẩm tròn 2 tuổi</h4>
                <p>Nhân dịp đặc biệt này, Moi Stationery xin gửi lời tri ân sâu sắc nhất đến tất cả quý khách hàng, 
                đối tác và các bạn nhân viên đã luôn đồng hành, tin tưởng và ủng hộ chúng tôi trong suốt thời 
                gian qua.Chính sự yêu mến và tin tưởng của quý khách là động lực to lớn để Moi Stationery không ngừng  
                hoàn thiện và phát triển ... </p>
                <a href="#">COTINUE READING</a>
            </div>
            <h1>10/05</h1>
        </div>

        

        

        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/b4.webp" alt="">
            </div>
            <div class="blog-details">
                <h4>Những điều thú vị về bút bi và cách bảo quản bút bi không bị khô mực</h4>
                <p>Chiếc bút bi là dụng cụ văn phòng không thể thiếu trong cuộc sống cũng như công việc hàng ngày của mỗi chúng ta. 
                Đâu ai biết được, đằng sau chiếc bút với giá rẻ có vài ngàn lẻ là những câu chuyện có từ thủa xa xưa đầy thú vị... </p>
                <a href="#">COTINUE READING</a>
            </div>
            <h1>29/05</h1>
        </div>

    </section>

    <section id="pagination" class="section-p1">
        <a href="./blog.php">1</a>
        <a href="./blog2.php">2</a>
        <a href=""><i class="fal fa-long-arrow-alt-right"></i></a>
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