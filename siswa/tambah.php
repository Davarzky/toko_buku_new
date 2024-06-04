<?php
session_start();
include '../config/database.php';
include '../layout/header.php';

$db = new db(); 
$db->koneksi(); 

$query_kelas = "SELECT * FROM kelas";
$kelas_data = $db->ambil_data($query_kelas);

$query_spp = "SELECT * FROM spp";
$spp_data = $db->ambil_data($query_spp);

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
        <a class="nav-link collapsed" href="/spp/index.php">
        <i class="bi bi-file-earmark-spreadsheet"></i>
          <span>SPP</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/jurusan/index.php">
        <i class="bi bi-bookshelf"></i>
          <span>Jurusan</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php">
        <i class="bi bi-building"></i>
          <span>Kelas</span>
        </a>
      </li><!-- End Dashboard Nav -->
    </ul>
  </aside><!-- End Sidebar-->


    <main class="main" id="main">
    <section class="section">
        <div class="container mt-5">
            <form action="simpan_siswa.php" method="post">
            <div class="row mb-3">
                <?php if (!empty($_SESSION['peringatan'])): ?>
                <div class="alert alert-warning" role="alert">
                    <?= $_SESSION['peringatan'] ?>
                </div>
                <?php unset($_SESSION['peringatan']); // Hapus pesan peringatan setelah ditampilkan ?>
                <?php endif; ?>
                </div>

                <table class="table table-bordered" id="table-pembelian">
                    <thead class="table-dark">
                        <tr>
                            <th>NIS</th>
                            <th>Nama Lengkap</th>
                            <th>Tanggal_Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Kelas</th>
                            <th>SPP</th>

                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="tbody-pembelian">
                        <tr>
                            <td><input type="text" class="form-control nis" name="nis[]" style="width: 100%;"></td>
                            <td><input type="text" class="form-control nama_lengkap" name="nama_lengkap[]" style="width: 100%;"></td>
                            <td><input type="date" class="form-control tanggal_lahir" name="tanggal_lahir[]" style="width: 100%;"></td>
                            <td><select name="jenis_kelamin"  class="form-control jenis_kelamin" id="jenis_kelamin" style="width: 100%;">
                                <option value="L">L</option>
                                <option value="P">P</option>
                            </select></td>
                            <td><input type="text" class="form-control alamat" name="alamat[]" style="width: 100%;"></td>
                            
                            <td>
                                <select class="form-control kelas" name="kelas[]" style="width: 100%;">
                                    <?php foreach ($kelas_data as $kelas): ?>
                                        <option value="<?= $kelas['id'] ?>"><?= $kelas['kode_kelas'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td>
                            <select class="form-control spp" name="spp" style="width: 100%;">
                                        <?php
                                        $tahun_sekarang = date('Y');

                                        for ($i = 0; $i < 3; $i++) {
                                            $tahun = $tahun_sekarang - $i;
                                            foreach ($spp_data as $spp) :
                                                if ($spp['tahun'] == $tahun) {
                                        ?>
                                                    <option value="<?= $spp['id'] ?>" <?= ($spp['id'] == $spp['id']) ? 'selected' : '' ?>>
                                                        <?= $spp['tahun'] ?>-<?= $spp['nominal'] ?>
                                                    </option>
                                        <?php
                                                }
                                            endforeach;
                                        }
                                        ?>
                                    </select>
                            </td>
                            <td><button type="button" class="btn btn-danger remove">Hapus</button></td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-success mt-3">Simpan Data Siswa</button>
            </form>
        </div>
    </section>
</main>

<?php include '../layout/footer.php'; ?>

<script>
    $(document).ready(function() {
        $(document).on('click', '.remove', function() {
            $(this).closest('tr').remove();
        });

        $(document).on('click', '.add', function() {
            var newRow = `<tr>
                <td><input type="text" class="form-control nis" name="nis[]" style="width: 100%;"></td>
                <td><input type="text" class="form-control nama_lengkap" name="nama_lengkap[]" style="width: 100%;"></td>
                <td><input type="text" class="form-control alamat" name="alamat[]" style="width: 100%;"></td>
                <td>
                    <select class="form-control kelas" name="kelas[]" style="width: 100%;">
                        <?php foreach ($kelas_data as $kelas): ?>
                            <option value="<?= $kelas['kode_kelas'] ?>"><?= $kelas['nama_kelas'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </td>
                <td>
                    <select class="form-control spp" name="spp[]" style="width: 100%;">
                        <?php foreach ($spp_data as $spp): ?>
                            <option value="<?= $spp['nominal'] ?>"><?= $spp['nominal'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </td>
                <td><button type="button" class="btn btn-danger remove">Hapus</button></td>
            </tr>`;
            $('#tbody-pembelian').append(newRow);
        });
    });
</script>
    </section>
</main>
<?php
include '../layout/footer.php';
?>
</body>