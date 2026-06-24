<!DOCTYPE html>
<html>
<head>

<title>Bracket Tournament</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

<style>

.game-card{
    background:#343a40;
    border-radius:15px;
    padding:25px;
    height:140px;

    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;

    transition:.3s;
    box-shadow:0 5px 15px rgba(0,0,0,.3);
}

.game-card:hover{
    transform:translateY(-5px);
}

.game-title{
    color:white;
    font-size:16px;
    font-weight:600;
    text-align:center;
    margin-bottom:15px;
    line-height:1.3;
}
.game-btn{
    min-width:150px;
}

</style>

</head>

<body>

<?php $this->load->view('user/navbar'); ?>

<div class="container mt-5">

<h2 class="page-title mb-5">
🏆 Bracket Tournament
</h2>

<div class="row">

<div class="col-md-6 col-lg-3 mb-4">

<div class="game-card">

<div class="game-title">
Mobile Legends
</div>

<a
href="<?= site_url('bracket/game/ml') ?>"
class="btn btn-primary game-btn">

Lihat Bracket

</a>

</div>

</div>

<div class="col-md-6 col-lg-3 mb-4">

<div class="game-card">

<div class="game-title">
PUBG Mobile
</div>

<a
href="<?= site_url('bracket/game/pubg') ?>"
class="btn btn-primary game-btn">

Lihat Bracket

</a>

</div>

</div>

<div class="col-md-6 col-lg-3 mb-4">

<div class="game-card">

<div class="game-title">
Free Fire
</div>

<a
href="<?= site_url('bracket/game/ff') ?>"
class="btn btn-primary game-btn">

Lihat Bracket

</a>

</div>

</div>

<div class="col-md-6 col-lg-3 mb-4">

<div class="game-card">

<div class="game-title">
Honor Of Kings
</div>

<a
href="<?= site_url('bracket/game/hok') ?>"
class="btn btn-primary game-btn">

Lihat Bracket

</a>

</div>

</div>

</div>

</div>

</body>
</html>