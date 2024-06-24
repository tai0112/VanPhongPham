<?php
    include "./connection/connection.php";
    $id = $_GET['id'];
    $queryDelete = "DELETE FROM taikhoan WHERE maTK='$id'";
    echo $queryDelete;
    $result = mysqli_query($conn, $queryDelete);
    header('location: ./accountManagement.php');
?>