<!DOCTYPE html>
<html>
<head>
    <title>Edit Turnamen</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>

<div class="container mt-4">

<h2>Edit Turnamen</h2>

<form method="post">

    <div class="mb-3">

        <label>Nama Turnamen</label>

        <input type="text"
               name="nama_turnamen"
               class="form-control"
               value="<?= $turnamen->nama_turnamen ?>">

    </div>

    <div class="mb-3">

        <label>Game</label>

        <input type="text"
               name="game"
               class="form-control"
               value="<?= $turnamen->game ?>">

    </div>

    <div class="mb-3">

        <label>Tanggal Mulai</label>

        <input type="date"
               name="tanggal_mulai"
               class="form-control"
               value="<?= $turnamen->tanggal_mulai ?>">

    </div>

    <div class="mb-3">

        <label>Hadiah</label>

        <input type="text"
               name="hadiah"
               class="form-control"
               value="<?= $turnamen->hadiah ?>">

    </div>



    <div class="mb-3">

        <label>Status</label>

        <select name="status"
                class="form-control">

            <option <?= ($turnamen->status=='Pendaftaran')?'selected':'' ?>>
                Pendaftaran
            </option>

            <option <?= ($turnamen->status=='Berlangsung')?'selected':'' ?>>
                Berlangsung
            </option>

            <option <?= ($turnamen->status=='Selesai')?'selected':'' ?>>
                Selesai
            </option>

        </select>

    </div>

    <div class="mb-3">

<label>Status Turnamen</label>

<select
name="status_turnamen"
class="form-control">

<option value="Tersedia"
<?= $turnamen->status_turnamen=='Tersedia'?'selected':'' ?>>

Tersedia

</option>

<option value="Tidak Tersedia"
<?= $turnamen->status_turnamen=='Tidak Tersedia'?'selected':'' ?>>

Tidak Tersedia

</option>

</select>

</div>

    <button class="btn btn-warning">

        Update

    </button>

</form>

</div>

</body>
</html>