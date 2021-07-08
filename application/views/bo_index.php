<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard - Ourmenu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url('assets/images/favicon.ico'); ?>">

    <!-- App css -->
    <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/css/icons.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet" type="text/css" /> 
    <script src="<?= base_url('assets/js/modernizr.min.js'); ?>"></script>
     <!-- DataTables -->
    <link href="<?php echo base_url()?>assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url()?>assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="<?php echo base_url()?>assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Multi Item Selection examples -->
    <link href="<?php echo base_url()?>assets/plugins/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- jQuery  -->
    <script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>

    <!-- Chart JS -->
    <script src="<?= base_url(); ?>assets/plugins/chart.js/chart.bundle.js"></script>
</head>

<body>

    <!-- Navigation Bar-->
    <header id="topnav">
        <div class="topbar-main">
            <div class="container-fluid">

                <!-- Logo container-->
                <div class="logo">
                    <!-- Text Logo -->
                    <!-- <a href="index.html" class="logo">
                            <span class="logo-small"><i class="mdi mdi-radar"></i></span>
                            <span class="logo-large"><i class="mdi mdi-radar"></i> Highdmin</span>
                        </a> -->
                    <!-- Image Logo -->
                    <a href="index.html" class="logo">
                        <img src="<?= base_url('assets/images/logo_sm.png'); ?>" alt="" height="26" class="logo-small">
                        <img src="<?= base_url('assets/images/logo.png'); ?>" alt="" height="22" class="logo-large">
                    </a>

                </div>
                <!-- End Logo container-->


                <div class="menu-extras topbar-custom">

                    <ul class="list-unstyled topbar-right-menu float-right mb-0">

                        <li class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle nav-link">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>
                        <li class="dropdown notification-list hide-phone">
                            <a class="nav-link dropdown-toggle waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="mdi mdi-calendar"></i> / <i class="mdi mdi-clock"></i> <span id="date_template"></span> <span id="clock_template"></span>
                            </a>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="<?= base_url('assets/images/users/avatar-1.jpg'); ?>" alt="user" class="rounded-circle"> <span class="ml-1 pro-user-name">Maxine K <i class="mdi mdi-chevron-down"></i> </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h6 class="text-overflow m-0">Hallo</h6>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fi-head"></i> <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fi-power"></i> <span>Logout</span>
                                </a>

                            </div>
                        </li>
                    </ul>
                </div>
                <!-- end menu-extras -->

                <div class="clearfix"></div>

            </div> <!-- end container -->
        </div>
        <!-- end topbar-main -->

        <div class="navbar-custom">
            <div class="container-fluid">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">

                        <li class="has-submenu">
                            <a href="<?= base_url('dashboard'); ?>"><i class="icon-speedometer"></i>Dashboard</a>
                        </li>
                        <li class="has-submenu">
                            <a href="<?= base_url('profil'); ?>"><i class="fa  fa-building-o"></i>Profil</a>
                        </li>
                        <li class="has-submenu">
                            <a href="<?= base_url('transaksi'); ?>"><i class="fa fa-shopping-basket"></i>Transaksi</a>
                        </li>
                        <li class="has-submenu">
                            <a href="<?= base_url('product'); ?>"><i class="icon-book-open"></i>Produk</a>
                        </li>
                        <li class="has-submenu">
                            <a href="<?= base_url('product_kategori'); ?>"><i class="icon-list"></i>Kategori Produk</a>
                        </li>
                        <li class="has-submenu">
                            <a href="<?= base_url('meja'); ?>"><i class="fa fa-flag"></i>Meja</a>
                        </li>

                    </ul>
                    <!-- End navigation menu -->
                </div> <!-- end #navigation -->
            </div> <!-- end container -->
        </div> <!-- end navbar-custom -->
    </header>
    <!-- End Navigation Bar-->


    <div class="wrapper">
        <div class="container-fluid">
            <?php $this->load->view($page); ?>
        </div> <!-- end container -->
    </div>
    <!-- end wrapper -->


    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    2018 - 2019 © Highdmin. <span class="d-none d-sm-inline-block"> - Coderthemes.com</span>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->



    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/waves.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jquery.slimscroll.js'); ?>"></script>

    <!-- App js -->
    <script src="<?= base_url('assets/js/jquery.core.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jquery.app.js'); ?>"></script> 
    <script src="<?php echo base_url()?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/datatables/dataTables.bootstrap4.min.js"></script> 
    <script src="<?php echo base_url()?>assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/datatables/dataTables.keyTable.min.js"></script> 
    <script src="<?php echo base_url()?>assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/datatables/responsive.bootstrap4.min.js"></script> 
    <script src="<?php echo base_url()?>assets/plugins/datatables/dataTables.select.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.price_format.min.js"></script>
    <!-- Script For Date & Time -->


    <script type="text/javascript">

        $(".uang").priceFormat({
            prefix: 'Rp ',
            centsSeparator: ',',
        }); 

        function checkTime(i) {
            if (i < 10) {
                i = "0" + i;
            }
            return i;
        }

        function startTime() {
            var today = new Date();
            var hr = today.getHours();
            var min = today.getMinutes();
            var sec = today.getSeconds();
            ap = (hr < 12) ? "<span>AM</span>" : "<span>PM</span>";
            //hr = (hr == 0) ? 12 : hr;
            //hr = (hr > 12) ? hr - 12 : hr;
            //Add a zero in front of numbers<10
            //hr = checkTime(hr);
            min = checkTime(min);
            sec = checkTime(sec);
            document.getElementById("clock_template").innerHTML = hr + ":" + min + ":" + sec;

            var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
            var days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
            var curWeekDay = days[today.getDay()];
            var curDay = today.getDate();
            var curMonth = months[today.getMonth()];
            var curYear = today.getFullYear();
            var date = curWeekDay + ", " + curDay + " " + curMonth + " " + curYear + " /";
            document.getElementById("date_template").innerHTML = date;

            var time = setTimeout(function() {
                startTime()
            }, 500);
        }
        startTime();
    </script>

</body>

</html>
