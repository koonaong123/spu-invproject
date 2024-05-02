<?php

    session_start();
    require './config/config.php';

    if (!isset($_SESSION['user_id'])) {
        header("location: /inventech/login.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <!-- include nav -->
    <?php include('nav.php'); ?>
    <!-- end -->
    <div class="container">
        <?php
            if (isset($_SESSION['user_id'])) {
                $user_id = $_SESSION['user_id'];
            }

            try {

                $stmt = $conn->prepare("SELECT * FROM inv_customer WHERE id = ?");
                $stmt->execute([$user_id]);
                $userData = $stmt->fetch();

            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        ?>

        <section class="agmlogo">
            <img src="img/main.svg" alt="AGM LOGO">
        </section>
        <aside class="sidebar">
            <h2>Inventech Systems <br><br></h2>
            <p1>ผู้ให้บริการระบบงานซอฟท์แวร์ด้วยเทคโนโลยีที่ทันสมัย “มุ่งมั่นในการพัฒนา เดินหน้าด้วยคุณภาพของการบริการ บนมาตรฐานความปลอดภัยระดับสากล” <br><br></p1>
            <p2>ด้วยประสบการณ์มากกว่า 20 ปี เราได้พัฒนาระบบงานต่าง ๆ มากมาย โดยได้อยู่บนพื้นฐานของความถูกต้อง และเกิดประโยชน์ จากการใช้งานจริง และรวมถึงเป็นผู้ให้บริการระบบประชุมผู้ถือหุ้น อันดับหนึ่งที่มีมาตรฐานการบริการสูงสุดและครอบคลุมกลุ่มลูกค้าจดทะเบียนในทุกกลุ่มธุรกิจ ด้วยแรงการสนับสนุนและความเชื่อมั่นจากลูกค้าของเรานี้ เป็นเสมือนดั่งแรงผลักดันให้เรายังคงมุ่งมั่นในการพัฒนาและขยายระบบบริการใหม่ ๆ ให้ครอบคลุมและตอบสนองต่อความต้องการของลูกค้าได้อย่างยั่งยืน</p2>
        </aside>
    </div>

    <footer>
        <p>&copy; 2024 Inventech AGM Booking. All rights reserved.</p>
    </footer>
</body>
</html>
