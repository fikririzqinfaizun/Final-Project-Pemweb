<!DOCTYPE html>
<html>
<head>

<title>Edit Status Pembayaran</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="<?= base_url('assets/css/style.css') ?>">

</head>
<body>

<?php $this->load->view('admin/navbar'); ?>

<div class="container mt-4">

<div class="card card-custom">

<div class="card-body">

<h3>
Edit Status Pembayaran
</h3>

<form method="post">

<div class="mb-3">

<label>Status Bayar</label>

<select
name="status_bayar"
class="form-control">

<option value="Belum Bayar"
<?= $peserta->status_bayar=='Belum Bayar'?'selected':'' ?>>

Belum Bayar

</option>

<option value="Sudah Bayar"
<?= $peserta->status_bayar=='Sudah Bayar'?'selected':'' ?>>

Sudah Bayar

</option>

</select>

</div>

<button
class="btn btn-success">

Simpan

</button>

</form>

</div>

</div>

</div>

</body>
</html>