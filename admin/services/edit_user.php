<?php 
include("../../config/config.php");

$iduser = $_GET['iduser'];
$companyName = $_POST['company_name'];
$customerTel = $_POST['c_tel'];
$role = $_POST['role'];

$sql = "UPDATE `inv_customer` SET `company_name`=:companyName, `c_tel`=:customerTel, `role`=:role WHERE id = :id";

$stmt = $conn->prepare($sql);

$stmt->bindParam(':companyName', $companyName, PDO::PARAM_STR);
$stmt->bindParam(':customerTel', $customerTel, PDO::PARAM_STR);
$stmt->bindParam(':role', $role, PDO::PARAM_STR);
$stmt->bindParam(':id', $iduser, PDO::PARAM_STR);

if($stmt->execute()) {
    echo "แก้ไขข้อมูลผู้ใช้งานสำเร็จแล้ว";
    header("refresh: 2; url=http://localhost/crud/");  
} else {
    echo "แก้ไขข้อมูลผู้ใช้งานไม่สำเร็จ";
    header("refresh: 2; url=http://localhost/crud/");  
}

?>