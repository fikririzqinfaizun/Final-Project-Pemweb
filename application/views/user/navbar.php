<nav class="navbar navbar-expand-lg navbar-dark custom-navbar fixed-top">

<div class="container">

    <a class="navbar-brand logo-text"
       href="<?= site_url('dashboard/user') ?>">
       NAZARICK CUP
    </a>

    <button class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarUser">

        <span class="navbar-toggler-icon"></span>

    </button>

    <div class="collapse navbar-collapse"
         id="navbarUser">

        <ul class="navbar-nav ms-auto">

            <li class="nav-item">
                <a class="nav-link"
                   href="<?= site_url('dashboard/user') ?>">
                    Dashboard
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-warning"
                   href="<?= site_url('auth/logout') ?>">
                    Logout
                </a>
            </li>

            <li class="nav-item">
                <a href="<?= site_url('chat/1') ?>"
                   class="chat-btn">
                    💬 Chat Admin
                </a>
            </li>

        </ul>

    </div>

</div>

</nav>

<style>

body{
    padding-top:90px;
}

.custom-navbar{
    position:fixed;
    top:0;
    left:0;
    width:100%;
    z-index:9999;

    background:rgba(15,23,42,0.55);

    backdrop-filter:blur(12px);

    -webkit-backdrop-filter:blur(12px);

    border-bottom:1px solid rgba(255,255,255,0.08);
}

.logo-text{
    color:white !important;
    font-size:20px;
    font-weight:700;
    letter-spacing:1px;
}

.chat-btn{
    color:white;
    text-decoration:none;
    padding:8px 15px;
    border-radius:10px;
    background:rgba(255,255,255,0.08);
}

.chat-btn:hover{
    background:rgba(255,255,255,0.15);
    color:white;
}

</style>

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>