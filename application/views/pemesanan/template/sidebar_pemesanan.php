<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-250 bg-primary position-absolute w-100" style="height: 90px;"></div>
  <aside style="background-color: white;" class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a href="<?= base_url('pesan/' . $id) ?>" class="navbar-brand m-auto p-auto" style="font-size: x-large;">
        <span class="ms-1 font-weight-bold">Restoin</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse h-auto w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?php if ($check == 'Menu') echo "active" ?>" href="<?= base_url('pesan/' . $id) ?>" <?php if ($check == 'Menu') echo "style='background-color: #F6F8FC;'" ?>>
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-pizza-slice text-success text-sm opacity-10 mb-1"></i>
            </div>
            <span class="nav-link-text ms-1">Daftar Menu</span>
          </a>
        </li>
        <?php if ($this->session->nama) { ?>
          <!-- <li class="nav-item">
            <a class="nav-link <?php if ($check == 'Keranjang') echo "active" ?>" href="<?= base_url('pemesanan/keranjang') ?>" <?php if ($check == 'Keranjang') echo "style='background-color: #F6F8FC;'" ?>>
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-cart text-secondary text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Keranjang &nbsp;(<?= $this->cart->total_items() ?>)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if ($check == 'Transaksi') echo "active" ?>" href="<?= base_url('pemesanan/transaksi') ?>" <?php if ($check == 'Transaksi') echo "style='background-color: #F6F8FC;'" ?>>
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fas fa-clipboard text-info text-sm opacity-10 mb-1"></i>
              </div>
              <span class="nav-link-text ms-1">Transaksi</span>
            </a>
          </li> -->
        <?php } ?>
      </ul>
    </div>
  </aside>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <h5 class="font-weight-bolder text-white mb-0"><?= $resto->nama; ?></h5>
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <?php if ($detail == true) { ?>
              <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
              <li class="breadcrumb-item text-sm text-white"><a class="opacity-5 text-white" href="<?= base_url('pemesanan/transaksi') ?>">Transaksi</a></li>
              <li class="breadcrumb-item text-sm text-white active" aria-current="page">Detail Transaksi</li>
            <?php } else { ?>
              <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
              <li class="breadcrumb-item text-sm text-white active" aria-current="page">Daftar <?= $check; ?></li>
            <?php } ?>
          </ol>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center"></div>
          <ul class="navbar-nav  justify-content-start">
            <li class="nav-item d-xl-none d-flex align-items-center" style="padding-right: 120px;">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
            <?php
            if (!$this->session->nama) { ?>
              <li class="nav-item px-1 d-flex align-items-center">
                <a href="<?= base_url('order/' . $id) ?>" class="nav-link text-white p-0 fs-5">
                  Mulai Pesan
                </a>
              </li>
            <?php } else { ?>
              <li class="nav-item px-1 d-flex align-items-center">
                <p class="nav-link text-white m-auto fs-5"><?= $this->session->nama; ?></p>
              </li>
              <li class="nav-item px-1 d-flex align-items-center">
                <a href="<?= base_url('pemesanan/order/logout') ?>" class="nav-link text-white p-0 fs-5">
                  <i class="fa fa-sign-out"></i>
                </a>
              </li>
            <?php } ?>
          </ul>
          </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->