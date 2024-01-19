<!-- Start Navbar Area -->
<div class="navbar-area navbar-two">
    <div class="main-responsive-nav">
        <div class="container">
            <div class="main-responsive-menu">
                <div class="logo">
                    <a href="index.html">
                        <img src="assets/images/logo.png" class="black-logo" alt="image">
                        <img src="assets/images/logo-2.png" class="white-logo" alt="image">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="main-navbar">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="/">
                    <img src="assets/images/logo.png" class="black-logo" alt="image">
                    <img src="assets/images/logo-2.png" class="white-logo" alt="image">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">

                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link">Home</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('about') }}" class="nav-link">Sobre Mi</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('contact') }}" class="nav-link">Contacto</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('blog') }}" class="nav-link">Blog</a>
                        </li>


                        @role('admin')
                            <li class="nav-item">
                                <a href="/admin" class="nav-link">Dashboard</a>
                            </li>
                        @endrole

                    </ul>

                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar Area -->