<?php

session_start();
require '../config/config.php';

// Step 1: Package Selection
if (isset($_POST['selectedPackage'])) {
  $_SESSION['selectedPackage'] = $_POST['selectedPackage'];
  header('Location: booking.php?step=2'); // Proceed to step 2
}

// Step 2: Equipment Selection
if (isset($_POST['selectedEquipment'])) {
  $_SESSION['selectedEquipment'] = $_POST['selectedEquipment']; // Array or IDs
  header('Location: booking.php?step=3'); // Proceed to step 3
}

// Step 3: Date and Time Selection
if (isset($_POST['meetingDate']) && isset($_POST['meetingTime'])) {
  $_SESSION['meetingDate'] = $_POST['meetingDate']; // YYYY-MM-DD
  $_SESSION['meetingTime'] = $_POST['meetingTime']; // HH:MM:SS
  header('Location: booking.php?step=4'); // Proceed to step 4
}


if (isset($_POST['confirm_booking'])) {
$packages = ($_POST['selectedPackage']); // Trim to remove leading/trailing spaces
$equipment = ($_POST['selectedEquipment']);
$meetingdate = ($_POST['meetingDate']);
$meetingtime = $_POST['meetingTime'];

$stmt = $conn->prepare("INSERT INTO inv_booking(pack, email, c_name, password, c_tel, role) VALUES(?, ?, ?, ?)");
$stmt->execute([$packages, $equipment, $meetingdate, $meetingtime]);

$_SESSION['success'] = "Booking Successful";
header("location: /inventech/dashboard.php");
exit();
}

?>