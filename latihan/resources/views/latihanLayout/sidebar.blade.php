<!-- sidebar -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 position-fixed">

    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light" style="margin-left: 15px">Universitas MDP</span>
    </a>

    <div class="sidebar d-flex flex-column">
        <nav class=" mt-10 flex-grow-1">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                <li class="nav-item">
                    <a href="{{route('fakultas.index')}}" class="nav-link">
                        <i class="bi bi-briefcase-fill"></i>
                        <p>Fakultas</p>
                    </a>
                </li>
                <!-- #region <li class="nav-item has-treeview">
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
          </li> -->

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
                    </a>
                </li>

                <!-- #region <li class="nav-item">
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
          </li> -->

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