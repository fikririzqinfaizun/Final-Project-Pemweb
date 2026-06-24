<!DOCTYPE html>
<html>
<head>
    <title>Kelola Bracket</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>

<?php $this->load->view('admin/navbar'); ?>

<div class="container mt-4">

    <h2 class="page-title">Kelola Bracket</h2>

    <div class="row">

        <div class="col-md-3 mb-3">
            <div class="card shadow">
                <div class="card-body text-center">

                    <h5>Mobile Legends</h5>

                    <a href="<?= site_url('bracketadmin/game/ml') ?>"
                       class="btn btn-primary">
                        Kelola
                    </a>

                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card shadow">
                <div class="card-body text-center">

                    <h5>PUBG Mobile</h5>

                    <a href="<?= site_url('bracketadmin/game/pubg') ?>"
                       class="btn btn-primary">
                        Kelola
                    </a>

                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card shadow">
                <div class="card-body text-center">

                    <h5>Free Fire</h5>

                    <a href="<?= site_url('bracketadmin/game/ff') ?>"
                       class="btn btn-primary">
                        Kelola
                    </a>

                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card shadow">
                <div class="card-body text-center">

                    <h5>Honor of Kings</h5>

                    <a href="<?= site_url('bracketadmin/game/hok') ?>"
                       class="btn btn-primary">
                        Kelola
                    </a>

                </div>
            </div>
        </div>

    </div>

</div>

</body>
</html>