<nav class="navbar navbar-expand-lg bg-dark-subtle">
    <div class="container-fluid">
        <a class="navbar-brand" href="/" style="font-weight: bold; font-family: 'Poppins', sans-serif;">Rizhura Cafe</a>
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
            </ul>
            <?php if (in_groups("admin")) : ?>
                <a href="/admin" class="nav-link mx-4"><i class="fa-solid fa-lock"></i> Dashboard Admin</a>
            <?php endif; ?>
            <?php if (logged_in()) : ?>
                <a href="/logout" class="nav-link"><i class="fa-solid fa-right-from-bracket"></i> Log Out</a>
            <?php else : ?>
                <a href="/login" class="nav-link"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
            <?php endif; ?>
        </div>
    </div>
</nav>