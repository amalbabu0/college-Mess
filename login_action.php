<?php
include 'connection.php';
session_start();

$name = $_POST["username"];
$pass = $_POST["password"];
$str = "SELECT * FROM login WHERE username='$name' AND password='$pass'";
$result = mysqli_query($con, $str);

if ($result) {
    $data = mysqli_fetch_array($result);

    if ($data) {
        $_SESSION["loginid"] = $data['loginid'];
        $_SESSION["username"] = $data['username'];
        $_SESSION["user_type"] = $data['user_type'];

        if ($data['user_type'] == "Admin") {
            header("Location: admin/index.php");
        } else if ($data['user_type'] == "tutor"&&$data['login_status'] == "approved") {
            header("Location: staff/index.php");
        } else if ($data['user_type'] == "Student"&&$data['login_status'] == "approved") {
            header("Location: student/index.php");
        } else {
            echo "<script>alert('Not approved❌');window.location='login.php'</script>";
        }
    } else {
        echo "<script>alert('Invalid username or password');window.location='login.php'</script>";
    }
} else {
    echo "<script>alert('Database query failed❌');window.location='login.php'</script>";
}
?>
