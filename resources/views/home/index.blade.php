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
    <nav class="py-2 bg-white shadow-sm shadow navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand fw-semibold" href="/">PERBAMA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link fw-bolder active" ac href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link fw-bolder dropdown-toggle" href="/about" role="button"
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
                        <a class="nav-link fw-bolder" href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            @foreach ($sliders as $index => $slider)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    <img src="/image/{{ $slider->image }}" class="d-block w-100 carousel-img" alt="..." />
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ $slider->title }}</h5>
                        <p>{{ $slider->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>


        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- End Carousel -->

    <!-- About Section -->
    <div class="mt-5 about-us">
        <div class="container">
            <div class="title-container">
                <h2 class="text-center fw-bold">ABOUT US</h2>
            </div>
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
    </div>
    <!-- End About Section -->

    <!-- Services -->
    <div class="py-5 mt-5 services bg-light">
        <div class="container">
            <div class="title-container">
                <h2 class="text-center fw-bold">SERVICES</h2>
            </div>
            <p class="mt-4 text-center">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim,
                facilis!
            </p>
            <div class="mt-5 row">
                @foreach ($services as $service)
                    <div class="col-md-4">
                        <div class="p-4 mt-3 text-center border-0 card" data-aos="zoom-in">
                            <div class="card-body">
                                <div class="card-icon">
                                    <img src="/image/{{ $service->image }}" alt="" class="img-fluid"
                                        width="80">
                                </div>
                                <div class="mt-3 card-title fw-bolder">{{ $service->title }}</div>
                                <p class="mt-3 card-description">
                                    {{ $service->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Services -->

    <!-- gallery Section -->
    <div class="mt-5 portfolio-us">
        <div class="container">
            <div class="title-container">
                <h2 class="text-center fw-bold">GALLERY</h2>
            </div>
            <div class="mt-4 row">
                <div class="col-md-12 d-flex justify-content-center">
                    <ul class="list-unstyled d-flex portfolio-filter">
                        <li data-filter="*" class="px-4 py-2 text-white filter-active">
                            ALL
                        </li>
                        <li data-filter=".filter-web" class="px-4 py-2">Web</li>
                        <li data-filter=".filter-design" class="px-4 py-2">Design</li>
                        <li data-filter=".filter-photo" class="px-4 py-2">Photography</li>
                    </ul>
                </div>
            </div>
            <div class="mt-5 row">
                <div class="col-md-12">
                    <div class="mansory portfolio-container" data-aos="zoom-in-up">
                        <div class="mansory-sizer"></div>
                        @foreach ($portfolios as $portfolio)
                            <div class="m-2 mansory-item portfolio-item filter-web">
                                <img src="/image/{{ $portfolio->image }}" alt="" class="m-2 img-fluid" />
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End gallery Section -->

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
    <x-footer>

    </x-footer>
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
