<?php
session_start();
include '../config/database.php';

$db = new db(); 
$db->koneksi(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['nis'], $_POST['nama_lengkap'], $_POST['alamat'], $_POST['tanggal_lahir'], $_POST['jenis_kelamin'], $_POST['kelas'], $_POST['spp'])) {
        $nis = $_POST['nis']; 

        $nama_lengkap = $_POST['nama_lengkap'];
        $alamat = $_POST['alamat'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $kelas = $_POST['kelas'];
        $spp = $_POST['spp'];

        $query = "UPDATE siswa 
                  SET nama_lengkap = '$nama_lengkap', alamat = '$alamat', tanggal_lahir = '$tanggal_lahir', jenis_kelamin = '$jenis_kelamin', kelas_id = '$kelas', spp_id = '$spp' 
                  WHERE nis = '$nis'";

        $result = $db->modifikasi($query);

        if ($result) {
            $_SESSION['success'] = "Data siswa berhasil diperbarui.";
        } else {
            $_SESSION['error'] = "Gagal memperbarui data siswa.";
        }

        header("Location: index.php");
        exit(); 
    } else {
        $_SESSION['error'] = "Tidak ada data yang disubmit.";
        header("Location: edit.php?nis=$nis"); 
        exit(); 
    }
}
?>
