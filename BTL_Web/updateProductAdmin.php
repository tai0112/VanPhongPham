<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="grid wide">
        <form class="mt-5" action="./addProduct.php" method="POST">
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Mã sản phẩm</label>
                <input name="inputID" class="form-control" type="text" disabled>
            </div>
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Nhập vào mã loại:</label>
                <select class="form-select" aria-label="Default select example" name="inputMaLoai">
                    <?php
                    $queryMaLoai = "SELECT * FROM loaiSP";
                    $resultMaLoai = mysqli_query($conn, $queryMaLoai);

                    while ($row = mysqli_fetch_row($resultMaLoai)) {
                        echo "<option value='$row[0]'>$row[1]</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Nhập vào tên sản phẩm:</label>
                <input name="inputName" class="form-control" type="text" multiple>
            </div>
            <div class="mb-3">
                <label for="formFileSm" class="form-label">Nhập vào giá sản phẩm:</label>
                <input name="inputGia" class="form-control form-control-sm" type="text">
            </div>
            <div>
                <label for="formFileLg" class="form-label">Nhập vào mô tả sản phẩm:</label>
                <input name="inputMoTa" class="form-control form-control-lg" type="text">
            </div>
            <div>
                <label for="formFileLg" class="form-label">Hình ảnh sản phẩm:</label>
                <input name="inputHinhAnh" class="form-control form-control-lg" id="formFileLg" type="text">
            </div>
            <button class="button btn btn-primary" type="submit">Thêm</button>
        </form>
    </div>
</body>
</html>