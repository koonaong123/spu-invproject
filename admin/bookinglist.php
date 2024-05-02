<?php
include("layout.php");
include("../config/config.php");

session_start();

$user_id = $_SESSION['user_id'];
$sql = "SELECT role FROM inv_customer WHERE id = :user_id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":user_id", $user_id);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// ถ้า role ไม่ใช่ admin ให้ redirect ไปยังหน้าที่เหมาะสม
if ($user['role'] !== 'Admin') {
    // ถ้าไม่ใช่ admin ให้ redirect ไปยังหน้าที่เหมาะสม
    header("Location: ../login.php");
    exit; // จบการทำงานของสคริปต์
}

$sql = "SELECT * FROM inv_booking";

$stmt = $conn->prepare($sql);

$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);




?>

<div class="container mt-3">
    <div class="d-flex align-items-center">
        <h1>แสดงข้อมูลการจอง</h1>
        <a href="index.php">
            <button type="button" class="btn btn-outline-danger btn-sm mx-3">กลับ</button>
        </a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">เลขการจอง</th>
                <th scope="col">แพ็คเกจ</th>
                <th scope="col">ชุดอุปกรณ์</th>
                <th scope="col">วันที่</th>
                <th scope="col">เวลา</th>
                <th scope="col">จำนวนผู้ถือหุ้น</th>
                <th scope="col">#</th>
            </tr>
        </thead>
        
        <tbody>
        
            <?php foreach ($result as $user) { ?>
                <tr>
                    <th scope="row"><?=$user['BookingID'];?></th>
                    <td><?=$user['package'];?></td>
                    <td><?=$user['equipment'];?></td>
                    <td><?=$user['meeting_date'];?></td>
                    <td><?=$user['meeting_time'];?></td>
                    <td><?=$user['meeting_location'];?></td>
                    <td><?=$user['userid'];?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php 
    if(!$result) {
        echo "<h3>ไม่มีข้อมูลผู้ใช้งาน</h3>";
    }
    ?>
    
</div>
