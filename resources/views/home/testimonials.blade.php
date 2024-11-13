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
                <h2>Testimonials</h2>
                <ol class="d-flex list-unstyled">
                    <li>Home</li>
                    <li>Testimonials</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- end breadcumbs -->

    <!-- testimonials -->
    <div class="py-5 teams bg-light">
        <div class="container">
            <div class="title-container">
                <h2 class="text-center fw-bold">Testimonial</h2>
            </div>
            <p class="mt-3 text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, non
                provident? At tenetur assumenda odio ipsum ex nam earum, ipsa quia
                quod et eum, aperiam cum est amet! Hic, vero.
            </p>
            <div class="mt-5 row">
                @foreach ($testimonials as $testimonial)
                    <div class="mt-3 col-md-6" data-aos="fade-right">
                        <div class="border-0 shadow-sm shadow card">
                            <div class="p-5 card-body testimonial-item">
                                <img src="/image/{{ $testimonial->image }}" alt=""
                                    class="img-testimonial float-start rounded-circle me-3" />
                                <strong class="d-block">{{ $testimonial->title }}</strong>
                                <small class="text-muted">CEO & Founder</small>
                                <p class="mt-3 fst-italic fs-5">
                                    <i class="fa fa-quote-left"></i>
                                    {{ $testimonial->description }}
                                    <i class="fa fa-quote-right"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- end testimonials -->

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
