<?php
include './connection/connection.php';
include './header.php';

if (isset($_GET['id'])) {
    $data = $_GET['id'];
    $querySanPham = "select * from sanpham where maLoaiSP=$data";
}

if (isset($_GET['product'])) {
    $nameProduct = $_GET['product'];
    $querySanPham = "select * from sanpham where tenSP like '%$nameProduct%'";
}


$idAccount = "";
if (isset($_SESSION['login']['idAccount'])) {
    $idAccount = $_SESSION['login']['idAccount'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./asset/grid.css">
    <link rel="stylesheet" href="./shop/shop.css">
    <link rel="stylesheet" href="./shop/shop1.css">
    <title>Toàn bộ sản phẩm</title>
</head>

<body>
    
    <div class="shop">
        <div class="grid">
            <div class="row">
                <div class="col l-2">
                    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
                        <div class="position-sticky">
                            <div class="list-group list-group-flush mx-3 mt-4">
                                <?php
                                $queryLoaiSP = "select * from loaisp";
                                $result = mysqli_query($conn, $queryLoaiSP);
                                while ($row = mysqli_fetch_row($result)) {
                                    echo ' <a href="./shop.php?id=' . $row[0] . '" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                                    <span>' . $row[1] . ' </span>
                                </a>';
                                }
                                ?>

                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col l-10">
                    <h3 class="heading">DANH SÁCH <?php
                                                    if (isset($data)) {
                                                        $queryTenLoaiSP = "select tenLoaiSP from loaisp where maLoaiSP = $data";
                                                        $result = mysqli_query($conn, $queryTenLoaiSP);
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            echo "<span class='title'>" . $row['tenLoaiSP'] . "</span>";
                                                        }
                                                    } else {
                                                        echo "TOÀN BỘ SẢN PHẨM";
                                                    }
                                                    ?></h3>

                    <section id="product1" class="section-p1">
                        <div class="pro-container" style="justify-content:flex-start;">
                            <?php
                            $item_per_page = 1;
                            if (!isset($querySanPham)) {
                                $item_per_page = !empty($_GET["per_page"]) ? $_GET["per_page"] : 12;
                                $current_page = !empty($_GET["page"]) ? $_GET["page"] : 1;
                                $offset = ($current_page - 1) * $item_per_page;
                                $querySanPham = "SELECT * FROM sanpham ORDER BY maSP asc LIMIT " . $item_per_page . " OFFSET " . $offset . "";
                                $totalRecord = mysqli_query($conn, "SELECT * FROM sanpham");
                                $totalRecord = $totalRecord->num_rows;
                                $totalPages = ceil($totalRecord / $item_per_page);
                            }
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
                                    <h4 class="price">'.$row['giaSP'].'</h4>
                                </div>
                                <a href="./cart.php?id='.$row['maSP'].'"><i class="fal fa-shopping-cart cart"></i></a></div>
                                </a>';
                            }
                            ?>
                        </div>
                        <div>
                            <?php
                            include "./pagnination.php";
                            ?>
                        </div>
                    </section>
                </div>
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