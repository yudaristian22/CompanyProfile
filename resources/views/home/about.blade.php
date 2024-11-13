<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PERBAMA UIN BANDUNG</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/vendor/bootstrap/dist/css/bootstrap.min.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/assets/css/styles.css" />

    <!-- Aos -->
    <link rel="stylesheet" href="/assets/vendor/aos/dist/aos.css" />

    <!-- Fontawesome -->
    <link rel="stylesheet" href="/assets/vendor/fontawesome/css/all.min.css" />
</head>

<body>
    <!-- Navbar -->
    <nav class="py-3 bg-white shadow-sm shadow navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand fw-semibold" href="/">PERBAMA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link fw-bolder " ac href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link fw-bolder dropdown-toggle active" href="/about" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            About
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/about">About Us</a></li>
                            <li><a class="dropdown-item" href="/team">Team</a></li>
                            <li>
                                <a class="dropdown-item" href="/testimonials">Testimonials</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder" href="/services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder" href="/portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder " href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- breadcumbs -->
    <div class="py-2 breadcumbs">
        <div class="container">
            <div class="text-white d-flex justify-content-between align-items-center">
                <h2>About</h2>
                <ol class="d-flex list-unstyled">
                    <li>Home</li>
                    <li>About</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- end breadcumbs -->

    <!-- about us -->
    <div class="container">
        <div class="mt-5 row">
            <div class="col-md-6" data-aos="fade-right">
                <h3 class="fw-bold about-us-title">
                    {{ $about->judul }}
                </h3>
                <p class="mt-4 fw-bolder about-us-subtitle">
                    {{ $about->subjudul }}
                </p>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <p>
                    {{ $about->deskripsi_1 }}
                </p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <i class="fa fa-check-double primary"></i>
                        {{ $about->kelebihan_1 }}
                    </li>
                    <li class="list-group-item">
                        <i class="fa fa-check-double primary"></i>

                        {{ $about->kelebihan_2 }}
                    </li>
                    <li class="list-group-item">
                        <i class="fa fa-check-double primary"></i>

                        {{ $about->kelebihan_3 }}
                    </li>
                    <li class="list-group-item">
                        <i class="fa fa-check-double primary"></i>

                        {{ $about->kelebihan_4 }}
                    </li>
                </ul>
                <p class="mt-2">
                    {{ $about->deskripsi_2 }}
                </p>
            </div>
        </div>
    </div>
    <!-- end about us -->

    <!-- teams -->
    <div class="py-5 mt-5 teams bg-light">
        <div class="container">
            <div class="title-container">
                <h2 class="text-center fw-bold">OUR TEAM</h2>
            </div>
            <p class="mt-3 text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, non
                provident? At tenetur assumenda odio ipsum ex nam earum, ipsa quia
                quod et eum, aperiam cum est amet! Hic, vero.
            </p>
            <div class="row">
                @foreach ($teams as $team)
                    <div class="mt-5 col-md-3" data-aos="fade-up">
                        <div class="card" style="width: 18rem">
                            <img src="/image/{{ $team->image }}" class="card-img-top" alt="" />
                            <div class="text-center card-body">
                                <h5 class="card-title fw-bold">{{ $team->title }}</h5>
                                <p class="card-text text-muted">{{ $team->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- end teams -->

    <!-- Client -->
    <div class="mt-5 clients">
        <div class="container">
            <div class="title-container">
                <h2 class="text-center fw-bold">CLIENT</h2>
            </div>
            <div class="mt-5 row">
                @foreach ($clients as $client)
                    <div class="text-center col-md-3" data-aos="zoom-in">
                        <img src="/image/{{ $client->image }}" class="img-fluid brand-image" alt="" />
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- EndClient -->

    <!-- Footer -->
    <x-footer></x-footer>
    <!-- End Footer -->

    <!-- to top -->
    <a href="#" class="p-3 btn-to-top">
        <i class="fa fa-chevron-up"></i>
    </a>
    <!-- End to top -->

    <script src="/assets/vendor/jquery/jquery-3.7.1.min.js"></script>
    <script src="/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/fontawesome/js/all.min.js"></script>
    <script src="/assets/vendor/mansory/masonry.pkgd.min.js"></script>
    <script src="/assets/vendor/aos/dist/aos.js"></script>
    <script src="/assets/vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="/assets/js/app.js"></script>
</body>

</html>
