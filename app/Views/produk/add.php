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

    <!-- Add or Edit Product Start -->

    <div class="add-edit-product-wrap col-12">
        <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-danger" role="alert">
                <h4>Periksa Antrian Form</h4>
                </hr />
                <?php echo session()->getFlashdata('error'); ?>
            </div>
        <?php endif; ?>
        <div class="add-edit-product-form">
            <?= csrf_field(); ?>
            <form action="/dcreativ/store" method="POST" enctype="multipart/form-data">

                <h4 class="title">Tambah Produk</h4>
                <div class="panel panel-default">


                    <div class="row">
                        <div class="col-lg-6 col-12 mb-30"><input class="form-control" name="nama_produk" type="text" autofocus placeholder="Nama Produk"> </div>
                        <div class="col-lg-6 col-12 mb-30"><input class="form-control" name="harga_produk" type="text" placeholder="Harga"></div>
                        <div class="col-12 mb-30"><textarea class="form-control" name="keterangan" placeholder="Deskripsi Produk"></textarea></div>

                    </div>
                    <h4 class="title">Foto Produk</h4>

                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="gambar"><span class="required"></span>
                    </label>
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <input type="file" id="gambar" name="gambar" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                    <!--   Button Group Start -->
                    <div class="row">
                        <div class="d-flex flex-wrap justify-content-end col mbn-10">
                            <button class="button button-primary mb-10 ml-10 mr-0">Tambah</button>
                        </div>
                    </div><!-- Button Group End -->

                </div>

            </form>
        </div>
    </div>

</div><!-- Add or Edit Product End -->

<?= $this->endSection(); ?>