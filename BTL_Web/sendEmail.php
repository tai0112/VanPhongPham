<?php
session_start();
include "./connection/connection.php";
$email = $_SESSION['login']['username'];
$nameUser = $_SESSION['login']['nameUser'];
$idAccount = $_SESSION['login']['idAccount'];

$queryGetBill = "SELECT maHD FROM hoadon WHERE maTaiKhoan = $idAccount ORDER BY maHD DESC limit 1";
$resultGetBill = mysqli_query($conn, $queryGetBill);
$idBill = 0;
while ($row = mysqli_fetch_array($resultGetBill)) {
    $idBill = $row['maHD'];
}

$queryChiTietHD = "SELECT * FROM chitiethd WHERE maHD = $idBill";

$resultChiTietHD = mysqli_query($conn, $queryChiTietHD);



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'vanphongpham0112@gmail.com';                     //SMTP username
    $mail->Password   = 'gert zant icdh lywm';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                             //TCP port to connect to
    $mail->CharSet  = 'UTF-8';
    //Recipients
    $mail->setFrom('vanphongpham@gmail.com', 'Văn Phòng Phẩm');
    $mail->addAddress("$email", "$nameUser");     //Add a recipient
    //Name is optional
    //Content
    $mail->isHTML(true);                           //Set email format to HTML
    $mail->Subject = 'Thanh toán thành công';
    $mail->Body = '<h1>Cảm ơn bạn đã ủng hộ</h1>';

    // while ($row = mysqli_fetch_array($resultChiTietHD)) {
    //     $mail->Body = '<h1>'. $row['tenSP'] .'</h1>';
    // }
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

header('Location: ./bill.php');
