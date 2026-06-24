<!DOCTYPE html>
<html>
<head>

<title>Data Pertandingan</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

</head>
<body>

<div class="container mt-4">

<h2>Data Pertandingan</h2>

<a href="<?= site_url('pertandingan/tambah') ?>"
class="btn btn-success mb-3">

Tambah Match

</a>

<table class="table table-bordered">

<tr>

<th>Turnamen</th>
<th>Tim 1</th>
<th>Tim 2</th>
<th>Tanggal</th>
<th>Hasil</th>
<th>Status</th>
<th>Aksi</th>

</tr>

<?php foreach($pertandingan as $p): ?>

<tr>

<td><?= $p->nama_turnamen ?></td>
<td><?= $p->tim1 ?></td>
<td><?= $p->tim2 ?></td>
<td><?= $p->tanggal ?></td>
<td><?= $p->hasil ?></td>
<td><?= $p->status ?></td>

<td>

<a href="<?= site_url('pertandingan/edit/'.$p->id) ?>"
class="btn btn-warning btn-sm">

Input Hasil

</a>

<a href="<?= site_url('pertandingan/hapus/'.$p->id) ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('Yakin?')">

Hapus

</a>

</td>

</tr>

<?php endforeach; ?>

</table>

</div>

</body>
</html>