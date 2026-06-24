<!DOCTYPE html>
<html>
<head>
    <title>Tambah Turnamen</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>

<div class="container mt-4">

<h2>Tambah Turnamen</h2>

<form method="post">

    <div class="mb-3">

        <label>Nama Turnamen</label>

        <input type="text"
               name="nama_turnamen"
               class="form-control"
               required>

    </div>

    <div class="mb-3">

        <label>Game</label>

        <input type="text"
               name="game"
               class="form-control"
               required>

    </div>

    <div class="mb-3">

        <label>Tanggal Mulai</label>

        <input type="date"
               name="tanggal_mulai"
               class="form-control"
               required>

    </div>

    <div class="mb-3">

        <label>Hadiah</label>

        <input type="text"
               name="hadiah"
               class="form-control"
               required>

    </div>

    <div class="mb-3">

        <label>Status</label>

        <select name="status"
                class="form-control">

            <option>Pendaftaran</option>
            <option>Berlangsung</option>
            <option>Selesai</option>

        </select>

    </div>

    <button class="btn btn-primary">

        Simpan

    </button>

</form>

</div>

</body>
</html>