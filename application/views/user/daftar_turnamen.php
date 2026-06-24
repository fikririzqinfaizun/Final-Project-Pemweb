<!DOCTYPE html>
<html>
<head>

<title>Daftar Turnamen</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

</head>
<body>

<?php $this->load->view('user/navbar'); ?>

<div class="container mt-4">

<div class="card shadow">

<div class="card-header bg-primary text-white">

<h4>Pendaftaran Turnamen</h4>

<div class="mb-3">

<label>Game</label>

<input
type="text"
class="form-control"
value="<?= $game ?>"
readonly>

</div>

</div>

<div class="card-body">

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

<label>Nama Kapten / Player 1</label>

<input
type="text"
name="player1"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Player 2</label>

<input
type="text"
name="player2"
class="form-control">

</div>

<div class="mb-3">

<label>Player 3</label>

<input
type="text"
name="player3"
class="form-control">

</div>

<div class="mb-3">

<label>Player 4</label>

<input
type="text"
name="player4"
class="form-control">

</div>

<div class="mb-3">

<label>Player 5</label>

<input
type="text"
name="player5"
class="form-control">

</div>

<div class="mb-3">

<label>Cadangan 1 (Opsional)</label>

<input
type="text"
name="cadangan1"
class="form-control">

</div>

<div class="mb-3">

<label>Cadangan 2 (Opsional)</label>

<input
type="text"
name="cadangan2"
class="form-control">

</div>

<div class="mb-3">

<label>Biaya Pendaftaran</label>

<input
type="text"
class="form-control"
value="Rp 50.000"
readonly>

</div>

<div class="mb-3">

<label>Metode Pembayaran</label>

<select
name="metode_bayar"
class="form-control"
required>

<option value="">
-- Pilih Pembayaran --
</option>

<option value="DANA">
DANA
</option>

<option value="BRI">
Bank BRI
</option>

</select>

</div>

<div class="alert alert-info">

<b>DANA</b><br>
0812xxxxxxxx<br><br>

<b>Bank BRI</b><br>
123401234567890<br>
a.n TournamentHub

</div>



<button
type="submit"
class="btn btn-success">

Daftar Turnamen

</button>

</form>

</div>

</div>

</div>

</body>
</html>