<!DOCTYPE html>
<html>
<head>

<title>Daftar Turnamen</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="<?= base_url('assets/css/style.css') ?>">

</head>
<body>

<?php $this->load->view('user/navbar'); ?>

<div class="container mt-4">

<div class="card">

<div class="card-body">

<h2 class="page-title">

Daftar Turnamen
<?= strtoupper($game) ?>

</h2>

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
<label>Player 1</label>
<input type="text" name="player1" class="form-control" required>
</div>

<div class="mb-3">
<label>Player 2</label>
<input type="text" name="player2" class="form-control" required>
</div>

<div class="mb-3">
<label>Player 3</label>
<input type="text" name="player3" class="form-control" required>
</div>

<div class="mb-3">
<label>Player 4</label>
<input type="text" name="player4" class="form-control" required>
</div>

<div class="mb-3">
<label>Player 5</label>
<input type="text" name="player5" class="form-control" required>
</div>

<div class="mb-3">
<label>Cadangan 1 (Opsional)</label>
<input type="text" name="cadangan1" class="form-control">
</div>

<div class="mb-3">
<label>Cadangan 2 (Opsional)</label>
<input type="text" name="cadangan2" class="form-control">
</div>

<div class="mb-3">

<label>Metode Pembayaran</label>

<select
name="metode_bayar"
class="form-control">

<option>DANA</option>
<option>BRI</option>

</select>

</div>

<div class="alert alert-warning">

Biaya Pendaftaran :
<b>Rp 50.000</b>

</div>

<button
class="btn btn-success">

Daftar Turnamen

</button>

</form>

</div>

</div>

</div>

</body>
</html>