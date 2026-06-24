<!DOCTYPE html>
<html>
<head>

<title>Turnamen Tersedia</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

</head>
<body>

<?php $this->load->view('user/navbar'); ?>

<div class="container mt-4">

<h2 class="page-title">
📢 Status Turnamen
</h2>

<div class="row">

<?php foreach($turnamen as $t): ?>

<div class="col-md-3 mb-4">

<div class="card card-custom text-center p-4">

<h4><?= $t->game ?></h4>

<?php if($t->status_turnamen == 'Tersedia'): ?>

<span class="badge bg-success">
✅ Tersedia
</span>

<?php else: ?>

<span class="badge bg-danger">
❌ Tidak Tersedia
</span>

<?php endif; ?>

</div>

</div>

<?php endforeach; ?>

</div>

</div>

</body>
</html>