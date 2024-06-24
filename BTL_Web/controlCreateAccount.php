<?php
include "./connection/connection.php";
if (isset($_POST['username']) && isset($_POST['email'])  && isset($_POST["password"]) && isset($_POST['repeatPassword'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(strlen($password) < 8) {
        return;
    }
    $repeatPassword = $_POST['repeatPassword'];
    $email = $_POST['email'];
    $queryCheckEmail = "SELECT * FROM taikhoan WHERE username='$email'";
    $result = mysqli_query($conn, $queryCheckEmail);
    $result = $result->num_rows;
    if ($result == 0) {
        if ($password == $repeatPassword) {
            $queryCreateAccount = "INSERT INTO taikhoan(username, password, name) VALUE('$email', '$password', '$username')";
            $resultCreate = mysqli_query($conn, $queryCreateAccount);
            $queryGetId = "SELECT maTK FROM taikhoan WHERE username = '$email'";
            $resultGetAccount = mysqli_query($conn, $queryGetId);
            while($row = mysqli_fetch_array($resultGetAccount)) {
                $idAccount = $row['maTK'];
                $queryCreateCart = "INSERT INTO giohang(maGH, maTK, thanhTien) VALUES(null, '$idAccount', 0)";
                echo $queryCreateCart;
                $resultCreateAccount = mysqli_query($conn, $queryCreateCart);    
            }
        } else {
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Email hoặc số điện thoại đã được sử dụng vui lòng sử dụng email hoặc số điện thoại khác</strong>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
        }
    }
    header("Location: createAccount.php");
}
?>