<!DOCTYPE html>
<html>
<head>

<title><?= $game ?></title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">



</head>
<body>

<div class="container mt-4">

<h2 class="page-title">
Daftar Tim <?= $judul_game ?>
</h2>

<table class="table table-bordered">

<thead>

<tr>

<th>No</th>
<th>Nama Tim</th>
<th>Player 1</th>
<th>Player 2</th>
<th>Player 3</th>
<th>Player 4</th>
<th>Player 5</th>
<th>Status Bayar</th>

</tr>

</thead>

<tbody>

<?php $no=1; foreach($tim as $t): ?>

<tr>

<td><?= $no++ ?></td>

<td><?= $t->nama_tim ?></td>

<td><?= $t->player1 ?></td>

<td><?= $t->player2 ?></td>

<td><?= $t->player3 ?></td>

<td><?= $t->player4 ?></td>

<td><?= $t->player5 ?></td>

<td><?= $t->status_bayar ?></td>

</tr>

<?php endforeach; ?>

</tbody>

</table>

</div>

</body>
</html>