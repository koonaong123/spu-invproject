<?php

session_start();
require '../config/config.php';


// Define step variable based on URL parameter
$step = isset($_GET['step']) ? $_GET['step'] : 1;

// Handle step 1
if ($step == 1) {
    // Retrieve selected package from POST data
    $selectedPackage = isset($_POST['selectedPackage']) ? $_POST['selectedPackage'] : null;

    // Store selected package in session
    $_SESSION['selectedPackage'] = $selectedPackage;

    // Redirect to step 2
    header("Location: ../booking.php?step=2");
    exit;
}

// Handle step 2
if ($step == 2) {
    // Retrieve selected equipment from POST data
    $selectedEquipment = isset($_POST['selectedEquipment']) ? $_POST['selectedEquipment'] : null;

    // Store selected equipment in session
    $_SESSION['selectedEquipment'] = $selectedEquipment;

    // Redirect to step 3
    header("Location: ../booking.php?step=3");
    exit;
}

// Handle step 3
if ($step == 3) {
    // Retrieve meeting date and time from POST data
    $meetingDate = isset($_POST['meetingDate']) ? $_POST['meetingDate'] : null;
    $meetingTime = isset($_POST['meetingTime']) ? $_POST['meetingTime'] : null;

    // Store meeting date and time in session
    $_SESSION['meetingDate'] = $meetingDate;
    $_SESSION['meetingTime'] = $meetingTime;

    // Redirect to step 4
    header("Location: ../booking.php?step=4");
    exit;
}

// Handle step 4 (booking confirmation and insertion)
if ($step == 4) {
    // Retrieve all selected data from session
    $selectedPackage = isset($_SESSION['selectedPackage']) ? $_SESSION['selectedPackage'] : null;
    $selectedEquipment = isset($_SESSION['selectedEquipment']) ? $_SESSION['selectedEquipment'] : null;
    $meetingDate = isset($_SESSION['meetingDate']) ? $_SESSION['meetingDate'] : null;
    $meetingTime = isset($_SESSION['meetingTime']) ? $_SESSION['meetingTime'] : null;
    $user_id = $conn->insert_inv_customer;
    // Prepare SQL query to insert booking data into inv_booking table
    $sql = "INSERT INTO inv_booking (package_name, equipment_details, meeting_date, meeting_time, user_id) VALUES (?, ?, ?, ?, ?)";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param("sssss", $selectedPackage, $selectedEquipment, $meetingDate, $meetingTime, $user_id);

    // Execute the query
    if ($stmt->execute()) {
        // Booking inserted successfully
        echo "Booking inserted successfully!";
    } else {
        // Booking insertion failed
        echo "Failed to insert booking: " . $conn->error;
    }

    // Clear session data
    unset($_SESSION['selectedPackage']);
    unset($_SESSION['selectedEquipment']);
    unset($_SESSION['meetingDate']);
    unset($_SESSION['meetingTime']);
}

// Close database connection
$conn->close();

?>
