<!DOCTYPE html>
<html>
<head>

<title>Tambah Pertandingan</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

</head>
<body>

<div class="container mt-4">

<h2>Tambah Pertandingan</h2>

<form method="post">

<label>Turnamen</label>

<select name="turnamen_id"
class="form-control mb-3">

<?php foreach($turnamen as $t): ?>

<option value="<?= $t->id ?>">

<?= $t->nama_turnamen ?>

</option>

<?php endforeach; ?>

</select>

<label>Tim 1</label>

<select name="tim1_id"
class="form-control mb-3">

<?php foreach($tim as $t): ?>

<option value="<?= $t->id ?>">

<?= $t->nama_tim ?>

</option>

<?php endforeach; ?>

</select>

<label>Tim 2</label>

<select name="tim2_id"
class="form-control mb-3">

<?php foreach($tim as $t): ?>

<option value="<?= $t->id ?>">

<?= $t->nama_tim ?>

</option>

<?php endforeach; ?>

</select>

<label>Tanggal</label>

<input
type="date"
name="tanggal"
class="form-control mb-3">

<button class="btn btn-primary">

Simpan

</button>

</form>

</div>

</body>
</html>