<?php

session_start();
require '../config/config.php';

// Define step variable based on URL parameter
$step = isset($_GET['step']) ? $_GET['step'] : 1;

// Handle step 1
if ($step == 1) {
    // Retrieve selected package from session
    $selectedPackage = isset($_SESSION['selectedPackage']) ? $_SESSION['selectedPackage'] : null;

    // Store selected package in session
    $_SESSION['selectedPackage'] = $selectedPackage;

    // Redirect to step 2
    header("Location: ../booking.php?step=2");
}

// Handle step 2
if ($step == 2) {
    // Retrieve selected equipment from session
    $selectedEquipment = isset($_SESSION['selectedEquipment']) ? $_SESSION['selectedEquipment'] : null;

    // Store selected equipment in session
    $_SESSION['selectedEquipment'] = $selectedEquipment;

    // Redirect to step 3
    header("Location: ../booking.php?step=3");
}

// Handle step 3
if ($step == 3) {
    // Retrieve meeting date, time, and location from POST data
    $meetingDate = isset($_POST['meetingDate']) ? $_POST['meetingDate'] : null;
    $meetingTime = isset($_POST['meetingTime']) ? $_POST['meetingTime'] : null;
    $meetingLocation = isset($_POST['meetingLocation']) ? $_POST['meetingLocation'] : null;

    // Store meeting date, time, and location in session
    $_SESSION['meetingDate'] = $meetingDate;
    $_SESSION['meetingTime'] = $meetingTime;
    $_SESSION['meetingLocation'] = $meetingLocation;

    // Redirect to step 4
    header("Location: ../booking.php?step=4");
}

// Handle step 4 (booking confirmation and insertion)
if ($step == 4) {
    // Check if the form has been submitted
    if (isset($_POST['confirm_booking'])) {
        // Retrieve all selected data from session
        $selectedPackage = isset($_SESSION['selectedPackage']) ? $_SESSION['selectedPackage'] : null;
        $selectedEquipment = isset($_SESSION['selectedEquipment']) ? $_SESSION['selectedEquipment'] : null;
        $meetingDate = isset($_SESSION['meetingDate']) ? $_SESSION['meetingDate'] : null;
        $meetingTime = isset($_SESSION['meetingTime']) ? $_SESSION['meetingTime'] : null;
        $meetingLocation = isset($_SESSION['meetingLocation']) ? $_SESSION['meetingLocation'] : null;
        $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

        // Check if all required data is available
        if ($selectedPackage && $selectedEquipment && $meetingDate && $meetingTime && $meetingLocation && $user_id) {
            try {
                // Prepare SQL query to insert booking data into inv_booking table
                $sql = "INSERT INTO inv_booking (package, equipment, meeting_date, meeting_time, meeting_location, userid) VALUES (?, ?, ?, ?, ?, ?)";

                // Prepare statement
                $stmt = $conn->prepare($sql);

                // Bind parameters
                $stmt->bind_param("sssssi", $selectedPackage, $selectedEquipment, $meetingDate, $meetingTime, $meetingLocation, $user_id);

                // Execute the query
                if ($stmt->execute()) {
                    echo "Booking inserted successfully!";
                } else {
                    echo "Failed to insert booking: " . $conn->error;
                }

                // Clear session data
                unset($_SESSION['selectedPackage']);
                unset($_SESSION['selectedEquipment']);
                unset($_SESSION['meetingDate']);
                unset($_SESSION['meetingTime']);
                unset($_SESSION['meetingLocation']);
            } catch (Exception $e) {
                // Handle any exceptions that occur during execution
                echo "Failed to insert booking: " . $e->getMessage();
            }
        } else {
            // Some required data is missing
            echo "Failed to insert booking: Required data is missing.";
            echo "<pre>";
            echo $selectedPackage;
            echo $selectedEquipment;
            echo $meetingDate;
            echo $meetingTime;
            echo $meetingLocation;
            echo $user_id;
            echo "</pre>";
        }
    }
}

?>
