<?= $this->extend('layout/master'); ?>
<?= $this->section('content'); ?>

<div class="row justify-content-between align-items-center mb-10">

    <!-- Page Heading Start -->
    <div class="col-12 col-lg-auto mb-20">
        <div class="page-heading">
            <h3>Dashboard <span>/ Toko</span></h3>
        </div>
    </div><!-- Page Heading End -->

    <!-- Page Button Group Start -->
    <div class="col-12 col-lg-auto mb-20">
        <div class="page-date-range">
            <input type="text" class="form-control input-date-predefined">
        </div>
    </div><!-- Page Button Group End -->
</div>

<div class="row">

    <!--Manage Product List Start-->
    <div class="col-12">
        <div class="table-responsive">
            <table class="table table-vertical-middle">
                <thead>
                    <tr>
                        <th>ID Produk</th>
                        <th>Foto Produk</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($data as $produk) : ?>

                        <tr>
                            <td><?= $no++; ?></td>
                            <td><img src="/image/<?php echo $produk['gambar']; ?>" alt="" style="width:150px"></td>

                            <td><?= $produk['nama_produk']; ?></td>
                            <td><?= $produk['harga_produk']; ?></td>
                            <td><?= $produk['keterangan']; ?></td>
                            <td>
                                <a class="edit button button-sm button-primary" href="<?= base_url(); ?>/produk/edit/<?= $produk['id_produk']; ?>">
                                    Ubah
                                </a>
                                <a class="edit button button-sm button-outline button-primary" href="<?= base_url(); ?>/produk/delete/<?= $produk['id_produk']; ?>">
                                    Hapus
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
<!--Manage Product List End-->

<?= $this->endSection(); ?>