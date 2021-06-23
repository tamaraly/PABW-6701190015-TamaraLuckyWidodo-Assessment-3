<?= $this->extend('layout/master'); ?>
<?= $this->section('content'); ?>

<!-- Add or Edit Product Start -->
<div class="add-edit-product-wrap col-12">
    <?php if (!empty(session()->getFlashdata('error'))) : ?>
        <div class="alert alert-danger" role="alert">
            <h4>Periksa Entrian Form</h4>
            </hr />
            <?php echo session()->getFlashdata('error'); ?>
        </div>
    <?php endif; ?>

    <div class="add-edit-product-form">
        <?= csrf_field(); ?>
        <form action="/dcreativ/update" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_produk" value="<?= $data['id_produk'] ?>">

            <h4 class="title">Kelola Produk</h4>
            <div class="panel panel-default">


                <div class="row">
                    <div class="col-lg-6 col-12 mb-30"><input class="form-control" name="nama_produk" type="text" autofocus placeholder="Nama Produk" value="<?= $data['nama_produk']; ?>"> </div>
                    <div class="col-lg-6 col-12 mb-30"><input class="form-control" name="harga_produk" type="text" placeholder="Harga" value="<?= $data['harga_produk']; ?>"></div>
                    <div class="col-12 mb-30"><textarea class="form-control" name="keterangan" placeholder="Deskripsi Produk"><?= $data['keterangan']; ?></textarea></div>

                </div>
                <h4 class="title">Foto Produk</h4>
                <img src="/image/<?php echo $data['gambar']; ?>" alt="" style="width:150px">
                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="gambar"><span class="required"></span>
                </label>
                <div class="col-md-10 col-sm-10 col-xs-12">
                    <input type="file" id="gambar" name="gambar" class="form-control col-md-7 col-xs-12">
                </div>
                <!--   Button Group Start -->
                <div class="row">
                    <div class="d-flex flex-wrap justify-content-end col mbn-10">
                        <button class="button button-primary mb-10 ml-10 mr-0">Simpan Perubahan</button>
                    </div>
                </div><!-- Button Group End -->
            </div>

        </form>
    </div>

</div><!-- Add or Edit Product End -->
<?= $this->endSection(); ?>