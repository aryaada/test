<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url() ?>">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('index') ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('post') ?>">Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('akun') ?>">Akun</a>
                </li>
                <?php if($this->session->userdata('logged_in') == TRUE): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('login/logout') ?>">Logout (<?php echo $this->session->userdata('name');?>)</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('login') ?>">Login</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>