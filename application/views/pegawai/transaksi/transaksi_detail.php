<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-250 bg-primary position-absolute w-100" style="height: 90px;"></div>
    <aside style="background-color: white;" class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a href="<?= base_url('pegawai/dashboard') ?>" class="navbar-brand m-auto p-auto" style="font-size: x-large;">
                <span class="ms-1 font-weight-bold">Restoin</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse h-auto w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="<?= base_url('pegawai/dashboard') ?>">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?= base_url('pegawai/menu') ?>">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-pizza-slice text-success text-sm opacity-10 mb-1"></i>
                        </div>
                        <span class="nav-link-text ms-1">Menu</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?= base_url('pegawai/transaksi') ?>" style="background-color: #F6F8FC;">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-cart text-secondary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Transaksi Hari Ini</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <h5 class="font-weight-bolder text-white mb-0">Pegawai</h5>
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-white"><a class="opacity-5 text-white" href="<?= base_url('pegawai/transaksi') ?>">Transaksi</a></li>
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Detail Transaksi</li>
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
                        <li class="nav-item px-1 d-flex align-items-center">
                            <p class="nav-link text-white m-auto fs-5"><?= $this->session->username; ?></p>
                        </li>
                        <li class="nav-item px-1 d-flex align-items-center">
                            <a href="<?= base_url('pegawai/dashboard/logout') ?>" class="nav-link text-white p-0 fs-5">
                                <i class="fa fa-sign-out"></i>
                            </a>
                        </li>
                    </ul>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->

        <?php foreach ($transaksi as $trans) : ?>
            <div class="card shadow-lg mx-4 card-profile-top mt-4">
                <div class="card-body p-3">
                    <div class="row gx-4">
                        <div class="col-auto my-auto">
                            <div class="h-100">
                                <h3>
                                    <?= $trans->no_faktur; ?> |
                                    <?= $trans->tanggal; ?> |
                                    <?= $trans->pelanggan; ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="horizontal dark">

            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-8">
                        <?php
                        $no = 1;
                        foreach ($item as $itm) : ?>
                            <div class="card mt-3 mb-3">

                                <div class="card-body">

                                    <div class="row d-flex align-items-center">
                                        <div class="col-md-1">
                                            <p class="mx-1 text-sm"><?= $no++; ?></p>
                                        </div>
                                        <div class="col-md-4">
                                            <img src="<?= base_url() ?>assets/img/upload/menu/<?= $itm->foto ?>" alt="Foto" class="card-img-top p-3 img-fluid">
                                        </div>
                                        <div class="col-md-5">
                                            <h4 class="mx-1 text-m"><?= $itm->menu; ?></h4>
                                            <p class="mx-1 text-sm">Qty: <?= $itm->jumlah; ?></p>
                                            <p class="mx-1 text-sm">Harga: Rp. <?= $itm->harga; ?></p>
                                            <p class="mx-1 text-sm">Subtotal: Rp. <?= $itm->subtotal; ?></p>
                                        </div>
                                        <div class="col-md-2">
                                            <?php if ($itm->status == 'Proses') { ?>
                                                <?= anchor('pegawai/transaksi/ubah_order/' . $itm->id_detail, '<p class="mx-1 text-sm text-warning">Status: ' . $itm->status . '</p>') ?>
                                            <?php } else { ?>
                                                <p class="mx-1 text-sm">Status: <?= $itm->status; ?></p>
                                            <?php } ?>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="col-md-4 pt-3 pb-3">
                        <div class="card">

                            <form action="<?= base_url('pegawai/transaksi/bayar') ?>" method="post">
                                <input name="id_penjualan" type="hidden" value="<?= $trans->id_penjualan; ?>">
                                <div class="card-body border-0 pt-4 pt-lg-3 pb-2 pb-lg-3">
                                    <?= $this->session->flashdata('message') ?>
                                    <p>Meja: <?= $trans->nomer_meja; ?></p>
                                    <p>Status meja: <?= $trans->status_meja; ?></p>

                                    <?php if ($trans->status != 'Sudah dibayar') { ?>
                                        <p>Metode Pembayaran:</p>
                                        <select name="metode" class="form-control mb-4">
                                            <option <?php if ($trans->metode_pembayaran == 'Tunai') echo "selected" ?> value="Tunai">Tunai</option>
                                            <option <?php if ($trans->metode_pembayaran == 'Bank Transfer') echo "selected" ?> value="Bank Transfer">Bank Transfer</option>
                                            <option <?php if ($trans->metode_pembayaran == 'OVO') echo "selected" ?> value="OVO">OVO</option>
                                            <option <?php if ($trans->metode_pembayaran == 'Shopee Pay') echo "selected" ?> value="Shopee Pay">Shopee Pay</option>
                                        </select>
                                    <?php } else { ?>
                                        <p>Metode Pembayaran: <?= $trans->metode_pembayaran; ?></p>
                                    <?php } ?>

                                    <?php if ($trans->status == 'Sudah dibayar') { ?>
                                        <?= anchor('pegawai/transaksi/ubah_status/' . $trans->id_penjualan, '<p class="text-warning">Status: ' . $trans->status . '</p>') ?>
                                    <?php } else { ?>
                                        <p>Status: <?= $trans->status; ?></p>
                                    <?php } ?>
                                    
                                    <p>Total: Rp. <?= $trans->total; ?> <input id="total" name="total" type="hidden" value="<?= $trans->total; ?>"></p>

                                    <?php if (isset($trans->bukti_pembayaran)) : ?>
                                        <p><img src="<?= base_url() ?>assets/img/upload/bukti/<?= $trans->bukti_pembayaran; ?>" alt="Bukti Pembayaran" class="card-img-top p-3 img-fluid"></p>
                                    <?php else : ?>
                                        <p>Bukti Pembayaran Tidak Tersedia</p>
                                    <?php endif; ?>

                                    <?php if ($trans->bayar == 0) { ?>
                                        <p>Bayar: <input class="form-control" id="bayar" name="bayar" type="number" min="0" value="<?= $trans->bayar; ?>"></p>
                                    <?php } else { ?>
                                        <p>Bayar: Rp. <?= $trans->bayar; ?></p>
                                    <?php } ?>

                                    <p>Kembali: Rp. <?= $trans->kembali; ?></p>

                                    <?php
                                    if ($trans->bayar == 0) { ?>
                                        <input type="submit" name="submit" value="Bayar" class="btn btn-success btn-sm btn-block w-100 h-50 fs-6">
                                    <?php } ?>

                                </div>
                            </form>

                        </div>
                    </div>

                </div>

            <?php endforeach; ?>