 <?php
session_start();
include('../config/dbcon.php');

// Registration 
if (isset($_POST['reg_btn'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check_email_query = "SELECT * FROM agency WHERE email='$email'";
    $check_email_run = mysqli_query($con, $check_email_query);

    if (mysqli_num_rows($check_email_run) > 0) {
        $_SESSION['status'] = "Email ID already exists. Please use a different email.";
        header("Location: registeragency.php");
        exit();
    } else {
        $user_query = "INSERT INTO agency (name, email, password) VALUES ('$name', '$email', '$password')";
        $user_query_run = mysqli_query($con, $user_query);

        if ($user_query_run) {
            $_SESSION['status'] = "Registration Successful";
            header("Location: ../agency/dashboard.php");
        } else {
            $_SESSION['status'] = "Registration failed";
            header("Location: registeragency.php");
        }
        exit();
    }
}

// Login 
if (isset($_POST['login_btn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $log_query = "SELECT * FROM agency WHERE email='$email' AND password='$password'";
    $log_query_run = mysqli_query($con, $log_query);

    if (mysqli_num_rows($log_query_run) > 0) {
        foreach ($log_query_run as $row) {
            $user_id = $row['id'];
            $user_name = $row['name'];
            $user_email = $row['email'];
        }
        $_SESSION['auth'] = true;
        $_SESSION['auth_user'] = [
            'user_id' => $user_id,
            'user_name' => $user_name,
            'user_email' => $user_email
        ];
        $_SESSION['status'] = "Logged In Successfully";
        header('Location: ../agency/dashboard.php');
    } else {
        $_SESSION['status'] = "Invalid Email or Password";
        header('Location: loginagency.php');
    }
    exit();
}

$_SESSION['status'] = "Access Denied";
header('Location: login.php');
exit();
?>
