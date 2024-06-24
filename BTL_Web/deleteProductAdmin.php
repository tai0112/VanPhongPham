<?php
    include "./connection/connection.php";
    $id = $_GET['id'];
    $queryDelete = "DELETE FROM sanpham WHERE maSP='$id'";
    echo $queryDelete;
    $result = mysqli_query($conn, $queryDelete);
    header('location: ./productManagement.php');
?>