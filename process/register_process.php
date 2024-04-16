<?php

    session_start();
    require '../config/config.php';
    
    $minLegth = 6;

    if (isset($_POST['registerbtn'])) {
        $companyname = $_POST['company_name'];
        $email = $_POST['email'];
        $customername = $_POST['c_name'];
        $passowrd = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];
        $customertel = $_POST['c_tel'];
    }

    if (empty($companyname)) {
    $_SESSION['error'] = "Please enter your company name";
    header("location: /inventech/register.php");
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['error'] = "please enter a valid email address";
    header("location: /inventech/register.php");
    } else if (strlen($password) < $minLength) {
    $_SESSION['error'] = "Please enter a valid password";
    header("location: /inventech/register.php");
    } else if ($password !== $confirmPassword) {
    $_SESSION['error'] = "Your password do not match";
    header("location:  /inventech/register.php");
    } else if (empty($companyname)) {
    $_SESSION['error'] = "Please enter your company name";
    header("location: /inventech/register.php");
    } else {
        
        $checkCompanyname = $conn->prepare("SELECT COUNT(*) FROM inv_customer WHERE company_name = ?");
        $checkCompanyname->execute([$companyname]);
        $companynameExitsts = $checkCompanyname->fetchColumn();

        $checkEmail = $conn->prepare("SELECT COUNT(*) FROM inv_customer WHERE email = ?");
        $checkEmail->execute([$email]);
        $userEmailExitsts = $checkEmail->fetchColumn();
    
        if($companynameExitsts) {
            $_SESSION['error'] = "Company name already exists";
            header("location: /inventech/register.php");
        } else if ($userEmailExitsts) {
            $_SESSION['error'] = "Email already exists";
            header("location: /inventech/register.php");
        } else {

            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            try {
                
                $stmt= $conn->prepare("INSERT INTO inv_customer(company_name, email, c_name, password, c_tel) VALUES(?, ?, ?, ?, ?");
                $stmt->execute([$companyname, $email, $customername, $hashedPassword, $customertel]);

                $_SESSION['success'] = "Registration Successfully";
                header("location: /inventech/register.php");


            } catch (PDOExeption $e) {
                $_SESSION['error'] = "Something went wrong, please try again";
                echo "Registration failed: " . $e->getMessage();
                header("location: /inventech/register.php");
        }
    }
}

    
?>