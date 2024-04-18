<?php

    session_start();
    require '../config/config.php';

    if (isset($_POST['loginbtn'])) {
        $email = trim($_POST['email']);
        $password = $_POST['password'];
    }

    if (empty($email)) {
        $_SESSION['error'] = "Please enter your email";
        header("location: /inventech/login.php");
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Please enter a valid email address";
        header("location: /inventech/login.php");
    } else if (empty($password)) {
        $_SESSION['error'] = "Please enter your password";
        header("location: /inventech/login.php");
    } else {
        try {

            $stmt = $conn->prepare("SELECT * FROM inv_customer WHERE email = ?");
            $stmt->execute([$email]);
            $userData = $stmt->fetch();

            if ($userData && password_verify($password, $userData['password'])) {
                $_SESSION['user_id'] = $userData['id'];
                header("Location: /inventech/dashboard.php");
            } else {
                $_SESSION['error'] = "Invalid email or password";
                header("location: /inventech/login.php");
            }

        } catch (PDOException $e) {
            $_SESSION['error'] = "Something went wrong, please try again";
            header("location: /inventech/login.php");
    }
}

?>