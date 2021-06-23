<?= $this->extend('layout/master'); ?>
<?= $this->section('content'); ?>

<div class="row justify-content-between align-items-center mb-10">

    <!-- Page Heading Start -->
    <div class="col-12 col-lg-auto mb-20">
        <div class="page-heading">
            <h3>Dashboard</h3>
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
    <div class="col-12 text-center">
        <h2 class="display-4">
            Selamat Datang
        </h2>
        <h3 class="h2">
            Dashboard D'CREATIV Indonesia
        </h3>
    </div>
</div>
<?= $this->endSection(); ?>