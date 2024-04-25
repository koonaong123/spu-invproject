<?php
    session_start();

    // ตรวจสอบการเข้าสู่ระบบ
    if (!isset($_SESSION['user_id'])) {
        echo '<script>alert("กรุณาเข้าสู่ระบบ"); window.location.href = "login.php";</script>';
        exit();
    }

    // ตรวจสอบขั้นตอนปัจจุบัน
    $currentStep = isset($_GET['step']) ? $_GET['step'] : 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/booking.css">
</head>
<body>
    <!-- include nav -->
    <?php include('nav.php'); ?>
    <!-- end -->
    <div class="wrapper">
        <section class="step">
            <ul class="step-list">
                <li class="step-item <?php if ($currentStep == 1) echo 'current-item'; ?>">
                    <span class="progress-count">1</span>
                    <span class="progress-label">แพ็คเกจ</span>
                </li>
                <li class="step-item <?php if ($currentStep == 2) echo 'current-item'; ?>">
                    <span class="progress-count">2</span>
                    <span class="progress-label">เลือกชุดอุปกรณ์</span>
                </li>
                <li class="step-item <?php if ($currentStep == 3) echo 'current-item'; ?>">
                    <span class="progress-count">3</span>
                    <span class="progress-label">เวลานัดหมาย</span>
                </li>
                <li class="step-item <?php if ($currentStep == 4) echo 'current-item'; ?>">
                    <span class="progress-count">4</span>
                    <span class="progress-label">ยืนยันการจอง</span>
                </li>
            </ul>
        </section>

        <!-- เนื้อหาของแต่ละขั้นตอน -->
        <?php 
            $stepFile = 'step' . $currentStep . '.php';
            include($stepFile);
        ?>
    </div>
    <footer>
        <p>&copy; 2024 Inventech AGM Booking. All rights reserved.</p>
    </footer>
</body>
</html>
