<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
    <style>
        /* Wrapper styles */
        .wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        /* Confirmation container styles */
        .confirmation-container {
            max-width: 600px;
            width: 90%;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Confirmation message styles */
        .confirmation-message {
            font-size: 20px;
            font-weight: bold;
            color: #333;
        }

        /* Selected information table styles */
        .selected-info-table {
            margin-top: 20px;
            width: 100%;
            border-collapse: collapse;
        }

        .selected-info-table th,
        .selected-info-table td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }

        .selected-info-table th {
            background-color: #f2f2f2;
        }

        .confirm-booking-btn {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .confirm-booking-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="confirmation-container">
            <h1 class="confirmation-message">ยืนยันการจองประชุม</h1>

            <?php
            // Retrieve selected data from session
            $packageName = isset($_SESSION['selectedPackage']) ? $_SESSION['selectedPackage'] : null;
            $equipment = isset($_SESSION['selectedEquipment']) ? $_SESSION['selectedEquipment'] : null;
            $meetingDate = isset($_SESSION['meetingDate']) ? $_SESSION['meetingDate'] : null;
            $meetingTime = isset($_SESSION['meetingTime']) ? $_SESSION['meetingTime'] : null;

            // Display selected information in a table
            echo '<table class="selected-info-table">';
            echo '<tr><th>ข้อมูล</th><th>รายละเอียด</th></tr>';
            echo '<tr><td>แพ็คเกจ</td><td>' . $packageName . '</td></tr>';
            echo '<tr><td>อุปกรณ์</td><td>' . $equipment . '</td></tr>';
            echo '<tr><td>วันที่</td><td>' . $meetingDate . '</td></tr>';
            echo '<tr><td>เวลา</td><td>' . $meetingTime . '</td></tr>';
            echo '</table>';
            ?>
            <form method="post" action="booking.php?step=4">
            <button type="submit" name="confirm_booking" class="confirm-booking-btn">ยืนยันการจอง</button>
            </form>
            <p><br>**หมายเหตุ:** เมื่อยืนยันการจองเสร็จสิ้น จะมีการติดต่อกลับจากทางเราโดยเร็วที่สุด</p>
        </div>
    </div>
</body>
</html>
