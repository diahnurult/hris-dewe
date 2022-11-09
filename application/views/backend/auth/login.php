<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="<?= base_url('assets/template/backend/') ?>dist/css/adminlte.min.css?v=3.2.0">
    <script>
    </script>
</head>

<body class="hold-transition login-page">
    <div class="login-box">

        <div class="card card-outline card-primary">
            <div class="card-header text-center"><b>LOGIN</b></a></div>
            <div class="card-body">
                <?= $this->session->flashdata('msg'); ?>
                <form class="user" action="<?= base_url('dashboard');?>" method="post">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mb-1 mt-auto">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
            </div>
        </div>


        <script src="<?= base_url('assets/') ?>plugins/jquery/jquery.min.js"></script>

        <script src="<?= base_url('assets/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="<?= base_url('assets/template/backend/') ?>dist/js/adminlte.min.js?v=3.2.0"></script>
</body>

</html>