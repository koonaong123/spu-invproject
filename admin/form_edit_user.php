<?php
include("layout.php");
include("../config/config.php");
$iduser = $_GET['iduser'];

$sql = "SELECT * FROM inv_customer WHERE id = $iduser";
$stmt = $conn->prepare($sql);
$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);


?>

<div class="container mt-3">
    <div class="d-flex align-items-center">
        <h1>แก้ไขผู้ใช้งาน</h1>
        <a href="index.php">
            <button type="button" class="btn btn-outline-success btn-sm mx-3">กลับ</button>
        </a>
    </div>
    <form action="services/edit_user.php?iduser=<?=$result['id'];?>" method="post">
        <div class="mb-3">
            <label for="email" class="form-label">อีเมล</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com"  value="<?=$result['email'];?>" disabled>
        </div>

        <div class="mb-3">
            <label for="companyname" class="form-label">ชื่อบริษัท</label>
            <input type="text" class="form-control" name="company_name" id="company_name" placeholder="ABC Pub Co., Ltd" value="<?=$result['company_name'];?>">
        </div>

        <div class="mb-3">
            <label for="c_tel" class="form-label">เบอร์โทร</label>
            <input type="tel" class="form-control" name="c_tel" id="c_tel" placeholder="0123456789" value="<?=$result['c_tel'];?>">
        </div>

        <input type="hidden" class="form-control" name="email" value="<?=$result['email'];?>">
        <input type="hidden" class="form-control" name="role" value="Users">

        <button type="submit" class="btn btn-primary form-control">ยืนยัน</button>
    </form>
</div>