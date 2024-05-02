<?php 

include("../../config/config.php");

$companyName = trim($_POST['company_name']);
$email = trim($_POST['email']);
$customerName = trim($_POST['c_name']);
$password = $_POST['password'];
$customerTel = trim($_POST['c_tel']);

$sql = "INSERT INTO `inv_customer`(`company_name`, `email`, `c_name`, `password`, `c_tel`, `role`) VALUES (:companyName, :email, :customerName, :password, :customerTel, 'Users')";

$stmt = $conn->prepare($sql);

$hashPassword = password_hash($password, PASSWORD_DEFAULT); //เข้ารหัส


$stmt->bindParam(':companyName', $companyName, PDO::PARAM_STR);
$stmt->bindParam(':email', $email, PDO::PARAM_STR);
$stmt->bindParam(':customerName', $customerName, PDO::PARAM_STR);
$stmt->bindParam(':password', $hashPassword, PDO::PARAM_STR);
$stmt->bindParam(':customerTel', $customerTel, PDO::PARAM_STR);

if($stmt->execute()) {
    // true
    echo "เพิ่มข้อมูลสำเร็จแล้ว";
    header("refresh: 2; url=http://45.141.26.186/inventech/admin/");  
} else {
    // false
    echo "เพิ่มข้อมูลไม่สำเร็จ";
    header("refresh: 2; url=http://45.141.26.186/inventech/admin/");  
}

?>