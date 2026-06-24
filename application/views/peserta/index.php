<!DOCTYPE html>
<html>
<head>

<title>Data Peserta</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="<?= base_url('assets/css/style.css') ?>">

</head>
<body>

<?php $this->load->view('admin/navbar'); ?>

<div class="container mt-4">

<h1 class="page-title">
👥 Data Peserta Turnamen
</h1>

<div class="card card-custom">

<div class="card-body">

<table class="table table-bordered table-hover">

<thead>

<tr>

<th>No</th>
<th>Nama Tim</th>
<th>Anggota Tim</th>
<th>Game</th>
<th>Status Bayar</th>
<th>Aksi</th>

</tr>

</thead>

<tbody>

<?php $no=1; ?>
<?php foreach($peserta as $p): ?>

<tr>

<td><?= $no++ ?></td>

<td>
<b><?= $p->nama_tim ?></b>
</td>

<td>

<?= $p->player1 ?><br>
<?= $p->player2 ?><br>
<?= $p->player3 ?><br>
<?= $p->player4 ?><br>
<?= $p->player5 ?>

<?php if($p->cadangan1 != ''): ?>
<br><small>
Cadangan 1 :
<?= $p->cadangan1 ?>
</small>
<?php endif; ?>

<?php if($p->cadangan2 != ''): ?>
<br><small>
Cadangan 2 :
<?= $p->cadangan2 ?>
</small>
<?php endif; ?>

</td>

<td>
<?= $p->game ?>
</td>

<td>

<?php if($p->status_bayar=='Sudah Bayar'): ?>

<span class="badge bg-success">
✔ Sudah Bayar
</span>

<?php else: ?>

<span class="badge bg-danger">
✖ Belum Bayar
</span>

<?php endif; ?>

</td>

<td>

<a href="<?= site_url('peserta/edit/'.$p->id) ?>"
class="btn btn-warning btn-sm">

Edit Status

</a>

<a href="<?= site_url('peserta/hapus/'.$p->id) ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('Hapus peserta?')">

Hapus

</a>

</td>

</tr>

<?php endforeach; ?>

</tbody>

</table>

</div>

</div>

</div>

</body>
</html>