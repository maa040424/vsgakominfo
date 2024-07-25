<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <!-- Tombol untuk mengaktifkan atau menonaktifkan sidebar pada tampilan mobile -->
    <form class="form-inline">
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>
    </form>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Pembatas di Topbar -->
        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <!-- Item menu untuk informasi pengguna -->
        <li class="nav-item dropdown no-arrow">
            <!-- Tombol dropdown untuk informasi pengguna -->
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <!-- Nama pengguna -->
                <span class="mr-2 d-none d-lg-inline text-gray-600 medium">Adam Al</span>
                <!-- Foto profil pengguna -->
                <img class="img-profile rounded-circle big" src="./img/3x4.jpg">
            </a>
            <!-- Dropdown - User Information -->
            <!-- Menu dropdown untuk informasi pengguna -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profil
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Pengaturan
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Log Aktivitas
                </a>
                <!-- Pembatas di menu dropdown -->
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Keluar
                </a>
            </div>
        </li>

    </ul>

</nav>
<!-- End of Topbar -->