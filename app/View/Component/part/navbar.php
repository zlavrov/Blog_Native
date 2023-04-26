    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">
            <img src="app/View/Component/assets/image/logo/rat_white.svg" alt="logo">
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/article">Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/blog">Blog</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Info</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/about">About us</a></li>
                            <li><a class="dropdown-item" href="/contact">Contact</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/regulations">Regulations</a></li>
                        </ul>
                    </li>
                </ul>

                <div class="d-flex">

                    <?php if (!isset($_SESSION["user"])) { ?>

                        <div class="btn-group">
                            <a class="btn btn-outline-success" href="/login">Login</a>
                            <a class="btn btn-outline-success" href="/register">Register</a>
                        </div>

                    <?php } else { ?>

                        <form action="" method="GET" role="search">
                            <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
                        </form>

                        <div class="flex-shrink-0 dropstart">
                            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                            </a>
                            <ul class="dropdown-menu text-small shadow">
                                <li><a class="dropdown-item" href="#">New project...</a></li>
                                <li><a class="dropdown-item" href="/settings">Settings</a></li>
                                <li><a class="dropdown-item" href="/profile">Profile</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="/logout">Logout</a></li>
                            </ul>
                        </div> 

                    <?php } ?>

                </div>

            </div>
        </div>
    </nav>
