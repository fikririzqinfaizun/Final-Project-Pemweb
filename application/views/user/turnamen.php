<!DOCTYPE html>
<html>
<head>

<title>Turnamen</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

<style>

.header h4,
.header p{
    color:white !important;
}

.card-custom h4,
.card-custom h5,
.card-custom p{
    color:white !important;
}

.card-body h4,
.card-body h5{
    color:white !important;
}

.angka{
    color:#00f5ff !important;
    font-size:42px;
    font-weight:bold;
}

hr{
    border-color:rgba(255,255,255,.2);
}

</style>

</head>
<body>

<?php $this->load->view('user/navbar'); ?>

<div class="container mt-4">

<h1 class="page-title">
🏆 Pilih Turnamen
</h1>

<div class="row">

<div class="col-md-4 mb-4">
<div class="card card-custom">
<div class="card-body text-center">

<h1>⚔️</h1>
<h4 >Mobile Legends</h4>

<a href="<?= site_url('peserta/daftar/ml') ?>"
class="btn btn-primary">
Ikut Turnamen
</a>

</div>
</div>
</div>

<div class="col-md-4 mb-4">
<div class="card card-custom">
<div class="card-body text-center">

<h1>🔫</h1>
<h4>PUBG Mobile</h4>

<a href="<?= site_url('peserta/daftar/pubg') ?>"
class="btn btn-primary">
Ikut Turnamen
</a>

</div>
</div>
</div>

<div class="col-md-4 mb-4">
<div class="card card-custom">
<div class="card-body text-center">

<h1>🔥</h1>
<h4>Free Fire</h4>

<a href="<?= site_url('peserta/daftar/ff') ?>"
class="btn btn-primary">
Ikut Turnamen
</a>

</div>
</div>
</div>

<div class="col-md-4 mb-4">
<div class="card card-custom">
<div class="card-body text-center">

<h1>👑</h1>
<h4>Honor of Kings</h4>

<a href="<?= site_url('peserta/daftar/hok') ?>"
class="btn btn-primary">
Ikut Turnamen
</a>

</div>
</div>
</div>


</div>

</div>

</body>
</html>