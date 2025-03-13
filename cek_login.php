<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "db_laundry2");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$username = $_POST['username'];
$password = md5($_POST['password']);
$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$row = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($row);
$cek = mysqli_num_rows($row);

if ($cek > 0) {
    $_SESSION['username'] = $data['username'];
    $_SESSION['user_id'] = $data['id_user'];
    $_SESSION['outlet_id'] = $data['outlet_id'];
    $_SESSION['login_success'] = true;

    if ($data['role'] == 'admin') {
        $_SESSION['role'] = 'admin';
        header('location:admin/index.php');
    } elseif ($data['role'] == 'kasir') {
        $_SESSION['role'] = 'kasir';
        header('location:kasir/index.php');
    } elseif ($data['role'] == 'owner') {
        $_SESSION['role'] = 'owner';
        header('location:owner/index.php');
    }
} else {
    $message = 'Username atau password salah!!!';
    header('location:login.php?message=' . urlencode($message));
}

mysqli_close($conn);
?>
