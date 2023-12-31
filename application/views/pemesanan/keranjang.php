        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0 hstack gap-3 d-flex justify-content-between">
                            <h6>Keranjang</h6>
                        </div>
                        <div class="card-body pt-2 pb-0">

                            <div class="table-responsive p-0 mt-4">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-4">
                                        <thead align="center">
                                            <tr>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nomor</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Menu</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Harga</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Hapus</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sub Total</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        if ($cart == null) {
                                            echo '
                                <tbody>
                                <tr>
                                <td colspan="6" style="text-align: center;">Tidak Ada Data</td>
                                </tr>
                                </tbody>                
                                </table>
                                ';
                                        } else {
                                            $total = 0;
                                            $no = 1;
                                            foreach ($cart as $item) : ?>
                                                <tr style="text-align: center;">
                                                    <td><?php echo $no++ ?></td>
                                                    <td><?php echo $item['name'] ?></td>
                                                    <td>Rp. <?php echo $item['price'] ?></td>
                                                    <td>
                                                        <?php echo anchor('pemesanan/keranjang/beli_tambah/' . $item['rowid'], '<i class="fa fa-plus-circle text-success fs-4"></i>'); ?>&nbsp;&nbsp;
                                                        <input style="width:50px; text-align:center;" type="text" disabled value="<?php echo $item['qty'] ?>">&nbsp;&nbsp;
                                                        <?php echo anchor('pemesanan/keranjang/beli_kurang/' . $item['rowid'], '<i class="fa fa-minus-circle text-success fs-4"></i>'); ?>
                                                    </td>
                                                    <td><a class="btn btn-danger btn-m mt-3" href="<?= base_url('pemesanan/keranjang/beli_hapus/') . $item['rowid'] ?>"><i class="fa fa-trash"></i></a></td>
                                                    <td>Rp. <?php echo $item['subtotal'] ?></td>
                                                </tr>
                                            <?php

                                                $total = $total + $item['subtotal'];

                                            endforeach; ?>

                                            <form action="<?= base_url('pemesanan/keranjang/checkout') ?>" method="post" enctype="multipart/form-data">
                                                <tr>
                                                    <td colspan="5">
                                                        <h4>Metode Pembayaran :</h4>
                                                    </td>

                                                    <td style="text-align: center;">
                                                        <select name="metode" class="form-control">
                                                            <option value="Tunai">Tunai</option>
                                                            <option value="Bank Transfer">Bank Transfer</option>
                                                            <option value="OVO">OVO</option>
                                                            <option value="Shopee Pay">Shopee Pay</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <h4>Gambar QRIS :</h4>
                                                        <img src="<?= base_url() ?>assets/img/default.jpg" alt="QRIS" width="100">

                                                    </td>

                                                    <td></td>

                                                    <td></td>

                                                    <td colspan="3">
                                                        <h6>Unggah Bukti Pembayaran :</h6>
                                                        <input class="form-control" id="foto_file" type="file" name="foto_file"/>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td colspan="5">
                                                        <h3>Total :</h3>
                                                    </td>

                                                    <td style="text-align: center;">
                                                        <h4>Rp. <?= $total ?></h4>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td colspan="6"><?php if (!empty($total)) { ?>
                                                            <div class="text-end mt-4" onclick="javasript: return confirm('Anda yakin ingin melakukan checkout? Pastikan keranjang anda sudah benar')"><?= anchor('pemesanan/keranjang/checkout', '<input type="submit" name="submit" value="Checkout" class="btn btn-info btn-m">') ?></div>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                            </form>
                                    </table>

                                </div>

                            </div>

                        </div>
                    </div>

                </div>