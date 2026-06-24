<?php

$notif_chat = $this->db->query("
    SELECT COUNT(DISTINCT sender_id) total
    FROM messages
    WHERE receiver_id = 1
    AND is_read = 0
")->row()->total;

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">

<div class="container">

    <a class="navbar-brand fw-bold" href="<?= site_url('dashboard/admin') ?>">
        NAZARICK CUP 
    </a>

    <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarAdmin">

        <span class="navbar-toggler-icon"></span>

    </button>

    <div
        class="collapse navbar-collapse"
        id="navbarAdmin">

        <ul class="navbar-nav ms-auto">

            <li class="nav-item">
                <a
                    class="nav-link"
                    href="<?= site_url('dashboard/admin') ?>">

                    Dashboard

                </a>
            </li>

                    <li class="nav-item">

                        <a class="nav-link"
                            href="<?= site_url('banner') ?>">

                    Banner

                        </a>

                    </li>

            <li class="nav-item">
                <a
                    class="nav-link"
                    href="<?= site_url('turnamen') ?>">

                    Turnamen

                </a>
            </li>

            <li class="nav-item">
                <a
                    class="nav-link"
                    href="<?= site_url('tim') ?>">

                    Tim

                </a>
            </li>

            <li class="nav-item">
                <a
                    class="nav-link"
                    href="<?= site_url('peserta') ?>">

                    Peserta

                </a>
            </li>

            <li class="nav-item">
                <a
                    class="nav-link text-danger"
                    href="<?= site_url('auth/logout') ?>">

                    Logout

                </a>
            </li>

            <li class="nav-item">
                 <a class="nav-link" href="<?= site_url('bracketadmin') ?>">
                    Kelola Bracket
                    </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('chat-users') ?>">
                    💬 Chat User
                    <?php if($notif_chat > 0): ?>
                        <span class="badge bg-danger">
                            <?= $notif_chat ?>
                        </span>
                    <?php endif; ?>
                </a>
            </li>
        </ul>

    </div>

</div>

</nav>

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>