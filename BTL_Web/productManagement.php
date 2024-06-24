<?php
include "./connection/connection.php";
include "./header.php";

// session_start();
$maLoai = "";
$giaSP = "";
$moTa = "";
$hinhAnh = "";
$tenSP = "";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $queryTimKiem = "SELECT * FROM sanpham where maSP=$id";
    $resultTimKiem = mysqli_query($conn, $queryTimKiem);
    while ($row = mysqli_fetch_row($resultTimKiem)) {
        $maLoai = $row[1];
        $tenSP = $row[2];
        $giaSP = $row[3];
        $moTa = $row[4];
        $hinhAnh = $row[5];
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

        .icon {
            height: 10px;
            width: 10px;
        }
    </style>
    <?php
    if(isset($_POST['search'])) {
        $data = $_POST['data'];
        $querySanPham = "SELECT * FROM sanpham WHERE tenSP LIKE N'%" .$data. "%'";
    }
    ?>
    <div class="grid wide">
        <form class="mt-5" action="./addProduct.php" method="POST">
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Mã sản phẩm</label>
                <input name="inputID" value="<?php echo $id ?>" class="form-control" type="text" readonly />
            </div>
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Nhập vào mã loại:</label>
                <select class="form-select" aria-label="Default select example" name="inputMaLoai">
                    <option value="" selected></option>
                    <?php
                    $queryMaLoai = "SELECT * FROM loaiSP";
                    $resultMaLoai = mysqli_query($conn, $queryMaLoai);

                    while ($row = mysqli_fetch_row($resultMaLoai)) {
                        if ($row[0] == $maLoai) {
                            echo "<option selected value='$row[0]'>$row[1]</option>";
                        } else {
                            echo "<option value='$row[0]'>$row[1]</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Nhập vào tên sản phẩm:</label>
                <input name="inputName" value="<?php echo $tenSP ?>" class="form-control" type="text" multiple>
            </div>
            <div class="mb-3">
                <label for="formFileSm" class="form-label">Nhập vào giá sản phẩm:</label>
                <input name="inputGia" value="<?php echo $giaSP ?>" class="form-control form-control-sm" type="text">
            </div>
            <div>
                <label for="formFileLg" class="form-label">Nhập vào mô tả sản phẩm:</label>
                <!-- <input name="inputMoTa" value="<?php echo $moTa ?>" class="form-control form-control-lg" type="text"> -->
                <textarea class="form-control form-control-lg" name="inputMoTa" cols="40" rows="5"><?php echo $moTa ?></textarea>
            </div>
            <div>
                <label for="formFileLg" class="mt-3 form-label">Hình ảnh sản phẩm:</label>
                <input name="inputHinhAnh" value="<?php echo $hinhAnh ?>" class="form-control form-control-lg" id="formFileLg" type="text">
            </div>
            <button name="add" class="button btn btn-sm" type="submit">Thêm</button>
            <button name="update" class="button btn btn-sm" type="submit">Sửa</button>
            <button name="skip" class="button btn btn-sm" type="submit">Bỏ qua</button>
        </form>
        <!-- Tìm kiếm -->
        <form class="mb-3 mt-5" method="POST" action="">
            <label for="exampleFormControlInput1" class="form-label">Tìm kiếm sản phẩm:</label>
            <input type="text" name="data" class="form-control" id="exampleFormControlInput1" placeholder="">
            <input type="submit" name="search" value="Tìm kiếm" class="btn">
        </form>
        <table class="mt-5 table table-striped table-light table-bordered table-hover table-sm">
            <thead>
                <tr>
                    <th>Hình ảnh</th>
                    <th>Mã sản phẩm</th>
                    <th>Mã loại</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Mô tả</th>
                    <th col="2">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if(!isset($querySanPham)) {
                    $item_per_page = 1;
                    $item_per_page = !empty($_GET["per_page"]) ? $_GET["per_page"] : 8;
                    $current_page = !empty($_GET["page"]) ? $_GET["page"] : 1;
                    $offset = ($current_page - 1) * $item_per_page;
                    $querySanPham = "SELECT * FROM sanpham ORDER BY maSP asc LIMIT " . $item_per_page . " OFFSET " . $offset . "";
                    $totalRecord = mysqli_query($conn, "SELECT * FROM sanpham");
                    $totalRecord = $totalRecord->num_rows;
                    $totalPages = ceil($totalRecord / $item_per_page);
                }
                $result = mysqli_query($conn, $querySanPham);
                while ($row = mysqli_fetch_row($result)) {
                    echo "<tr>
                        <td>
                            <img class='img-product' src=" . $row[5] . ">
                        </td>
                        <td>
                            $row[0]
                        </td>
                        <td>
                            $row[1]
                        </td>
                        <td>
                            $row[2]
                        </td>
                        <td>
                            <span class='price'>$row[3]</span>
                        </td>
                        <td>
                            $row[4]
                        </td>
                        <td style='text-align: center;'>
                            <a class='btn' href='deleteProductAdmin.php?id=$row[0]'><i class='icon fa-solid fa-xmark'></i></a>
                            <a class='btn' href='productManagement.php?id=$row[0]'><i class='icon fa-solid fa-pen-to-square'></i></a>
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