  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>BUTANG</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="Dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Master Bukti Transfer</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="BuktiDeposit"><i class="fa fa-circle-o"></i> Bukti Deposit</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Master Buku</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="Kategori"><i class="fa fa-circle-o"></i> Kategori Buku</a></li>
            <li><a href="DetailKategoriBuku"><i class="fa fa-circle-o"></i> Detail Kategori Buku</a></li>
            <li><a href="FotoBuku"><i class="fa fa-circle-o"></i> Foto Buku</a></li>
           <!--<li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Buku</a></li>-->
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Master Transaksi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="SewaBuku"><i class="fa fa-circle-o"></i> Sewa Buku</a></li>
            <li><a href="DetailSewaBuku"><i class="fa fa-circle-o"></i> Detail Sewa Buku</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Master User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="Tetangga"><i class="fa fa-circle-o"></i> Tetangga</a></li>
            <li><a href="RakBuku"><i class="fa fa-circle-o"></i> Rak Buku</a></li>
            <li><a href="RiwayatSewa"><i class="fa fa-circle-o"></i> Riwayat Sewa</a></li>
            <li><a href="Wishlist"><i class="fa fa-circle-o"></i> Wishlist</a></li>
            <li><a href="Keranjang"><i class="fa fa-circle-o"></i> Keranjang</a></li>
            <li><a href="ItemKeranjang"><i class="fa fa-circle-o"></i> Item Keranjang</a></li>
            <li><a href="Notifikasi"><i class="fa fa-circle-o"></i> Notifikasi</a></li>
            <li><a href="User"><i class="fa fa-circle-o"></i> User</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>