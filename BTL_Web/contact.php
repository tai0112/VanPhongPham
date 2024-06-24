<?php
include "./connection/connection.php";
    if(isset($_POST['submit'])) {
        $email = $_POST['email'];
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $content = $_POST['content'];
        if(!($email == "" || $name == "" || $subject == "" || $content == "")) {
            $queryContact = "INSERT INTO phanhoi(HoTen, Email, TieuDe, NoiDung) VALUES('$name', '$email', '$subject', '$content')";
            $result = mysqli_query($conn, $queryContact);
        }else {
            echo "<script>
            alert('Bạn chưa nhập đầy đủ thông tin');
            </script>
            ";
        }
    }
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Van Phong Pham</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
</head>

<body>
    <style>
        #page-header.contact-header {
            background-image: url("img/about/Moi\ stationary.png");
        }

        #contact-details {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        #contact-details .details {
            width: 40%;
        }

        #contact-details .details span,
        #form-details form span {
            font-size: 12px;
        }

        #contact-details .details h2,
        #form-details form h2 {
            font-size: 26px;
            line-height: 35px;
            padding: 20px 0;
        }

        #contact-details .details h3 {
            font-size: 16px;
            padding-bottom: 15px;
        }

        #contact-details .details li {
            list-style: none;
            display: flex;
            padding: 10px 0;
        }

        #contact-details .details li i {
            font-size: 14px;
            padding-right: 22px;
        }

        #contact-details .details li p {
            margin: 0;
            font-size: 14px;
        }

        #contact-details .map {
            width: 55%;
            height: 400px;
        }

        #contact-details .map iframe {
            width: 100%;
            height: 100%;
        }

        #form-details {
            display: flex;
            justify-content: space-between;
            margin: 30px;
            padding: 80px;
            border: 1px solid #e1e1e1;
        }

        #form-details form {
            width: 65%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        #form-details form input,
        #form-details form textarea {
            width: 100%;
            padding: 12px 15px;
            outline: none;
            margin-bottom: 20px;
            border: 1px solid #e1e1e1;
        }

        #form-details form button {
            background-color: #088178;
            color: #fff;
        }

        #form-details .people div {
            padding-bottom: 25px;
            display: flex;
            align-items: flex-start;
        }

        #form-details .people div img {
            width: 65px;
            height: 65px;
            object-fit: cover;
            margin-right: 15px;
        }

        #form-details .people div p {
            margin: 0;
            font-size: 13px;
            line-height: 25px;
        }

        #form-details .people div p span {
            display: block;
            font-size: 16px;
            font-weight: 600;
            color: #000;
        }
    </style>

    <?php include './header.php' ?>

    <section id="page-header" class="contact-header">

        <h2>#let's_talk</h2>

        <p>LEAVE A MESAGE, We love to hear from you !</p>

    </section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit one of our agency locations or contact us today</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class="fal fa-map"></i>
                    <p>218 Đường Lĩnh Nam, Q. Hoàng Mike, TP. Hà Nội</p>
                </li>
                <li>
                    <i class="fal fa-envelope"></i>
                    <p>contact@example.com</p>
                </li>
                <li>
                    <i class="fal fa-phone-alt"></i>
                    <p>024.36331854</p>
                </li>
                <li>
                    <i class="fal fa-clock"></i>
                    <p>Monday to Saturday: 9.00am to 16.00pm</p>
                </li>
            </div>
        </div>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2375.302031394167!2d-2.2939150230268104!3d53.46306206598382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bae72e7e47f69%3A0x6c930e96df4455fe!2zU8OibiB24bqtbiDEkeG7mW5nIE9sZCBUcmFmZm9yZA!5e0!3m2!1svi!2s!4v1712418457666!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section id="form-details" class="section-p1">
        <form action="" method="POST">
            <span>LEAVE A MESSAGE</span>
            <h2>We love to hear from you</h2>
            <input type="text" name="name" placeholder="Your Name">
            <input type="email" name="email" placeholder="E-mail">
            <input type="text" name="subject" placeholder="Subject">
            <textarea name="content" id="" name="content" cols="30" rows="10" placeholder="Your Message"></textarea>
            <input class="btn" name="submit" type="submit">
        </form>

        <div class="people">
            <div>
                <img src="img/people/av1.png" alt="">
                <p><span>Nguyễn Hồng Sơn </span>Senior Marketing Manager <br> Phone: 034.9314196 <br> Email: sondanghoc@gmail.com</p>
            </div>
            <div>
                <img src="img/people/av2.png" alt="">
                <p><span>Lê Hữu Tài </span>Senior Marketing Manager <br> Phone: + 000 123 000 77 88 <br> Email: contact@example.com</p>
            </div>
            <div>
                <img src="img/people/av3.png" alt="">
                <p><span>Nguyễn Hải Nam </span>Senior Marketing Manager <br> Phone: + 000 123 000 77 88 <br> Email: contact@example.com</p>
            </div>
            <div>
                <img src="img/people/av4.png" alt="">
                <p><span>Mai Đức Tùng </span>Senior Marketing Manager <br> Phone: + 000 123 000 77 88 <br> Email: contact@example.com</p>
            </div>
        </div>
    </section>

    

    <?php include "./footer.php" ?>



    <script src="script.js"></script>
</body>

</html>