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

        .confirm_booking {
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
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Retrieve selected data from sessionStorage
    const selectedPackage = sessionStorage.getItem('selectedPackage');
    const selectedEquipment = sessionStorage.getItem('selectedEquipment');
    const meetingDate = sessionStorage.getItem('meetingDate');
    const meetingTime = sessionStorage.getItem('meetingTime');
});
</script>
<form method="post" action="/inventech/process/step_process.php?step=4">
    <div class="wrapper">
        <div class="confirmation-container">
            <h1 class="confirmation-message">ยืนยันการจองประชุม</h1>
<?php
    // ถ้ามีข้อมูล แสดงข้อมูลการจอง
    $selectedPackage = $_SESSION['selectedPackage'];
    $selectedEquipment = $_SESSION['selectedEquipment'];
    $meetingDate = $_SESSION['meetingDate'];
    $meetingTime = $_SESSION['meetingTime'];

    echo '<table class="selected-info-table">';
    echo '<tr><th>ข้อมูล</th><th>รายละเอียด</th></tr>';
    echo '<tr><td>แพ็คเกจ</td><td>' . $selectedPackage . '</td></tr>';
    echo '<tr><td>อุปกรณ์</td><td>' . $selectedEquipment . '</td></tr>';
    echo '<tr><td>วันที่</td><td>' . $meetingDate . '</td></tr>';
    echo '<tr><td>เวลา</td><td>' . $meetingTime . '</td></tr>';
    echo '</table>';
?>
            <button type="submit" name="confirm_booking" id="confirm_booking" class="confirm_booking">ยืนยันการจอง</button>
            </form>
            <p><br>**หมายเหตุ:** เมื่อยืนยันการจองเสร็จสิ้น จะมีการติดต่อกลับจากทางเราโดยเร็วที่สุด</p>
        </div>
    </div>
</body>
</html>
