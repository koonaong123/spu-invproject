<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <!-- include nav -->
    <?php include('nav.php'); ?>
    <!-- end -->
    <div class="loginform">
        <form action="login.php" method="post" class="login-form">
            <h2>เข้าสู่ระบบ</h2>
            <p>ลงชื่อเข้าใช้บัญชีของคุณ</p>
            <div class="input-group">
                <label for="username">อีเมล :</label>
                <input type="email" id="email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
            </div>
            <div class="input-group">
                <label for="password">รหัสผ่าน :</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="loginbtn">Login</button>
        </form>
    </div>

    <footer>
        <p>&copy; 2024 Inventech AGM Booking. All rights reserved.</p>
    </footer>
</body>
</html>
