<!DOCTYPE html>
<html>
<head>

<title>Report Score</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

<h3>Report Score</h3>

<form method="post">

<div class="mb-3">
<label><?= $match->tim1 ?></label>
<input type="number"
       name="score1"
       class="form-control"
       required>
</div>

<div class="mb-3">
<label><?= $match->tim2 ?></label>
<input type="number"
       name="score2"
       class="form-control"
       required>
</div>

<button class="btn btn-success">
Simpan Hasil
</button>

</form>

</div>

</body>
</html>