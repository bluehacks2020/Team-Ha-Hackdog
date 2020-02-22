<nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark navbar-main p-0">
    <div class="container p-0">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('img/logo.png') }}">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="/">
                            <img src="{{ asset('img/logo.png') }}">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse"
                            data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false"
                            aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Navbar items -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="#">
                        <span class="nav-link-inner--text">Be a Partner</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="#">
                        <span class="nav-link-inner--text">Help</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="{{ route('login') }}">
                        <span class="nav-link-inner--text">Login</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="/checkout" style="color: #6b664d">
                        <i class="ni ni-cart"></i>
                    </a>
                </li>
                
            </ul>
        </div>
    </div>
</nav>
<nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark navbar-categories">
    <div class="col-12 p-0">
        <ul class="list-categories text-center p-3 text-uppercase">
            <li class="nav-item">
                <a class="nav-link nav-link-icon" href="/products?search=fashion">
                    <span class="nav-link-inner--text">Fashion</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-icon" href="/products?search=clothing">
                    <span class="nav-link-inner--text">Clothing</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-icon" href="/products?search=food">
                    <span class="nav-link-inner--text">Food</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-icon" href="/products?search=health">
                    <span class="nav-link-inner--text">Health</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-icon" href="/products?search=lifestyle">
                    <span class="nav-link-inner--text">Lifestyle</span>
                </a>
            </li>
        </ul>
    </div>
</nav>