<!DOCTYPE html>
<html>
<head>

<title>Tambah Tim</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

</head>
<body>

<?php $this->load->view('admin/navbar'); ?>

<div class="container mt-4">

    <h2>Tambah Tim</h2>

    <form method="post">

        <div class="mb-3">
            <label>Nama Tim</label>
            <input
                type="text"
                name="nama_tim"
                class="form-control"
                required>
        </div>

        <div class="mb-3">
    <label>Game</label>

<input
    type="text"
    name="game"
    class="form-control"
    value="<?= isset($game) ? $game : $this->input->post('game') ?>"
    readonly>

        <option value="">-- Pilih Game --</option>

        <option value="Mobile Legends">
            Mobile Legends
        </option>

        <option value="PUBG Mobile">
            PUBG Mobile
        </option>

        <option value="Free Fire">
            Free Fire
        </option>

        <option value="Honor of Kings">
            Honor of Kings
        </option>

    </select>
</div>

        <div class="mb-3">
            <label>Kapten Tim</label>
            <input
                type="text"
                name="kapten"
                class="form-control"
                required>
        </div>

        <div class="mb-3">
            <label>Asal Kota</label>
            <input
                type="text"
                name="asal_kota"
                class="form-control"
                required>
        </div>

        <div class="mb-3">
            <label>Status Pembayaran</label>

            <select
                name="status_bayar"
                class="form-control">

                <option value="Belum Bayar">
                    Belum Bayar
                </option>

                <option value="Sudah Bayar">
                    Sudah Bayar
                </option>

            </select>
        </div>

        <button
            type="submit"
            class="btn btn-success">

            Simpan

        </button>

        <a href="<?= site_url('tim') ?>"
           class="btn btn-secondary">

            Kembali

        </a>

    </form>

</div>

</body>
</html>