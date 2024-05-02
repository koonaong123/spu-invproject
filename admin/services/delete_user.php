<?php 

include("../../config/config.php");

$iduser = $_GET['iduser'];

$sql = "DELETE FROM `inv_customer` WHERE id = $iduser";

$stmt = $conn->prepare($sql);

if($stmt->execute()) {
    echo "ลบข้อมูลสำเร็จแล้ว";
    header("refresh: 2; url=http://localhost/crud/");  
} else {
    echo "ลบข้อมูลไม่สำเร็จ";
    header("refresh: 2; url=http://localhost/crud/");  
}

?>