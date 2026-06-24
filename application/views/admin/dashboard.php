<!DOCTYPE html>
<html>
<head>

<title>Dashboard Admin</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

</head>

<body>

<?php $this->load->view('admin/navbar'); ?>

<div class="container mt-4">

    <div class="header">

        <h1 class="page-title">
            Admin
        </h1>

        <h4 class="page-title">
            Selamat Datang, <?= $nama ?>
        </h4>

    </div>

    <div class="row">

        <div class="col-md-3 mb-4">

            <div class="card card-custom shadow">

                <div class="card-body text-center">


                    <h5 class="page-title">Total Turnamen</h5>

                    <div class="angka">

                        <?= $jumlah_turnamen ?>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-3 mb-4">

            <div class="card card-custom shadow">

                

            </div>

        </div>

        <div class="col-md-3 mb-4">

            <div class="card card-custom shadow">

                <div class="card-body text-center">

                    <h5 class="page-title">Total Peserta</h5>

                    <div class="angka">

                        <?= $jumlah_peserta ?>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-3 mb-4">

            <div class="card card-custom shadow">

                

            </div>

        </div>

    </div>

    <div class="card card-custom shadow">

        <div class="card-body">

            <h4 class="page-title">
                Menu Admin
            </h4>

            <hr>

            <div class="row">

                <div class="col-md-3 mb-3">

                    <a href="<?= site_url('turnamen') ?>"
                       class="btn btn-primary w-100">

                        Kelola Turnamen

                    </a>

                </div>

                <div class="col-md-3 mb-3">

                    <a href="<?= site_url('tim') ?>"
                       class="btn btn-success w-100">

                        Kelola Tim

                    </a>

                </div>

                <div class="col-md-3 mb-3">

                    <a href="<?= site_url('peserta') ?>"
                       class="btn btn-warning w-100">

                        Kelola Peserta

                    </a>

                </div>

                <div class="col-md-3 mb-3">

                    <a href="<?= site_url('bracketadmin') ?>"
                       class="btn btn-danger w-100">

                        Kelola Bracket

                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>