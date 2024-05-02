<?php
include("layout.php");
?>

<div class="container mt-3">
    <div class="d-flex align-items-center">
        <h1>เพิ่มผู้ใช้งาน</h1>
        <a href="index.php">
            <button type="button" class="btn btn-outline-success btn-sm mx-3">กลับ</button>
        </a>
    </div>
    <form action="./services/add_user.php" method="post">
        <div class="mb-3">
            <label for="companyname" class="form-label">ชื่อบริษัท</label>
            <input type="text" class="form-control" name="company_name" id="company_name" placeholder="ABC Pub Co., Ltd">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">อีเมล</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
        </div>

        <div class="mb-3">
            <label for="c_name" class="form-label">ชื่อผู้ติดต่อ</label>
            <input type="text" class="form-control" name="c_name" id="c_name" placeholder="ตัวอย่าง สมชาย">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">รหัสผ่าน</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="12333444">
        </div>

        <div class="mb-3">
            <label for="c_tel" class="form-label">เบอร์โทร</label>
            <input type="tel" class="form-control" name="c_tel" id="c_tel" placeholder="012345678">
        </div>

        <input type="hidden" class="form-control" name="role" value="Users">

        <button type="submit" class="btn btn-primary form-control">ยืนยัน</button>
    </form>
</div>