
<!DOCTYPE html>
<html>
<head>

<title>Turnamen Esports</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

<style>

.game-card{
    background:rgba(255,255,255,.05);
    border:1px solid rgba(255,255,255,.1);
    border-radius:20px;
    overflow:hidden;
    transition:.3s;
    height:100%;
}

.game-card:hover{
    transform:translateY(-8px);
    box-shadow:0 15px 35px rgba(0,0,0,.4);
}

.game-header{
    height:120px;

    display:flex;
    align-items:center;
    justify-content:center;

    background:linear-gradient(
        135deg,
        #2563eb,
        #7c3aed
    );
}

.game-name{
    color:white;
    font-size:24px;
    font-weight:700;
    text-align:center;
    margin:0;
}

.game-body{
    padding:25px;
}

.game-desc{
    color:#cbd5e1;
    text-align:center;
    min-height:70px;
    margin-bottom:20px;
}

.btn-game{
    width:100%;
    border:none;
    border-radius:12px;
    padding:12px;

    background:linear-gradient(
        90deg,
        #2563eb,
        #7c3aed
    );

    color:white;
    font-weight:600;
}

.btn-game:hover{
    color:white;
    opacity:.9;
}

.page-title{
    text-align:center;
    color:white;
    font-weight:700;
    margin-bottom:30px;
}

</style>

</head>

<body>

<?php $this->load->view('user/navbar'); ?>

<div class="container mt-4">

    <h1 class="page-title">
        Turnamen Esports
    </h1>

    <div class="row">

        <!-- Mobile Legends -->
        <div class="col-md-6 col-lg-3 mb-4">

            <div class="game-card">

                <div class="game-header">
                    
                </div>

                <div class="game-body">

                    <p class="game-desc">
                        Lihat seluruh tim yang mengikuti turnamen Mobile Legends.
                    </p>

                    <a href="<?= site_url('turnamen/game/Mobile-Legends') ?>"
                       class="btn btn-game">

                        Lihat Daftar Tim

                    </a>

                </div>

            </div>

        </div>

        <!-- PUBG -->
        <div class="col-md-6 col-lg-3 mb-4">

            <div class="game-card">

                <div class="game-header">
                    
                </div>

                <div class="game-body">

                    <p class="game-desc">
                        Lihat seluruh tim yang mengikuti turnamen PUBG Mobile.
                    </p>

                    <a href="<?= site_url('turnamen/game/PUBG-Mobile') ?>"
                       class="btn btn-game">

                        Lihat Daftar Tim

                    </a>

                </div>

            </div>

        </div>

        <!-- Free Fire -->
        <div class="col-md-6 col-lg-3 mb-4">

            <div class="game-card">

                <div class="game-header">
                    
                </div>

                <div class="game-body">

                    <p class="game-desc">
                        Lihat seluruh tim yang mengikuti turnamen Free Fire.
                    </p>

                    <a href="<?= site_url('turnamen/game/Free-Fire') ?>"
                       class="btn btn-game">

                        Lihat Daftar Tim

                    </a>

                </div>

            </div>

        </div>

        <!-- HOK -->
        <div class="col-md-6 col-lg-3 mb-4">

            <div class="game-card">

                <div class="game-header">
                    
                </div>

                <div class="game-body">

                    <p class="game-desc">
                        Lihat seluruh tim yang mengikuti turnamen Honor of Kings.
                    </p>

                    <a href="<?= site_url('turnamen/game/Honor-of-Kings') ?>"
                       class="btn btn-game">

                        Lihat Daftar Tim

                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>

