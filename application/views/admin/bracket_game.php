<?php
$rounds = [];

$maxLevel = 0;

foreach($match as $m)
{
    $rounds[$m->bracket_level][] = $m;

    if($m->bracket_level > $maxLevel)
    {
        $maxLevel = $m->bracket_level;
    }
}

$juara = null;

foreach($match as $m)
{
    if($m->status_match == 'Juara')
    {
        $juara = $m;
        break;
    }
}
?>
<!DOCTYPE html>
<html>
<head>

<title><?= $game ?></title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

<style>

.bracket-wrapper{
    display:flex;
    gap:120px;
    overflow-x:auto;
    padding:30px;
}

.round{
    min-width:280px;
}

.round-title{
    text-align:center;
    color:white;
    font-size:22px;
    font-weight:bold;
    margin-bottom:25px;
    background:rgba(255,255,255,.08);
    padding:10px;
    border-radius:10px;
}

.match-box{
    background:#444;
    border-radius:10px;
    margin-bottom:40px;
    overflow:hidden;
    box-shadow:0 0 10px rgba(0,0,0,.2);
}

.team{
    padding:12px 15px;
    border-bottom:1px solid rgba(255,255,255,.1);
    color:white;
    font-weight:500;
}

.team:last-child{
    border-bottom:none;
}

.score{
    background:#ffc107;
    color:black;
    padding:2px 8px;
    border-radius:5px;
    font-size:12px;
}

.winner-column{
    min-width:250px;
}

</style>

</head>

<body>

<?php $this->load->view('admin/navbar'); ?>

<div class="container mt-4">

<h2 class="page-title">
Kelola Bracket <?= $game ?>
</h2>

<a href="<?= site_url('bracketadmin/reset/'.$kode) ?>"
class="btn btn-danger"
onclick="return confirm('Reset bracket?')">

Reset Bracket

</a>

<form
action="<?= site_url('bracketadmin/generate') ?>"
method="post"
class="d-inline">

<input
type="hidden"
name="game"
value="<?= $kode ?>">

<button
type="submit"
class="btn btn-success">

Generate Bracket

</button>

</form>

<hr>

<h3 class="page-title mb-4">
🏆 Preview Bracket
</h3>

<div class="bracket-wrapper">

<?php for($level=1;$level<=$maxLevel;$level++): ?>

<div class="round">

<div class="round-title">

<?php if($level == 1): ?>

ROUND 1

<?php else: ?>

ROUND <?= $level ?>

<?php endif; ?>

</div>

<?php if(isset($rounds[$level])): ?>

<?php foreach($rounds[$level] as $m): ?>

<div class="match-box">

<div class="team d-flex justify-content-between">

<span>

<?= !empty($m->tim1) ? $m->tim1 : 'TBD' ?>

</span>

<span class="score">

<?= $m->score1 ?>

</span>

</div>

<div class="team d-flex justify-content-between">

<span>

<?= !empty($m->tim2) ? $m->tim2 : 'TBD' ?>

</span>

<span class="score">

<?= $m->score2 ?>

</span>

</div>

<?php if(
    !empty($m->tim1)
    &&
    !empty($m->tim2)
    &&
    $m->status_match != 'Juara'
): ?>

<div class="p-2 text-center">

<button
class="btn btn-warning btn-sm"
data-bs-toggle="modal"
data-bs-target="#score<?= $m->id ?>">

✏️ Report Score

</button>

</div>

<?php endif; ?>

</div>

<div class="modal fade"
id="score<?= $m->id ?>"
tabindex="-1">

<div class="modal-dialog">

<div class="modal-content">

<form
action="<?= site_url('bracketadmin/report/'.$m->id) ?>"
method="post">

<div class="modal-header">

<h5 class="modal-title">
Report Score
</h5>

<button
type="button"
class="btn-close"
data-bs-dismiss="modal">
</button>

</div>

<div class="modal-body">

<label>
<?= $m->tim1 ?>
</label>

<input
type="number"
name="score1"
class="form-control mb-3"
required>

<label>
<?= $m->tim2 ?>
</label>

<input
type="number"
name="score2"
class="form-control"
required>

</div>

<div class="modal-footer">

<button
type="submit"
class="btn btn-success">

Simpan Hasil

</button>

</div>

</form>

</div>

</div>

</div>

<?php endforeach; ?>

<?php endif; ?>

</div>

<?php endfor; ?>

<div class="round winner-column">

<div class="round-title">
WINNER
</div>

<div class="match-box">

<div class="team text-center">

<?php if($juara): ?>

🏆 <?= $juara->winner ?>

<?php else: ?>

Menunggu Final

<?php endif; ?>

</div>

</div>

</div>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>