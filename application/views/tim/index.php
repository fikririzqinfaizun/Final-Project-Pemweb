<!DOCTYPE html>
<html>
<head>

<title>Data Tim</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

</head>

<body>

<?php $this->load->view('admin/navbar'); ?>

<div class="container mt-4">

<h2 class="page-title mb-4">
👥 Data Tim Peserta
</h2>

<table class="table table-dark table-bordered table-hover">

<thead>

<tr>

<th>No</th>
<th>Nama Tim</th>
<th>Game</th>
<th>Player 1</th>
<th>Player 2</th>
<th>Player 3</th>
<th>Player 4</th>
<th>Player 5</th>
<th>Status Bayar</th>
<th>Tanggal Daftar</th>
<th>Aksi</th>

</tr>

</thead>

<tbody>

<?php $no=1; ?>

<?php foreach($tim as $t): ?>

<tr>

<td><?= $no++ ?></td>

<td><?= $t->nama_tim ?></td>

<td><?= $t->game ?></td>

<td><?= $t->player1 ?></td>

<td><?= $t->player2 ?></td>

<td><?= $t->player3 ?></td>

<td><?= $t->player4 ?></td>

<td><?= $t->player5 ?></td>

<td>

<?php if($t->status_bayar == 'Sudah Bayar'): ?>

<span class="badge bg-success">
Sudah Bayar
</span>

<?php else: ?>

<span class="badge bg-danger">
Belum Bayar
</span>

<?php endif; ?>

</td>

<td>
<?= date('d-m-Y H:i', strtotime($t->created_at)) ?>
</td>

<td>

<a
href="<?= site_url('tim/edit/'.$t->id) ?>"
class="btn btn-warning btn-sm">

Edit

</a>

<a
href="<?= site_url('tim/hapus/'.$t->id) ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('Hapus tim ini?')">

Hapus

</a>

</td>

</tr>

<?php endforeach; ?>

</tbody>

</table>

</div>

</body>
</html>