<!DOCTYPE html>
<html>
<head>

<title>Daftar Tim</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>

<?php $this->load->view('user/navbar'); ?>

<div class="container mt-4">

<h2>Daftar Tim Turnamen</h2>

<table class="table table-bordered">

<tr>
<th>Nama Tim</th>
<th>Game</th>
<th>Kapten</th>
<th>Status Pembayaran</th>
</tr>

<?php foreach($tim as $t): ?>

<tr>

<td><?= $t->nama_tim ?></td>
<td><?= $t->game ?></td>
<td><?= $t->kapten ?></td>

<td>

<?php if($t->status_bayar=='Sudah Bayar'): ?>

<span class="badge bg-success">

✔ Sudah Bayar

</span>

<?php else: ?>

<span class="badge bg-danger">

✘ Belum Bayar

</span>

<?php endif; ?>

</td>

</tr>

<?php endforeach; ?>

</table>

</div>

</body>
</html>