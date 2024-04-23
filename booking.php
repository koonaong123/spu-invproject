<?php
    session_start();
    require './config/config.php';

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
    <script>
  // Get all package elements
const packageElements = document.getElementsByClassName('table');

// Attach click event listeners to each package's "Select" button
for (const packageElement of packageElements) {
  const selectButton = packageElement.querySelector('.btn button');
  selectButton.addEventListener('click', handlePackageSelection);
}

// Handle package selection when a "Select" button is clicked
function handlePackageSelection(event) {
  // Get the clicked button and its associated package element
  const clickedButton = event.target;
  const packageElement = clickedButton.closest('.table');

  // Extract the package name from the package element
  const packageName = packageElement.querySelector('.package-name').textContent;

  // Set the selectedPackage variable
  selectedPackage = packageName;

  // Get the form element
  const formElement = document.querySelector('form');

  // Add a hidden input field to store the selected package
  const hiddenInputField = document.createElement('input');
  hiddenInputField.type = 'hidden';
  hiddenInputField.name = 'selectedPackage';
  hiddenInputField.value = selectedPackage;
  formElement.appendChild(hiddenInputField);

  // Submit the form
  formElement.submit();
}

</script>
</body>
</html>
