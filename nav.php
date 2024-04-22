<?php
include("config/config.php");

if (isset($_SESSION['user_id'])) {
  $user_id = $_SESSION['user_id'];

  try {
    $stmt = $conn->prepare("SELECT * FROM inv_customer WHERE id = ?");
    $stmt->bindParam(1, $user_id);
    $stmt->execute();
    $userData = $stmt->fetch();
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
}

?>

<header>
  <nav class="navbar">
    <div class="logo">
      <img src="img/logo.svg" alt="Logo">
    </div>
    <ul class="nav-links">
      <li><a href="/inventech/index.php">หน้าแรก</a></li>
      <li><a href="/inventech/booking.php">การจอง</a></li>
      <li><a href="/inventech/contact.php">ติดต่อเรา</a></li>
    </ul>
    <div class="auth-buttons">
      <?php if (!isset($_SESSION['user_id'])) { ?>
        <a href="/inventech/login.php" class="login">เข้าสู่ระบบ</a>
        <a href="/inventech/register.php" class="register">สมัครสมาชิก</a>
      <?php } else { ?>
        <span class="user-name"><?php echo isset($userData['email']) ? $userData['email'] : ''; ?></span>
        <a href="/inventech/logout.php" class="logout">ออกจากระบบ</a>
      <?php } ?>
    </div>
  </nav>
</header>
