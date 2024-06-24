<?php

    include './connection/connection.php';
    $idProduct = $_GET['id'];
    session_start();

    $idCart = $_SESSION['login']['idAccount'];
    
    $queryDeleteItem = "DELETE FROM chitietgiohang WHERE maGH =$idCart AND maSP=$idProduct";
    $result = mysqli_query($conn, $queryDeleteItem);
    header("Location: ./shoping_cart.php");

?>