<?php

session_start();

include '../config/database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $database = new db();
    $database->koneksi();

    
    $query = "DELETE FROM kelas WHERE id = $id";
    $result = $database->modifikasi($query);
    
    if ($result) {
        
        $_SESSION['message'] = "Data berhasil dihapus.";
        
        header("Location: index.php");
        exit(); 
    } else {
        echo "Gagal menghapus kelas dengan id $id.";
    }
} else {
    echo "Parameter id tidak ditemukan.";
}
?>
