
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  {{ URL::asset('css/style.css'); }}
  <title>SukLib</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/Photo/suklib.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style2.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center"> <!-- kalau udah selesai ini ganti href ke index.php-->
        <img src="assets/Photo/suklib.png" alt="">
        <span class="d-none d-lg-block">SukLib</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <!-- FITUR SEARCH -->
    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="searching.php">
        <input type="text" name="query" placeholder="Cari" title="Enter search keyword">
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
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
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

      <li class="nav-item" style="padding-top: 10px">
        <a class="nav-link collapsed" href="index.php">
          <i class="bi bi-house-door"></i>
          <span>Home</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="search.php">
          <i class="bi bi-search"></i>
          <span>Cari</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="riwayat.php">
          <i class="bi bi-journals"></i>
          <span>Riwayat</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link " href="sumbangan_buku.php">
          <i class="bi bi-box2-heart"></i>
          <span>Sumbang Buku</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-graph-up-arrow"></i>
          <span>Literasi</span>
        </a>
      </li><!-- End Register Page Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li>End Profile Page Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.php">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li>End Login Page Nav

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.php">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li>End Register Page Nav -->

      <li class="nav-item" style="padding-top: 9cm">
        <a class="nav-link collapsed" href="#" style="font-size: 12px; color: #808080;">
          <span>Tentang Kami</span>
        </a>
      </li><!-- Tentang Kami Page Nav -->




    </ul>

    </aside>


       <!-- End Sidebar-->

       <main id="main" class="main">

       <div class="pagetitle">
      <h1>Sumbangan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Sumbangan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <!-- Left side columns -->
        <div class="row align-items-start">
          <div class="col detail-buku">
            <!-- Sales Card -->
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Isi Detail Buku</h5>
                  <div class="d-flex align-items-center">
                  <div class="detailbuku">
                    <form action="sumbangan_buku(Submit).php" method="post">
                      <div class="row mb-3 formbuku">
                        <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="Nama Buku" name="buku">
                                <input type="text" class="form-control" placeholder="Nama Pengarang" name="pengarang">
                                <textarea class="form-control" style="height: 100px" placeholder="Tambah Detail Buku (Opsional)" name="detailbuku"></textarea>
                        </div>
                        <div class="col-sm-6">
                              <div class="select sumbangan">
                                <select class="form-select form-select-sm mb-3" aria-label="Small select example">
                                  <option selected>Kategori</option>
                                  <option value="kosa">Komputer Sains</option>
                                  <option value="manke">Manajemen Keuangan</option>
                                  <option value="sains">Sains</option>
                                  <option value="sifi">Sains Fiksi</option>
                                </select>
                              </div>
                              <div class="select sumbangan">
                                <select class="form-select form-select-sm mb-3" aria-label="Small select example">
                                  <option selected>Bahasa</option>
                                  <option value="indo">Indonesia</option>
                                  <option value="inggris">Inggris</option>
                                </select>
                              </div>
                              <div class="checkbox sumbangan">
                                <span class="span checkbox"><b>Format Yang Tersedia</b></span>
                                <div class="form-check form-check-reverse">
                                  <label class="form-check-label" for="flexCheckDefault">
                                    Hard Copy
                                  </label>
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                </div>
                              </div>
                        </div>
                        <div class="row sumbangan">
                            <div class="submit-button-rectangle">
                              <input class="btn btn-primary submit-button-rectangle" type="submit" value="Submit">
                            </div>
                          </div>
                      </div>
                    </form>
                    </div>
                  </div>
                </div>
                </div>
              </div>
          <div class="col thx-menyumbang">
            <div class="container-thx">
              <p class="thx">TERIMA KASIH TELAH <p class="thx menyumbang">MENYUMBANG!</p></p>
              <div class="row thx2">
                <div class="thx-container">
                  <span class="thx-text">Sumbangan mu sebelumnya</span>
                  <div class="row align-items-start thx2-container">
                    <div class="col thx">
                      <div class="card thx">
                        <div class="thx-card-body">
                            <img src="assets\Photo\book1.png" width="123" height="170">
                            <p class="card-title-thx1">Don’t Make Me think</p>
                            <p class="card-title-thx2">Steve Krug, 2000</p>
                            <p class="card-title-thx3">14k Readers</p>
                        </div>
                      </div>
                    </div>
                    <div class="col thx">
                      <div class="card thx">
                        <div class="thx-card-body">
                          <img src="assets\Photo\book2.png" width="123" height="170">
                          <p class="card-title-thx1">The Design of Every..</p>
                          <p class="card-title-thx2">Don Norman, 1988</p>
                          <p class="card-title-thx3">14k Readers</p>
                        </div>
                      </div>
                    </div>
                    <div class="col thx">
                      <div class="card thx">
                        <div class="thx-card-body">
                          <img src="assets\Photo\book3.png" width="123" height="170">
                          <p class="card-title-thx1">Sprint : How to solve...</p>
                          <p class="card-title-thx2">Jake Knapp, 2000</p>
                          <p class="card-title-thx3">14k Readers</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="container-button">
              <div class="row thx2">
                <div class="thx-container">
                  <div class="row align-items-start thx2-button">
                    <div class="col button d-flex justify-content-center">
                      <button type="button d-flex justify-content-center" class="btn btn-danger">Hapus</button>
                    </div>
                    <div class="col button d-flex justify-content-center">
                      <button type="button" class="btn btn-danger">Hapus</button>
                    </div>
                    <div class="col button d-flex justify-content-center">
                      <button type="button" class="btn btn-danger">Hapus</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</section>
</main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
