<!DOCTYPE html>
<html>
<head>

<title>Info Turnamen</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

<style>

.poster-card{

    background:linear-gradient(
        135deg,
        rgba(0,245,255,.15),
        rgba(139,92,246,.15),
        rgba(236,72,153,.15)
    );

    border:1px solid rgba(255,255,255,.1);

    border-radius:25px;

    overflow:hidden;

    backdrop-filter:blur(15px);

    transition:.3s;
}

.poster-card:hover{

    transform:translateY(-8px);

    box-shadow:0 0 30px rgba(0,245,255,.4);
}

.poster-header{

    background:linear-gradient(
        90deg,
        #06b6d4,
        #8b5cf6
    );

    padding:20px;

    text-align:center;
}

.poster-title{

    color:white;

    font-size:24px;

    font-weight:bold;

    margin:0;
}

.poster-body{

    padding:25px;

    color:white;
}

.poster-info{

    margin-bottom:12px;

    font-size:16px;
}

.badge-status{

    padding:10px 20px;

    border-radius:30px;

    font-size:14px;
}

.status-open{

    background:#10b981;
}

.status-close{

    background:#ef4444;
}

</style>

</head>

<body>

<?php $this->load->view('user/navbar'); ?>

<div class="container mt-4">

<h1 class="page-title mb-4">
📢 Info Turnamen
</h1>

<div class="row">

<?php foreach($turnamen as $t): ?>

<div class="col-md-6 mb-4">

<div class="poster-card">

<div class="poster-header">

<h3 class="poster-title">
🏆 <?= $t->nama_turnamen ?>
</h3>

</div>

<div class="poster-body">

<div class="poster-info">
🎮 <b>Game :</b>
<?= $t->game ?>
</div>

<div class="poster-info">
📅 <b>Tanggal :</b>
<?= $t->tanggal_mulai ?>
</div>

<div class="poster-info">
💰 <b>Hadiah :</b>
<?= $t->hadiah ?>
</div>

<div class="poster-info">
📢 <b>Status :</b>

<?php if($t->status == 'Pendaftaran'): ?>

<span class="badge badge-status status-open">
Pendaftaran Dibuka
</span>

<?php else: ?>

<span class="badge badge-status status-close">
<?= $t->status ?>
</span>

<?php endif; ?>

</div>

<hr>

<div class="text-center">

</div>

</div>

</div>

</div>

<?php endforeach; ?>

</div>

</div>

</body>
</html>