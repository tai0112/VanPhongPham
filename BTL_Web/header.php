<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <style>
        .tooltip-login {
            width: 100%;
            border-radius: 10px;
            background-color: #d5c1c1;
            margin-top: 10px;
            color: #000;
            padding: 10px 0px;
            top: 84%;
            display: none;
            position: absolute;
            list-style: none;
            flex-direction: column;
            transition: all linear 3s;
        }

        .tooltip-login::after {
            content: "";
            width: 100%;
            position: absolute;
            background-color: transparent;
            height: 17px;
            top: -10px;
        }

        .tooltip-login__item {
            padding: 5px !important;
        }

        .tooltip-login__item:hover {
            background-color: #fff;
            color: #242526;
        }

        .container-username:hover .tooltip-login {
            display: block;
        }

        .route {
            cursor: pointer;
        }

        .container-username {
            top: -1px;
        }

        .dropdown-item {
            padding: 0;
        }
    </style>
    <section id="header">
        <a href="./"><img src="img/logo.png" class="logo" alt=""></a>
        <form action="./shop.php" class="search-form" method="GET">
            <input type="search" name="product" placeholder="Search..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>
        <div>
            <ul id="navbar">
                <li><a class="route" href="./">Home</a></li>
                <li><a class="route" href="shop.php">Shop</a></li>
                <li><a class="route" href="./blog.php">Blog</a></li>
                <li><a class="route" href="./about.php">About</a></li>
                <li><a class="route" href="./contact.php">Contact</a></li>
                <li><a class="route" href="./feedback.php">Feedback</a></li>
                
                    <?php
                    if (isset($_SESSION['login']['username']) && isset($_SESSION['login']['nameUser'])) {
                        echo '<li><a class="route" href="./shoping_cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>';
                        echo '<li class="container-username">';
                        echo "<a href='#' class='route username'>" . $_SESSION['login']['nameUser'] . "</a>";
                        echo '<ul class="route tooltip-login">
                                <li class="tooltip-login__item"><a class="route" href="./logout.php">Đăng xuất</a></li>
                                <li class="tooltip-login__item"><a href="./bill.php">Đơn đã mua</a></li>
                            </ul>';
                        echo '</li>';
                    } else {
                        echo '<div id="login-btn" class="route fas fa-user"></div>';
                    } ?>

                <?php
                if (isset($_SESSION['login']['loaiTK']) && $_SESSION['login']['loaiTK'] == 2) {
                    echo '<div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                      Welcome Admin
                    </a>
                    <ul class="dropdown-menu">
                      <li style="padding: 0;"><a href="./productManagement.php?tk='.$_SESSION['login']['loaiTK'].'" class="dropdown-item" href="#">Quản lý sản phẩm</a></li>
                      <li style="padding: 0;"><a class="dropdown-item" href="./accountManagement.php">Quản lý tài khoản</a></li>
                    </ul>
                  </div>';
                }
                ?>
            </ul>
        </div>
    </section>

    <!-- login form -->
    <div class="login-form-container">

        <div id="close-login-btn" class="fas fa-times"></div>

        <form action="./login.php" method="POST">
            <h3>ĐĂNG NHẬP</h3>
            <span>Email</span>
            <input type="email" name="username" class="box" placeholder="Nhập email hợp lệ">
            <span>Mật Khẩu</span>
            <input type="password" name="password" class="box" placeholder="Nhập mật khẩu">
            <div class="checkbox">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me"> Ghi nhớ </label>
            </div>
            <input type="submit" name="submit" value="ĐĂNG NHẬP" class="btn">
            <p>Quên mật khẩu ? <a href="#">Click here</a></p>
            <p>Chưa có tài khoản ? <a href="./createAccount.php">Tạo tài khoản</a></p>
        </form>
    </div>
    <script src="./script.js"></script>

</body>

</html>