<nav class="navbar navbar-expand-lg bg-dark-subtle">
    <div class="container-fluid">
        <a class="navbar-brand" href="/" style="font-weight: bold; font-family: 'Poppins', sans-serif;">Rizhura Computer</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/produk">Produk</a>
                </li>
                <?php if (logged_in()) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/keranjang">keranjang <!--<span class="badge text-bg-secondary">0</span> --></a>
                    </li>
                <?php endif; ?>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <?php if (in_groups("admin")) : ?>
                        <a href="/admin" class="nav-link mx-3"><i class="fa-solid fa-lock"></i> Dashboard Admin</a>
                    <?php endif; ?>
                </li>
                <li class="navbar-item">
                    <?php if (in_groups("users")) : ?>
                        <a href="/transaksi" class="nav-link mx-1">Transaksi Anda</a>
                    <?php endif; ?>
                </li>
                <li class="nav-item">
                    <?php if (logged_in()) : ?>
                        <a href="/logout" class="nav-link mx-1"><i class="fa-solid fa-right-from-bracket"></i> Log Out</a>
                    <?php else : ?>
                        <a href="/login" class="nav-link mx-1"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
    </div>
</nav>