<!DOCTYPE html>
<html>
<head>

<title>Input Hasil</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

</head>
<body>

<div class="container mt-4">

<h2>Input Hasil Pertandingan</h2>

<form method="post">

<label>Hasil</label>

<input
type="text"
name="hasil"
class="form-control mb-3"
placeholder="Contoh: 2 - 1">

<label>Status</label>

<select
name="status"
class="form-control mb-3">

<option>Belum Main</option>
<option>Selesai</option>

</select>

<button class="btn btn-warning">

Update

</button>

</form>

</div>

</body>
</html>