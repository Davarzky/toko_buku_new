<?php
session_start();
include '../layout/header.php';

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

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Dava Rizky</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Dava Rizky</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="form/change_login.php">
                <i class="bi bi-person"></i>
                <span>Rubah Password</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

          
            <li>
              <hr class="dropdown-divider">
            </li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="form/login.php">
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
      </li>
      
      
      <!-- End Dashboard Nav -->

    
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">


  <section class="section">
      <div class="container">
        <a href="tambah.php" class="btn btn-primary">Tambah Data Kelas</a>
        <div class="row">
          <div class="col">
            <?php
            if (isset($_SESSION['message'])) {
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        {$_SESSION['message']}
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
                unset($_SESSION['message']);
            }
            ?>
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Kelas</th>
                    <th scope="col">Tingkat</th>
                    <th scope="col">Jurusan ID</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody id="tableBody">
                  <?php
                  include '../config/database.php';

                  $database = new db();
                  $database->koneksi();

                  $cari = isset($_GET['cari']) ? $_GET['cari'] : '';
                  $offset = isset($_GET['offset']) ? (int)$_GET['offset'] : 0;
                  $limit = 5;
                  $maju = $offset + $limit;
                  $mundur = $offset - $limit;

                  $countQuery = "SELECT COUNT(*) AS total FROM kelas WHERE kode_kelas LIKE '%$cari%' OR tingkat LIKE '%$cari%' OR jurusan_id LIKE '%$cari%'";
                  $totalData = $database->ambil_data($countQuery);
                  $totalData = $totalData[0]['total'];

                  $nextDisabled = ($totalData <= $maju) ? 'disabled' : '';

                  $query = "SELECT * FROM kelas WHERE kode_kelas LIKE '%$cari%' OR tingkat LIKE '%$cari%' OR jurusan_id LIKE '%$cari%' LIMIT $limit OFFSET $offset";
                  $data = $database->ambil_data($query);

                  $no = $offset + 1;

                  foreach ($data as $row) :
                  ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= htmlspecialchars($row['kode_kelas']) ?></td>
                    <td><?= htmlspecialchars($row['tingkat']) ?></td>
                    <td><?= htmlspecialchars($row['jurusan_id']) ?></td>
                    <td>
                      <a href='update.php?id=<?= $row["id"] ?>' class='btn btn-success'>Edit</a>
                      <a href='hapus.php?id=<?= $row["id"] ?>' class='btn btn-danger'>Delete</a>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>

              <?php
              $total_pages = ceil($totalData / $limit);
              $current_page = ($offset / $limit) + 1;
              $previous_page = $current_page - 1;
              $next_page = $current_page + 1;
              ?>

              <nav aria-label="Page navigation">
                <ul class="pagination">
                  <li class="page-item <?= $current_page <= 1 ? 'disabled' : '' ?>">
                    <a class="page-link" href="?cari=<?= $cari ?>&offset=<?= $mundur ?>">Previous</a>
                  </li>
                  <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
                  <li class="page-item <?= $current_page == $i ? 'active' : '' ?>">
                    <a class="page-link" href="?cari=<?= $cari ?>&offset=<?= ($i - 1) * $limit ?>"><?= $i ?></a>
                  </li>
                  <?php endfor; ?>
                  <li class="page-item <?= $current_page >= $total_pages ? 'disabled' : '' ?>">
                    <a class="page-link" href="?cari=<?= $cari ?>&offset=<?= $maju ?>">Next</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>


  </main><!-- End #main -->

<?php
include '../layout/footer.php';
?>