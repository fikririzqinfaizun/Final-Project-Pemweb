<!DOCTYPE html>
<html>
<head>

<title>Kelola Banner</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

</head>

<body>

<?php $this->load->view('admin/navbar'); ?>

<div class="container mt-4">

    <h1 class="page-title mb-4">
        🖼️ Kelola Banner
    </h1>

    <a href="<?= site_url('banner/tambah') ?>"
       class="btn btn-info mb-4">

        Tambah Banner

    </a>

    <div class="row">

        <?php foreach($banner as $b): ?>

        <div class="col-md-6 mb-4">

            <div class="card shadow-lg border-0">

                <img src="<?= base_url('uploads/banner/'.$b->gambar) ?>"
                     class="card-img-top"
                     style="
                     height:280px;
                     object-fit:cover;
                     border-radius:10px 10px 0 0;
                     ">

                <div class="card-body text-center">

                    <a href="<?= site_url('banner/hapus/'.$b->id) ?>"
                       class="btn btn-danger"
                       onclick="return confirm('Yakin ingin menghapus banner ini?')">

                        🗑 Hapus Banner

                    </a>

                </div>

            </div>

        </div>

        <?php endforeach; ?>

    </div>

</div>

</body>
</html>