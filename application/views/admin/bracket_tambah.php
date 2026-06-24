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

    <div class="card card-custom shadow">

        <div class="card-body">

            <h2 class="mb-3">
                🎲 Generate Bracket Otomatis
            </h2>

            <hr>

            <div class="mb-3">

                <label>Game</label>

                <input
                    type="text"
                    class="form-control"
                    value="<?= $game ?>"
                    readonly>

            </div>

            <div class="alert alert-info">

                Sistem akan mengambil seluruh tim yang telah terdaftar pada game
                <b><?= $game ?></b>,
                mengacak lawan secara otomatis dan membuat pertandingan Round 1.

            </div>

            <form action="<?= site_url('bracketadmin/generate') ?>" method="post">

    <input
        type="hidden"
        name="game"
        value="<?= $game ?>">

    <button
        type="submit"
        class="btn btn-success btn-lg">

        🎲 Generate Bracket

    </button>

</form>

           <a
href="<?= site_url('bracketadmin') ?>"
class="btn btn-secondary btn-lg">
← Kembali
</a>

        </div>

    </div>

</div>

</body>
</html>