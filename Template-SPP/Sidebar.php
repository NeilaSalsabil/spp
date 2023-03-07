<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Pembayaran SPP</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">SPP</a>
          </div>
          <ul class="sidebar-menu">
          <?php if ($_SESSION['level'] == "admin") { ?>
        <li><a href="Dashboard.php" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a></li>
        <li><a class="nav-link" href="CRUD-admin.php"><i class="fas fa-address-book"></i> <span>CRUD Admin</span></a>
        <li><a class="nav-link" href="CRUD-petugas.php"><i class="fas fa-address-book"></i> <span>CRUD Petugas</span></a>
        <li><a class="nav-link" href="CRUD-siswa.php"><i class="fas fa-address-book"></i> <span>CRUD Siswa</span></a>
        <li><a class="nav-link" href="CRUD-spp.php"><i class="fas fa-address-book"></i> <span>CRUD SPP</span></a> 
        <li><a class="nav-link" href="Entri-pembayaran.php"><i class="fas fa-arrow-alt-circle-down"></i> <span>Entri Pembayaran</span></a>
        <li><a class="nav-link" href="History-pembayaran.php"><i class="fas fa-bookmark"></i> <span>History Pembayaran</span></a>       
          </ul>
          <?php }elseif ($_SESSION['level'] == "petugas") { ?>
        <li><a href="Dashboard.php" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a></li>
        <li><a class="nav-link" href="Entri-pembayaran.php"><i class="fas fa-arrow-alt-circle-down"></i> <span>Entri Pembayaran</span></a>
        <li><a class="nav-link" href="History-pembayaran.php"><i class="fas fa-bookmark"></i> <span>History Pembayaran</span></a>       
          </ul>
          <?php }elseif ($_SESSION['level'] == "siswa") { ?>
        <li><a href="Dashboard.php" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a></li>
        <li><a class="nav-link" href="History-pembayaran.php"><i class="fas fa-bookmark"></i> <span>History Pembayaran</span></a>       
          </ul>
          <?php } ?>
        

          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> Logout
            </a>
          </div>        </aside>
      </div>