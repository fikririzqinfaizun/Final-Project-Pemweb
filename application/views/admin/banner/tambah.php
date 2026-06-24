<!DOCTYPE html>
<html>
<head>

<title>Tambah Banner</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<?php $this->load->view('admin/navbar'); ?>

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">

            <h3 class="mb-0">Tambah Banner</h3>

        </div>

        <div class="card-body">

            <form action="<?= site_url('banner/tambah') ?>"
                  method="post"
                  enctype="multipart/form-data">

                <label class="form-label">
                    Upload Gambar
                </label>

                <input type="file"
                       name="gambar"
                       class="form-control mb-3"
                       accept="image/*"
                       required>

                <label class="form-label">
                    Status
                </label>

                <select name="status"
                        class="form-control mb-3">

                    <option value="Aktif">
                        Aktif
                    </option>

                    <option value="Nonaktif">
                        Nonaktif
                    </option>

                </select>

                <button type="submit"
                        class="btn btn-success">

                    Simpan Banner

                </button>

                <a href="<?= site_url('banner') ?>"
                   class="btn btn-secondary">

                    Kembali

                </a>

            </form>

        </div>

    </div>

</div>

</body>
</html>