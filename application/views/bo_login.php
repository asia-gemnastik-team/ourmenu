<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Highdmin - Responsive Bootstrap 4 Admin Dashboard</title>
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

</head>

<body>

    <!-- Begin page -->
    <div class="accountbg" style="background: url(<?= base_url('assets/images/bg-1.jpg'); ?>);background-size: cover;background-position: center;"></div>

    <div class="wrapper-page account-page-full">

        <div class="card">
            <div class="card-block">

                <div class="account-box">

                    <div class="card-box p-5">
                        <h2 class="text-uppercase text-center pb-4">
                            <a href="index.html" class="text-success">
                                <span><img src="<?= base_url('assets/images/logo.png'); ?>" alt="" height="26"></span>
                            </a>
                        </h2>

                        <form class="" action="#">

                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="emailaddress">Email address</label>
                                    <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <a href="page-recoverpw.html" class="text-muted float-right"><small>Forgot your password?</small></a>
                                    <label for="password">Password</label>
                                    <input class="form-control" type="password" required="" id="password" placeholder="Enter your password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">

                                    <div class="checkbox checkbox-custom">
                                        <input id="remember" type="checkbox" checked="">
                                        <label for="remember">
                                            Remember me
                                        </label>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group row text-center">
                                <div class="col-12">
                                    <button class="btn btn-block btn-custom waves-effect waves-light" type="submit">Sign In</button>
                                </div>
                            </div>

                        </form>

                        <div class="row m-t-50">
                            <div class="col-sm-12 text-center">
                                <p class="text-muted">Don't have an account? <a href="page-register.html" class="text-dark ml-1"><b>Sign Up</b></a></p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div class="m-t-40 text-center">
            <p class="account-copyright">2018 - 2019 ?? Highdmin. <span class="d-none d-sm-inline-block"> - Coderthemes.com</span></p>
        </div>

    </div>


    <!-- jQuery  -->
    <script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/waves.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jquery.slimscroll.js'); ?>"></script>

    <!-- App js -->
    <script src="<?= base_url('assets/js/jquery.core.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jquery.app.js'); ?>"></script>

</body>

</html>