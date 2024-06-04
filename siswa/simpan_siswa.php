<?php
session_start();
include '../config/database.php';

$db = new db(); 
$db->koneksi(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nis = $_POST['nis'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin']; 
    $kelas = $_POST['kelas'];
    $spp = $_POST['spp'];

    for ($i = 0; $i < count($nis); $i++) {
        $query_cek_nis = "SELECT * FROM siswa WHERE nis = '$nis[$i]'";
        $result_cek_nis = $db->ambil_data($query_cek_nis);

       
        if (!empty($result_cek_nis)) {
            $_SESSION['peringatan'] = "NIS sudah terpakai";
            header("Location: tambah.php");
            exit(); 
        }

        $query = "INSERT INTO siswa (nis, nama_lengkap, alamat, jenis_kelamin, kelas_id, spp_id) 
                  VALUES ('$nis[$i]', '$nama_lengkap[$i]', '$alamat[$i]', '$jenis_kelamin[$i]', '$kelas[$i]', '$spp[$i]')";

        $result = $db->modifikasi($query);

        if ($result) {
            header("Location: index.php");
            echo "Data siswa dengan NIS $nis[$i] berhasil disimpan.<br>";
        } else {
            echo "Gagal menyimpan data siswa dengan NIS $nis[$i].<br>";
        }
    }
} else {
    echo "Tidak ada data yang disubmit.";
}
?>
