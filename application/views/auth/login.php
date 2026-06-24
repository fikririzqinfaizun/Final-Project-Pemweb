<!DOCTYPE html>
<html>
<head>

    <title>Login TournamentHub</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

</head>

<body class="bg-dark">

<div class="container">

    <div class="row justify-content-center mt-5">

        <div class="col-md-4">

            <div class="card shadow">

                <div class="card-header bg-primary text-white text-center">

                    <h3>TournamentHub</h3>

                </div>

                <div class="card-body">

                    <?php if(isset($error)): ?>

                    <div class="alert alert-danger">

                        <?= $error ?>

                    </div>

                    <?php endif; ?>

                    <form method="post">

                        <div class="mb-3">

                            <label>Username</label>

                            <input
                                type="text"
                                name="username"
                                class="form-control"
                                required>

                        </div>

                        <div class="mb-3">

                            <label>Password</label>

                            <input
                                type="password"
                                name="password"
                                class="form-control"
                                required>

                        </div>

                        <button class="btn btn-primary w-100">

                            Login

                        </button>

                    </form>

                    <hr>

                    <a href="<?= site_url('auth/register') ?>">

                        Belum punya akun?

                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>