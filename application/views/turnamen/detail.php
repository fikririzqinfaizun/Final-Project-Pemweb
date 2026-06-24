<!DOCTYPE html>
<html>
<head>
    <title>Detail Turnamen</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>

<div class="container mt-5">

<div class="card">

<div class="card-header bg-primary text-white">

    Detail Turnamen

</div>

<div class="card-body">

    <h3>

        <?= $turnamen->nama_turnamen ?>

    </h3>

    <hr>

    <p>

        <b>Game :</b>
        <?= $turnamen->game ?>

    </p>

    <p>

        <b>Tanggal :</b>
        <?= $turnamen->tanggal_mulai ?>

    </p>

    <p>

        <b>Hadiah :</b>
        <?= $turnamen->hadiah ?>

    </p>

    <p>

        <b>Status :</b>
        <?= $turnamen->status ?>

    </p>

</div>

</div>

</div>

</body>
</html>