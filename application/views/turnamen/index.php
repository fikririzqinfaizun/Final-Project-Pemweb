<!DOCTYPE html>
<html>
<head>
    <title>Data Turnamen</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>

<?php $this->load->view('admin/navbar'); ?>

<div class="container mt-4"></div>
<div class="container mt-4">

    <h2>Data Turnamen</h2>

    <a href="<?= site_url('turnamen/tambah') ?>"
       class="btn btn-success mb-3">
        Tambah Turnamen
    </a>

    <table class="table table-bordered table-striped">

        <thead>

        <tr>
            <th>ID</th>
            <th>Nama Turnamen</th>
            <th>Game</th>
            <th>Tanggal</th>
            <th>Hadiah</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>

        </thead>

        <tbody>

        <?php foreach($turnamen as $t): ?>

        <tr>

            <td><?= $t->id ?></td>

            <td><?= $t->nama_turnamen ?></td>

            <td><?= $t->game ?></td>

            <td><?= $t->tanggal_mulai ?></td>

            <td><?= $t->hadiah ?></td>

            <td><?= $t->status ?></td>

            <td>

                <a href="<?= site_url('turnamen/detail/'.$t->id) ?>"
                   class="btn btn-info btn-sm">

                    Detail

                </a>

                <a href="<?= site_url('turnamen/edit/'.$t->id) ?>"
                   class="btn btn-warning btn-sm">

                    Edit

                </a>

                <a href="<?= site_url('turnamen/hapus/'.$t->id) ?>"
                   class="btn btn-danger btn-sm"
                   onclick="return confirm('Yakin?')">

                    Hapus

                </a>

            </td>

        </tr>

        <?php endforeach; ?>

        </tbody>

    </table>

</div>

</body>
</html>