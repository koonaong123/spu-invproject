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
    header("Location: ../login.php");
    exit; // จบการทำงานของสคริปต์
}

$sql = "SELECT * FROM inv_customer";

$stmt = $conn->prepare($sql);

$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="container mt-3">
    <div class="d-flex align-items-center">
        <h1>แสดงข้อมูลผู้ใช้งาน</h1>
        <a href="form_add_user.php">
            <button type="button" class="btn btn-outline-success btn-sm mx-3">เพิ่ม</button>
        </a>
        <a href="bookinglist.php">
        <button type="button" class="btn btn-outline-success btn-sm mx-3">ไปข้อมูลการจอง</button>
        </a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">อีเมล</th>
                <th scope="col">ชื่อบริษัท</th>
                <th scope="col">ชื่อผู้ติดต่อ</th>
                <th scope="col">เบอร์โทร</th>
                <th scope="col">สถานะ</th>
                <th scope="col">เครื่องมือ</th>
            </tr>
        </thead>
        
        <tbody>
        
            <?php foreach ($result as $user) { ?>
                <tr>
                
                    <th scope="row"><?=$user['id'];?></th>
                    <td><?=$user['email'];?></td>
                    <td><?=$user['company_name'];?></td>
                    <td><?=$user['c_name'];?></td>
                    <td><?=$user['c_tel'];?></td>
                    <td><?=$user['role'];?></td>
                    <td>
                        <a href="form_edit_user.php?iduser=<?=$user['id'];?>"><button class="btn btn-primary">แก้ไข</button></a>
                        <a href="form_chang_password.php?iduser=<?=$user['id'];?>"><button class="btn btn-success">เปลี่ยนรหัสผ่าน</button></a>
                        <a href="services/delete_user.php?iduser=<?=$user['id'];?>"><button class="btn btn-danger">ลบ</button></a>
                    </td>
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
