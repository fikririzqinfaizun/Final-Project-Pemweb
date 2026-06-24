<!DOCTYPE html>
<html>
<head>
<title>Pilih Game</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

</head>
<body>

<div class="container mt-5">

    <h2 class="mb-4">Pilih Game Turnamen</h2>

    <div class="row">

        <div class="col-md-3">
            <a href="<?= site_url('tim/create/Mobile Legends') ?>" class="btn btn-primary w-100 mb-3">
                Mobile Legends
            </a>
        </div>

        <div class="col-md-3">
            <a href="<?= site_url('tim/create/PUBG Mobile') ?>" class="btn btn-success w-100 mb-3">
                PUBG Mobile
            </a>
        </div>

        <div class="col-md-3">
            <a href="<?= site_url('tim/create/Free Fire') ?>" class="btn btn-danger w-100 mb-3">
                Free Fire
            </a>
        </div>

        <div class="col-md-3">
            <a href="<?= site_url('tim/create/Honor of Kings') ?>" class="btn btn-warning w-100 mb-3">
                Honor of Kings
            </a>
        </div>

    </div>

</div>

</body>
</html>