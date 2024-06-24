<?php
include "./connection/connection.php";
include "./header.php";
error_reporting(0);
// session_start();
$maLoai = "";
$giaSP = "";
$moTa = "";
$hinhAnh = "";
$tenSP = "";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $queryTimKiem = "SELECT * FROM taikhoan where maTK=$id";
    $resultTimKiem = mysqli_query($conn, $queryTimKiem);
    while ($row = mysqli_fetch_row($resultTimKiem)) {
        $maLoai = $row[1];
        $tenSP = $row[2];
        $giaSP = $row[3];
        $moTa = $row[4];
    }
} else {
    $id = "";
}


$admin = $_SESSION['login']['loaiTK'];

if ($admin == 1) {
    header('Location: ./index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./asset/grid.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Quản lý sản phẩm</title>
</head>

<body>
    <style>
        .img-product {
            width: 100px;
            height: 100px;
        }

        .button {
            padding: 9px 10px !important;
            font-size: 20px !important;
        }

        .icon {
            height: 10px;
            width: 10px;
        }
    </style>
    <?php
    if (isset($_POST['search'])) {
        $data = $_POST['data'];
        $queryTaiKhoan = "SELECT * FROM taikhoan WHERE name LIKE N'%" . $data . "%' or username = '$data'";
    }
    ?>
    <div class="grid wide">

        <table class="mt-5 table table-striped table-light table-bordered table-hover table-sm">
            <thead>
                <tr>
                    <th>Họ và tên</th>
                    <th>Email</th>
                    <th>Tiêu đề</th>
                    <th>Nội dung</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $item_per_page = 1;
                $item_per_page = !empty($_GET["per_page"]) ? $_GET["per_page"] : 4;
                $current_page = !empty($_GET["page"]) ? $_GET["page"] : 1;
                $offset = ($current_page - 1) * $item_per_page;
                $queryTaiKhoan = "SELECT * FROM phanhoi LIMIT " . $item_per_page . " OFFSET " . $offset . "";
                $totalRecord = mysqli_query($conn, "SELECT * FROM phanhoi");
                $totalRecord = $totalRecord->num_rows;
                $totalPages = ceil($totalRecord / $item_per_page);
                $result = mysqli_query($conn, $queryTaiKhoan);
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>
                        <td>
                            $row[HoTen]
                        </td>
                        <td>
                            $row[Email] 
                        </td>
                        <td>
                            $row[TieuDe]
                        </td>
                        <td>
                            <span class=''>$row[NoiDung]</span>
                        </td>
                    </tr>";
                }
                ?>

            </tbody>
        </table>
        <?php include "./pagnination.php" ?>
    </div>
    <?php include "./footer.php" ?>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>