<?php

session_start();
require '../config/config.php';

$minLength = 8;

if (isset($_POST['registerbtn'])) {
    $companyName = trim($_POST['company_name']); // Trim to remove leading/trailing spaces
    $email = trim($_POST['email']);
    $customerName = trim($_POST['c_name']);
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmpassword'];
    $customerTel = trim($_POST['c_tel']); // Trim phone number


    $passwordPattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+\-=\[\]{};\'":\\\\|,.<>\/?]).{8,}$/';
    if (!preg_match($passwordPattern, $password)) {
        $_SESSION['error'] = "รหัสผ่านต้องประกอบด้วยตัวอักษรพิมพ์เล็กอย่างน้อยหนึ่งตัว, ตัวอักษรพิมพ์ใหญ่อย่างน้อยหนึ่งตัว, ตัวเลขอย่างน้อยหนึ่งตัว, อักขระพิเศษอย่างน้อยหนึ่งตัว และมีความยาวอย่างน้อย 8 ตัวอักษร";
        header("location: /inventech/register.php");
        exit();
    }

    // Validate inputs
    if (empty($companyName)) {
        $_SESSION['error'] = "Please enter your company name";
        header("location: /inventech/register.php");
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Please enter a valid email address";
        header("location: /inventech/register.php");
    } else if (strlen($password) < $minLength) {
        $_SESSION['error'] = "Password must be at least " . $minLength . " characters long";
        header("location: /inventech/register.php");
    } else if ($password !== $confirmPassword) {
        $_SESSION['error'] = "Your passwords do not match";
        header("location: /inventech/register.php");
    } else {
        try {
            // Prepared statements for checking existing company name and email
            $checkCompanyName = $conn->prepare("SELECT COUNT(*) FROM inv_customer WHERE company_name = ?");
            $checkEmail = $conn->prepare("SELECT COUNT(*) FROM inv_customer WHERE email = ?");

            $checkCompanyName->execute([$companyName]);
            $checkEmail->execute([$email]);

            $companyNameExists = $checkCompanyName->fetchColumn();
            $userEmailExists = $checkEmail->fetchColumn();

            if ($companyNameExists) {
                $_SESSION['error'] = "Company name already exists";
                header("location: /inventech/register.php");
            } else if ($userEmailExists) {
                $_SESSION['error'] = "Email already exists";
                header("location: /inventech/register.php");
            } else {
                // Hash password securely
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                // Prepared statement for registration (with parameter binding for security)
                $stmt = $conn->prepare("INSERT INTO inv_customer(company_name, email, c_name, password, c_tel, role) VALUES(?, ?, ?, ?, ?, ?)");
                $stmt->execute([$companyName, $email, $customerName, $hashedPassword, $customerTel, "Users"]);

                $_SESSION['success'] = "Registration Successful";
                header("location: /inventech/register.php");
                exit();
            }
        } catch (PDOException $e) {
            $_SESSION['error'] = "Something went wrong, please try again";
            echo "Registration failed: " . $e->getMessage();
            header("location: /inventech/register.php");
        }
    }
}

?>
