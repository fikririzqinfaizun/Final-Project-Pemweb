<!DOCTYPE html>
<html>
<head>
<title>Edit Tim</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>

<div class="container mt-4">

<h2>Edit Tim</h2>

<form method="post">

<div class="mb-3">

<label>Nama Tim</label>

<input
type="text"
name="nama_tim"
class="form-control"
value="<?= $tim->nama_tim ?>">

</div>

<div class="mb-3">

<label>Game</label>

<input
type="text"
name="game"
class="form-control"
value="<?= $tim->game ?>">

</div>

<div class="mb-3">

<label>Kapten</label>

<input
type="text"
name="kapten"
class="form-control"
value="<?= $tim->kapten ?>">

</div>

<button class="btn btn-warning">

Update

</button>

</form>

</div>

</body>
</html>