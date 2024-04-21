<?php

    session_start();
    require './config/config.php';

    if (!isset($_SESSION['user_id'])) {
        echo '<script>alert("กรุณาเข้าสู่ระบบ"); window.location.href = "login.php";</script>';
        exit();
      }
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
        <ul class="step-list current-item">
            <li class="step-item">
                <span class="progress-count">1</span>
                <span class="progress-label">แพ็คเกจ</span>
            </li>
            <li class="step-item">
                <span class="progress-count">2</span>
                <span class="progress-label">เลือกชุดอุปกรณ์</span>
            </li>
            <li class="step-item">
                <span class="progress-count">3</span>
                <span class="progress-label">เวลานัดหมาย</span>
            </li>
            <li class="step-item">
                <span class="progress-count">4</span>
                <span class="progress-label">ยืนยันการจอง</span>
            </li>
        </ul>
    </section>
    <div class="table basic">
      <div class="price-section">
        <div class="price-area">
        <img src="./img/growth.svg" alt="alternatetext">
          <div class="inner-area"></div>
        </div>
      </div>
      <div class="package-name"></div>
      <ul class="features">
        <li>
          <span class="list-name">รองรับผู้เข้าร่วมประชุมไม่เกิน 250 ราย / Lisense</span>
        </li>
        <li>
          <span class="list-name">รองรับการรับชมภาพและเสียงผ่านระบบ Inventech Connect</span>
        </li>
        <li>
          <span class="list-name">รองรับการขอ Username & Password เพื่อเข้าร่วมประชุม</span>
        </li>
        <li>
          <span class="list-name">รองรับการลงทะเบียน/คะแนนผ่านระบบทุกรูปแบบ</span>
        </li>
        <li>
          <span class="list-name">รองรับการยืนยันตัวตนและขอรหัสผู้ใช้งานผ่าน OTP ไม่เกิน 500 ครั้ง</span>
        </li>
        <li>
          <span class="list-name">บริการพิื้นที่ Cloud Hosting Server</span>
        </li>
      </ul>
      <div class="btn"><button>Select</button></div>
    </div>
    <div class="table premium">
      <div class="price-section">
        <div class="price-area">
        <img src="./img/silver.svg" alt="alternatetext">
          <div class="inner-area"></div>
        </div>
      </div>
      <div class="package-name"></div>
      <ul class="features">
        <li>
          <span class="list-name">Includes access to perks from GROWTH</span>
        </li>
        <li>
          <span class="list-name">รองรับผู้เข้าร่วมประชุมไม่เกิน 500 ราย / Lisense</span>
        </li>
        <li>
          <span class="list-name">รองรับการยืนยันตัวตนและขอรหัสผู้ใช้งานผ่าน OTP ไม่เกิน 1000 ครั้ง</span>
        </li>
      </ul>
      <div class="btn"><button>Select</button></div>
    </div>
    <div class="table ultimate">
      <div class="price-section">
        <div class="price-area">
        <img src="./img/gold.svg" alt="alternatetext">
          <div class="inner-area"></div>
        </div>
      </div>
      <div class="package-name"></div>
      <ul class="features">
        <li>
          <span class="list-name">Includes access to perks from SILVER</span>
        </li>
        <li>
          <span class="list-name">รองรับผู้เข้าร่วมประชุมไม่เกิน 3,000 ราย / Lisense</span>
        </li>
        <li>
          <span class="list-name">รองรับการยืนยันตัวตนและขอรหัสผู้ใช้งานผ่าน OTP ไม่เกิน 3,500 ครั้ง</span>
        </li>
        <li>
          <span class="list-name">รองรับการจัดประชุมแบบสองภาษา</span>
        </li>
      </ul>
      <div class="btn"><button>Select</button></div>
    </div>
    </div>
    <footer>
        <p>&copy; 2024 Inventech AGM Booking. All rights reserved.</p>
    </footer>
    <script>
      // Get modal element
      var modal = document.getElementById("loginModal");

      // Get close button
      var span = document.getElementsByClassName("close")[0];

      // When the user clicks on close button, close the modal
      span.onclick = function() {
        modal.style.display = "none";
      }
    </script>
</body>
</html>
