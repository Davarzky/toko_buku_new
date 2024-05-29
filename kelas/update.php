<?php
session_start();
ob_start(); 

include '../config/database.php';
include '../layout/header.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $database = new db();
    $database->koneksi();

    $query = "SELECT * FROM kelas WHERE id = $id";
    $data = $database->ambil_data($query);

    if ($data) {
        $spp = $data[0];
    } else {
        $_SESSION['message'] = "Data kelas tidak ditemukan.";
        header("Location: index.php");
        exit();
    }
} else {
    $_SESSION['message'] = "Parameter id tidak ditemukan.";
    header("Location: index.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kode_kelas = $_POST['kode_kelas'];
    $tingkat = $_POST['tingkat'];
    $jurusan_id = $_POST['jurusan_id'];

    $query = "UPDATE kelas SET kode_kelas = '$kode_kelas', tingkat = '$tingkat' , jurusan_id = '$jurusan_id' WHERE id = $id";
    $result = $database->modifikasi($query);

    if ($result) {
        $_SESSION['message'] = "Data berhasil diupdate.";
        header("Location: index.php");
        exit();
    } else {
        echo "Gagal mengupdate data kelas.";
    }
}
?>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">NiceAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->
        <!-- Notifications and Messages can be included here if needed -->
        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="../page/auth/login.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>
          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->
      </ul>
    </nav><!-- End Icons Navigation -->
  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
   
    <li class="nav-item">
        <a class="nav-link collapsed" href="">
        <i class="bi bi-book"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php">
        <i class="bi bi-file-earmark-spreadsheet"></i>
          <span>SPP</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php">
        <i class="bi bi-bookshelf"></i>
          <span>Jurusan</span>
        </a>
      </li><!-- End Dashboard Nav -->
    </ul>
  </aside><!-- End Sidebar-->

  <main id="main" class="main">
    <section class="section">
      <form method="POST" action="">
        <div class="form-group">
          <label for="kode_kelas"></label>
          <input type="text" class="form-control" id="kode_kelas" name="kode_kelas" value="<?= htmlspecialchars($spp['kode_kelas']) ?>" required>
        </div>
        <div class="form-group">
          <label for="tingkat">tingkat</label>
          <input type="text" class="form-control" id="tingkat" name="tingkat" value="<?= htmlspecialchars($spp['tingkat']) ?>" required>
        </div>
        <div class="form-group">
          <label for="jurusan_id">Jurusan ID</label>
          <input type="text" class="form-control" id="jurusan_id" name="jurusan_id" value="<?= htmlspecialchars($spp['jurusan_id']) ?>" required>
        </div>
        <a href="index.php" class="btn btn-danger">Cancel</a>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </section>
  </main>

  <?php
  include '../layout/footer.php';
  ob_end_flush(); 
  ?>
</body>
</html>
