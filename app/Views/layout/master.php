<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>D'Creativ Indonesia</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>/assets/images/favicon.png">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/vendor/bootstrap.min.css">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href=" <?= base_url() ?>/assets/css/vendor/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/vendor/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/vendor/cryptocurrency-icons.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/plugins/plugins.css">

    <!-- Helper CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/helper.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style-pink.css">
    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/custom.css">

</head>

<body class="">

    <div class="main-wrapper">


        <!-- Header Section Start -->
        <div class="header-section">
            <div class="container-fluid">
                <div class="row justify-content-between align-items-center">

                    <!-- Header Logo (Header Left) Start -->
                    <div class="header-logo col-auto">
                        <a href="index.html">
                            <img src="<?= base_url() ?>/assets/images/logo/1.png" alt="">
                            <img src="<?= base_url() ?>/assets/images/logo/1.png" class="logo-light" alt="">
                        </a>
                    </div><!-- Header Logo (Header Left) End -->

                    <!-- Header Right Start -->
                    <div class="header-right flex-grow-1 col-auto">
                        <div class="row justify-content-between align-items-center">

                            <!-- Side Header Toggle & Search Start -->
                            <div class="col-auto">
                                <div class="row align-items-center">

                                    <!--Side Header Toggle-->
                                    <div class="col-auto"><button class="side-header-toggle"><i class="zmdi zmdi-menu"></i></button></div>

                                    <!--Header Search-->
                                    <div class="col-auto">

                                        <div class="header-search">

                                            <button class="header-search-open d-block d-xl-none"><i class="zmdi zmdi-search"></i></button>

                                        </div>
                                    </div>

                                </div>
                            </div><!-- Side Header Toggle & Search End -->

                            <!-- Header Notifications Area Start -->
                            <div class="col-auto">

                                <ul class="header-notification-area">

                                    <!--User-->
                                    <li class="adomx-dropdown col-auto">
                                        <a class="toggle" href="#">
                                            <span class="user">
                                                <span class="avatar">
                                                    <img src="<?= base_url() ?>/assets/images/me.jpg" alt="">
                                                    <span class="status"></span>
                                                </span>
                                                <span class="name">Tamara Lucky Widodo</span>
                                            </span>
                                        </a>

                                        <!-- Dropdown -->
                                        <div class="adomx-dropdown-menu dropdown-menu-user">
                                            <div class="head">
                                                <h5 class="name"><a href="#">Tamara Lucky Widodo</a></h5>
                                                <a class="mail" href="#">tamaralucky01@gmail.com</a>
                                            </div>
                                            <div class="body">
                                                <ul>
                                                    <li><a href="#"><i class="zmdi zmdi-account"></i>Profile</a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-email-open"></i>Inbox</a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-wallpaper"></i>Activity</a></li>
                                                </ul>
                                                <ul>
                                                    <li><a href="#"><i class="zmdi zmdi-settings"></i>Setting</a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-lock-open"></i>Sing out</a></li>
                                                </ul>
                                                <ul>
                                                    <li><a href="#"><i class="zmdi zmdi-paypal"></i>Payment</a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-google-pages"></i>Invoice</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                    </li>

                                </ul>

                            </div><!-- Header Notifications Area End -->

                        </div>
                    </div><!-- Header Right End -->

                </div>
            </div>
        </div><!-- Header Section End -->
        <!-- Side Header Start -->
        <div class="side-header show">
            <button class="side-header-close"><i class="zmdi zmdi-close"></i></button>
            <!-- Side Header Inner Start -->
            <div class="side-header-inner custom-scroll">

                <nav class="side-header-menu" id="side-header-menu">
                    <ul>
                        <li><a href="<?= base_url() ?>"><i class="ti-home"></i> <span>Dashboard</span></a>
                        </li>


                        <li class="has-sub-menu"><a href="#"><i class="ti-shopping-cart"></i> <span>Toko</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="<?= base_url() ?>/produk/add"><span>Tambah Produk</span></a></li>

                                <li><a href="<?= base_url() ?>/produk"><span>Kelola Produk</span></a></li>
                            </ul>
                        </li>

                    </ul>
                </nav>

            </div><!-- Side Header Inner End -->
        </div><!-- Side Header End -->

        <!-- Content Body Start -->
        <div class="content-body">

            <?= $this->renderSection('content'); ?>

        </div><!-- Content Body End -->

        <!-- Footer Section Start -->
        <div class="footer-section">
            <div class="container-fluid">

                <div class="footer-copyright text-center">
                    <p class="text-body-light">2021 &copy; <a href="https://themeforest.net/user/codecarnival">D'Creativ 6701190015-Tamara Lucky Widodo</a></p>
                </div>

            </div>
        </div><!-- Footer Section End -->

    </div>

    <!-- JS
============================================ -->

    <!-- Global Vendor, plugins & Activation JS -->
    <script src="<?= base_url() ?>/assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/vendor/popper.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/vendor/bootstrap.min.js"></script>
    <!--Plugins JS-->
    <script src="<?= base_url() ?>/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/plugins/tippy4.min.js.js"></script>
    <!--Main JS-->
    <script src="<?= base_url() ?>/assets/js/main.js"></script>

    <!-- Plugins & Activation JS For Only This Page -->

    <!--Moment-->
    <script src="<?= base_url() ?>/assets/js/plugins/moment/moment.min.js"></script>

    <!--Daterange Picker-->
    <script src="<?= base_url() ?>/assets/js/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="<?= base_url() ?>/assets/js/plugins/daterangepicker/daterangepicker.active.js"></script>

    <!--Echarts-->
    <script src="<?= base_url() ?>/assets/js/plugins/chartjs/Chart.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/plugins/chartjs/chartjs.active.js"></script>

    <!--VMap-->
    <script src="<?= base_url() ?>/assets/js/plugins/vmap/jquery.vmap.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/plugins/vmap/maps/jquery.vmap.world.js"></script>
    <script src="<?= base_url() ?>/assets/js/plugins/vmap/maps/samples/jquery.vmap.sampledata.js"></script>
    <script src="<?= base_url() ?>/assets/js/plugins/vmap/vmap.active.js"></script>

</body>

</html>