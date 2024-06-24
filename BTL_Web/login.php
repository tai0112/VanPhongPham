<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <?php
    include "./connection/connection.php";
    session_start();
    if (isset($_POST['submit'])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $accountCheck = "select * from taikhoan where username = '$username' and password = '$password'";
        $result = mysqli_query($conn, $accountCheck);
        $check = mysqli_num_rows($result);
        if ($check == 1) {
            while ($row = mysqli_fetch_row($result)) {
                $idAccount = $row[0];
                $nameUser = $row[4];
                $loaiTK = $row[1];
            }

            $_SESSION['login']['username'] = $username;
            $_SESSION['login']['password'] = $password;
            $_SESSION['login']['idAccount'] = $idAccount;
            $_SESSION['login']['nameUser'] = $nameUser;
            $_SESSION['login']['loaiTK'] =  $loaiTK;

            header("Location: index.php");
        } else {
            echo '<div style="text-align: center;" class="alert alert-danger alert-dismissible">
            <strong>Vui lòng kiểm tra lại thông tin đã nhập !!!</strong>
          </div>';

          header( "refresh:2; index.php" ); 
        }
    }
    ?>
</body>

</html>