<?php
session_start();
$_SESSION['logged_in'] = true;
$_SESSION['id'] = $user_id; // Atau set sesuai dengan id pengguna yang sudah login

include '../config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['change_password'])) {
    if (!isset($_SESSION['id'])) {
        $_SESSION['error'] = 'Anda harus login terlebih dahulu.';
        header('Location: change_login.php');
        exit();
    }

    $old_password = $_POST['password_lama'];
    $new_password = $_POST['password_baru'];
    $confirm_password = $_POST['konfir_password'];
    $user_id = $_SESSION['id'];

    $db = new db();
    $db->koneksi();
    $conn = $db->$connection;

    $query = "SELECT password FROM admin WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $user_id);
    $stmt->execute();
    $stmt->bind_result($current_password);
    $stmt->fetch();
    $stmt->close();

    if ($old_password !== $current_password) {
        $_SESSION['error'] = 'Password Lama Tidak Sesuai';
        header('Location: change_login.php');
        exit();
    }

    if ($new_password !== $confirm_password) {
        $_SESSION['error'] = 'Password Baru dan Konfirmasi Tidak Sesuai';
        header('Location: change_login.php');
        exit();
    }

    $update_query = "UPDATE admin SET password = ? WHERE id = ?";
    $update_stmt = $conn->prepare($update_query);
    $update_stmt->bind_param('si', $new_password, $user_id);
    if ($update_stmt->execute()) {
        $_SESSION['success'] = 'Password Berhasil Di Ubah.';
        header('Location: ../index.php');
    } else {
        $_SESSION['error'] = 'Password Gagal di Ubah.';
        header('Location: change_login.php');
    }
    $update_stmt->close();
    $conn->close();
}
?>
