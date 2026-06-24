<!DOCTYPE html>
<html>
<head>

<title>Dashboard User</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

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

        <body>

<!-- SLIDER POSTER -->

<div class="container mt-3">

<div id="bannerSlider"
     class="carousel slide mb-4"
     data-bs-ride="carousel">

<div class="carousel-inner">

<?php
$active = true;

foreach($banner as $b):
?>

<div class="carousel-item <?= $active ? 'active' : '' ?>">

<img
src="<?= base_url('uploads/banner/'.$b->gambar) ?>"
class="d-block w-100 rounded shadow"
style="
height:400px;
object-fit:cover;
border-radius:20px;
">

</div>

<?php
$active = false;
endforeach;
?>

</div>

<button
class="carousel-control-prev"
type="button"
data-bs-target="#bannerSlider"
data-bs-slide="prev">

<span class="carousel-control-prev-icon"></span>

</button>

<button
class="carousel-control-next"
type="button"
data-bs-target="#bannerSlider"
data-bs-slide="next">

<span class="carousel-control-next-icon"></span>

</button>

</div>

</div>

<!-- DASHBOARD -->

<div class="container mt-4"></div>


    <div class="header">

        <h4 class="mt-3">
            Selamat Datang, <?= $nama ?>
        </h4>

        <p>
            Pilih game favoritmu dan ikuti turnamen esports yang tersedia.
        </p>

    </div>

    <div class="row">

        <div class="col-md-3 mb-4">

            <div class="card card-custom shadow">

            </div>

        </div>

        <div class="col-md-3 mb-4">

            <div class="card card-custom shadow">

            </div>

        </div>

    </div>

    <div class="card card-custom shadow">

        <div class="card-body">

            <h4>
                Menu
            </h4>

            <hr>

            <div class="row">

                <div class="col-md-3 mb-3">

                    <a href="<?= site_url('turnamenuser') ?>"
                       class="btn btn-primary w-100">

                        🏆 Turnamen

                    </a>

                </div>

                <div class="col-md-3 mb-3">

                    <a href="<?= site_url('timuser') ?>"
                       class="btn btn-success w-100">

                        👥 Daftar Tim

                    </a>

                </div>

                <div class="col-md-3 mb-3">

                    <a href="<?= site_url('bracket') ?>"
                       class="btn btn-warning w-100">

                        ⚔️ Bracket

                    </a>

                </div>

                <div class="col-md-3 mb-3">

                    <a href="<?= site_url('infoturnamen') ?>"
                                class="btn btn-info w-100">
                         📢 Info Turnamen
                    </a>

                </div>

            </div>

        </div>

    </div>

    <div class="card card-custom shadow mt-4">

        <div class="card-body">

            <h4>
                 Game Turnamen Tersedia
            </h4>

            <hr>

            <div class="row">

<div class="col-md-3 mb-4">

<div class="game-card">

<img src="<?= base_url('assets/img/ml.jpg') ?>">

<div class="overlay">
Mobile Legends
</div>

</div>

</div>

<div class="col-md-3 mb-4">

<div class="game-card">

<img src="<?= base_url('assets/img/pubg.jpg') ?>">

<div class="overlay">
PUBG Mobile
</div>

</div>

</div>

<div class="col-md-3 mb-4">

<div class="game-card">

<img src="<?= base_url('assets/img/ff.jpg') ?>">

<div class="overlay">
Free Fire
</div>

</div>

</div>

<div class="col-md-3 mb-4">

<div class="game-card">

<img src="<?= base_url('assets/img/hok.jpg') ?>">

<div class="overlay">
Honor Of Kings
</div>

</div>

</div>

</div>

                

            </div>

        </div>

    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>