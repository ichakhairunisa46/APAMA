<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>A P A M A</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="/theme/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="/theme/dist/css/adminlte.min.css">
  @yield('css')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="/" class="brand-link">
        <h4 class="brand-text text-center">A P A M A</h4>
    </a>

    <div class="sidebar">
      <div class="user-panel mt-3 mb-3 d-flex">
        <div class="image">
          <img src="/images/logo-telkomakses.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">A P A M A</a>
          <p class="text-muted">Pengelolaan Magang</p>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item">
            <a href="/" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/profile" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>Profile</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-graduation-cap"></i>
              <p>
                Magang
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/magang/absensi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Absensi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/magang/laporan-harian" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Harian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/magang/judul-magang" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Judul Magang</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Pembina
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/pembina/penilaian" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penilaian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/pembina/sertifikat" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sertifikat</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-info"></i>
              <p>
                Admin
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/admin/instansi" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Instansi</p>
                    </a>
                  </li>
              <li class="nav-item">
                <a href="/admin/level" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/users" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
    </div>
  </aside>

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>@yield('title')</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">{{ ucwords(Request::segment(1)) ? : 'Home' }}</a></li>
              <li class="breadcrumb-item active">{{ ucwords(Request::segment(2)) ? : 'Pages' }}</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
        @yield('content')
    </section>
  </div>

  <footer class="main-footer">
    Copyright &copy; {{ date('Y') }} <strong>A P A M A.</strong> All rights reserved.
  </footer>

  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>

<script src="/theme/plugins/jquery/jquery.min.js"></script>
<script src="/theme/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/theme/dist/js/adminlte.min.js"></script>
@yield('js')
</body>
</html>
