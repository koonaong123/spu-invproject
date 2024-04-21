<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <!-- include nav -->
    <?php include('nav.php'); ?>
    <!-- end -->
    <div class="registerform">
    <form action="/inventech/process/register_process.php" method="post" class="register-form">
            <h2>ลงทะเบียนเข้าใช้งาน</h2>
            <p>กรุณากรอกแบบฟอร์มนี้เพื่อสร้างบัญชี</p>
            
            <?php if (isset($_SESSION['success'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?php
                        echo $_SESSION['success'];
                        unset ($_SESSION['success']); 
                    ?>
                </div>
            <?php } ?>
            <?php if (isset($_SESSION['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php
                        echo $_SESSION['error'];
                        unset ($_SESSION['error']); 
                    ?>
                </div>
            <?php } ?>
            <div class="input-group">
                <label for="companyname">ชื่อบริษัท :</label>
                <input type="text" id="company_name" name="company_name" required>
            </div>
            <div class="input-group">
                <label for="email">อีเมล :</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="customername">ชื่อผู้ติดต่อ :</label>
                <input type="text" id="c_name" name="c_name" required>
            </div>
            <div class="input-group">
                <label for="password">รหัสผ่าน :</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input-group">
                <label for="confirmpassword">ยืนยันรหัสผ่าน :</label>
                <input type="password" id="confirmpassword" name="confirmpassword" required>
            </div>
            <div class="input-group">
                <label for="tel">เบอร์โทรผู้ติดต่อ :</label>
                <input type="tel" id="c_tel" name="c_tel" maxlength="10" placeholder="0123456789" pattern="[0-9]{10}" required>
            </div>
            <div class="poli-and-condi">
                <div class="checkbox-item">
                    <input type="checkbox" id="policy" name="policy" required>
                    <label for="policy"><span>ยอมรับ </span><a href="https://pdpa.pro/privacy" target="_blank">นโยบายความเป็นส่วนตัวสำหรับลูกค้า</a></label>
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" id="condition" name="condition" required>
                    <label for="policy"><span>ยอมรับ </span><a href="https://pdpa.ditp.go.th/content/policy" target="_blank">ข้อกำหนดเงื่อนไขและการใช้บริการ</a></label>
                </div>
            </div>
            <button type="submit" class="registerbtn" name="registerbtn" id="registerbtn">Register</button>
        </form>
    </div>
    <footer>
        <p>&copy; 2024 Inventech AGM Booking. All rights reserved.</p>
    </footer>
</body>
</html>
