<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>AdminLTE Laravel</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
    integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css"
    integrity="sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg=" crossorigin="anonymous" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI=" crossorigin="anonymous" />

  <link rel="stylesheet" href="../../dist/css/adminlte.css" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
    integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0=" crossorigin="anonymous" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css"
    integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4=" crossorigin="anonymous" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

</head>
<!-- header-->
<nav class="main-header navbar navbar-expand navbar-dark bg-dark">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button">
        <i class="fas fa-bars"></i>
      </a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="{{url('/master')}}" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Contact</a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Navbar Search -->
    <li class="nav-item">
      <a class="nav-link" data-widget="navbar-search" href="#" role="button">
        <i class="fas fa-search"></i>
      </a>
    </li>

    <!-- Messages Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-comments"></i>
        <span class="badge badge-danger navbar-badge">3</span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <!-- Chat items here -->
        <a href="#" class="dropdown-item">
          <div class="media">
            <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
            <div class="media-body">
              <h3 class="dropdown-item-title">
                Brad Diesel
                <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
              </h3>
              <p class="text-sm">Call me whenever you can...</p>
              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
            </div>
          </div>
        </a>
        <div class="dropdown-divider"></div>
        <!-- More chat items... -->
        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
      </div>
    </li>

    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-bell"></i>
        <span class="badge badge-warning navbar-badge">15</span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-header">15 Notifications</span>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-envelope mr-2"></i> 4 new messages
          <span class="float-right text-muted text-sm">3 mins</span>
        </a>
        <!-- More notif items... -->
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
      </div>
    </li>

    <!-- Fullscreen -->
    <li class="nav-item">
      <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
      </a>
    </li>

    <!-- User Menu -->
    <li class="nav-item dropdown user-menu">
      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
        <img src="dist/img/user2-160x160.jpg" class="user-image img-circle elevation-2" alt="User Image">
        <span class="d-none d-md-inline">Fernando Antonius</span>
      </a>
      <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <li class="user-header bg-primary">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          <p>
            Fernando Antonius - 2428250014
            <small>Member since 2024</small>
          </p>
        </li>
        <li class="user-footer">
          <a href="#" class="btn btn-default btn-flat">Profile</a>
          <a href="#" class="btn btn-default btn-flat float-right">Sign out</a>
        </li>
      </ul>
    </li>
  </ul>
</nav>
<!--end Header-->

<!-- sidebar -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 position-fixed">

  <a href="#" class="brand-link">
    <span class="brand-text font-weight-light" style="margin-left: 15px">Universitas MDP</span>
  </a>

  <div class="sidebar d-flex flex-column">
    <nav class=" mt-10 flex-grow-1">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
        <li class="nav-item has-treeview">
          <a href="{{ route('fakultas.index') }}" class="nav-link fakultas-link">
            <i class="bi bi-briefcase-fill"></i>
            <p>
              Fakultas
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('fakultas.show', 1) }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p style="font-size: small">Ilmu Komputer & Rekayasa</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('fakultas.show', 2) }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p style="font-size: small">Ekonomi & Bisnis</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="{{route('dosen.index')}}" class="nav-link">
            <i class="bi bi-person-square"></i>
            <p>Dosen</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{route('mhs.index')}}" class="nav-link">
            <i class="bi bi-person-vcard-fill"></i>
            <p>Mahasiswa</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{route('prodi.index')}}" class="nav-link">
            <i class="bi bi-clipboard-fill"></i>
            <p>Program Studi</p>
            <i class="right fas fa-angle-left"></i>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('prodi.show', 1) }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p style="font-size: small">Sistem Informasi</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('prodi.show', 2) }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p style="font-size: small">Manajemen</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('prodi.show', 3) }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p style="font-size: small">Akuntasi</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('prodi.show', 4) }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p style="font-size: small">Teknik Elektro</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('prodi.show', 5) }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p style="font-size: small">Informatika</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('prodi.show', 6) }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p style="font-size: small">Manajemen Informatika</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('prodi.show', 7) }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p style="font-size: small">Magister Sistem Informasi</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="{{ route('materi.index') }}" class="nav-link">
            <i class="bi bi-book"></i>
            <p>Materi</p>
          </a>
        </li>
      </ul>
    </nav>
     
  </div>
</aside>
<!-- end sidebar -->

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <div class="content-wrapper">
      @yield('content')
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.1/js/jquery.overlayScrollbars.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/js/adminlte.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js"></script>

  <script>
    $(function () {
      // Sales Chart
      var salesChartCanvas = document.getElementById('sales-chart').getContext('2d');
      var salesChartData = {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [
          {
            label: 'Digital Goods',
            backgroundColor: 'rgba(60,141,188,0.9)',
            borderColor: 'rgba(60,141,188,0.8)',
            pointRadius: false,
            pointColor: '#3b8bba',
            pointStrokeColor: 'rgba(60,141,188,1)',
            pointHighlightFill: '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data: [28, 48, 40, 19, 86, 27, 90]
          },
          {
            label: 'Electronics',
            backgroundColor: 'rgba(210, 214, 222, 1)',
            borderColor: 'rgba(210, 214, 222, 1)',
            pointRadius: false,
            pointColor: 'rgba(210, 214, 222, 1)',
            pointStrokeColor: '#c1c7d1',
            pointHighlightFill: '#fff',
            pointHighlightStroke: 'rgba(220,220,220,1)',
            data: [65, 59, 80, 81, 56, 55, 40]
          }
        ]
      };

      var salesChartOptions = {
        maintainAspectRatio: false,
        responsive: true,
        legend: {
          display: false
        },
        scales: {
          xAxes: [{
            gridLines: {
              display: false
            }
          }],
          yAxes: [{
            gridLines: {
              display: false
            }
          }]
        }
      };

      new Chart(salesChartCanvas, {
        type: 'line',
        data: salesChartData,
        options: salesChartOptions
      });

      // Pie Chart
      var pieChartCanvas = document.getElementById('pie-chart').getContext('2d');
      var pieData = {
        labels: [
          'System Informasi',
          'Informatika',
          'Akuntansi',
          'Management',
          'Teknik Elektro',
          'Management Informatika'
        ],
        datasets: [{
          data: [700, 500, 400, 600, 300, 100],
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de']
        }]
      };

      var pieOptions = {
        maintainAspectRatio: false,
        responsive: true,
      };

      new Chart(pieChartCanvas, {
        type: 'pie',
        data: pieData,
        options: pieOptions
      });

      // World Map
      $('#world-map').vectorMap({
        map: 'world_en',
        backgroundColor: 'transparent',
        regionStyle: {
          initial: {
            fill: 'rgba(255, 255, 255, 0.7)',
            stroke: 'rgba(0,0,0,.2)',
            "stroke-width": 1,
            "stroke-opacity": 1
          }
        },
        series: {
          regions: [{
            values: {
              "US": 498,
              "SA": 200,
              "DE": 420,
              "FR": 380,
              "IN": 350,
              "GB": 320,
              "BR": 290
            },
            scale: ['#ffffff', '#0154ad'],
            normalizeFunction: 'polynomial'
          }]
        },
        onRegionLabelShow: function (e, el, code) {
          if (typeof countries[code] != 'undefined') {
            el.html(el.html() + ': ' + countries[code] + ' visitors');
          }
        }
      });
    });
  </script>
</body>

</html