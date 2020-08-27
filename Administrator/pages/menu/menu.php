<?php
    echo "<ul class='nav nav-pills nav-sidebar flex-column' data-widget='treeview' role='menu' data-accordion='false'>
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class='nav-item has-treeview'>
            <a href='#' class='nav-link active'>
              <i class='nav-icon fas fa-tachometer-alt'></i>
              <p>
                Master
                <i class='right fas fa-angle-left'></i>
              </p>
            </a>
            <ul class='nav nav-treeview'>
          <li class='dropdown-menum'>
            <a href='/barber/Administrator/user/paket.php' class='nav-link'>
              <i class='nav-icon fas fa-box  '></i>
              <p>
                Paket
              </p>
            </a>
          </li>
          <li class='dropdown-menum'>
            <a href='/barber/Administrator/user' class='nav-link'>
              <i class='nav-icon fas fa-user'></i>
              <p>
                User
              </p>
            </a>
          </li>
        </ul>
        </li>
          <li class='nav-item has-treeview'>
            <a href='#' class='nav-link active'>
              <i class='nav-icon  fas fa-dollar-sign'></i>
              <p>
                Keuangan
                <i class='right fas fa-angle-left'></i>
              </p>
            </a>
            <ul class='nav nav-treeview'>
          <li class='nav-item'>
            <a href='/barber/Administrator/keuangan/transaksi.php' class='nav-link'>
              <i class='nav-icon fas fa-shopping-cart'></i>
              <p>
                Transaksi
              </p>
            </a>
          </li>
          <li class='nav-item'>
            <a href='/barber/Administrator/keuangan/riwayat_transaksi.php' class='nav-link'>
              <i class='nav-icon fas fa-shopping-cart'></i>
              <p>
                Riwayat Transaksi
              </p>
            </a>
          </li>
          <li class='nav-item'>
            <a href='/barber/Administrator/keuangan/gaji.php' class='nav-link'>
              <i class='nav-icon  fas fa-address-card'></i>
              <p>
                Gaji
              </p>
            </a>
          </li>
        </ul>
        </li>
          <li class='nav-item has-treeview'>
            <a href='#' class='nav-link active'>
              <i class='nav-icon fas fa-book'></i>
              <p>
                Monitoring
                <i class='right fas fa-angle-left'></i>
              </p>
            </a>
            <ul class='nav nav-treeview'>
          <li class='nav-item'>
            <a href='/barber/Administrator/monev/' class='nav-link'>
              <i class='nav-icon fas fa-book-reader '></i>
              <p>
                Laporan Print
              </p>
            </a>
          </li>
        </ul>
            <ul class='nav nav-treeview'>
          <li class='nav-item'>
            <a href='/barber/Administrator/monev/keu.php' class='nav-link'>
              <i class='nav-icon fas fa-book-reader '></i>
              <p>
                Laporan Keungan
              </p>
            </a>
          </li>
        </ul>
            <ul class='nav nav-treeview'>
          <li class='nav-item'>
            <a href='/barber/Administrator/monev/pengeluaran.php' class='nav-link'>
              <i class='nav-icon fas fa-book-reader '></i>
              <p>
                Laporan pengeluaran
              </p>
            </a>
          </li>
        </ul>
        </li>
        </ul>";
?>