<!DOCTYPE html>
<html>
<head>

<title>Daftar Tim</title>

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

</head>
<body>

<?php $this->load->view('user/navbar'); ?>

<div class="container mt-4">

<h2>Daftar Tim Turnamen</h2>

<table class="table table-bordered table-striped">

<thead>

<tr>

<th>No</th>
<th>Game</th>
<th>Nama Tim</th>
<th>Kapten</th>
<th>Metode Pembayaran</th>
<th>Status Bayar</th>

</tr>

</thead>

<tbody>

<?php $no=1; ?>

<?php foreach($tim as $t): ?>

<tr>

<td><?= $no++ ?></td>

<td><?= $t->game ?></td>

<td><?= $t->nama_tim ?></td>

<td><?= $t->player1 ?></td>

<td><?= $t->metode_bayar ?></td>

<td>

<?php if($t->status_bayar=='Sudah Bayar'): ?>

<span class="badge bg-success">

✔ Sudah Bayar

</span>

<?php else: ?>

<span class="badge bg-warning text-dark">

Menunggu Verifikasi

</span>

<?php endif; ?>

</td>

</tr>

<?php endforeach; ?>

</tbody>

</table>

</div>

</body>
</html>