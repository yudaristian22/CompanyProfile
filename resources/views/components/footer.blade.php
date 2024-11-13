<footer class="mt-5">
    <div class="p-5 text-white footer-top bg-dark">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-3">
                    <h4 class="fw-bold">{{ $contacts->name }}</h4>
                    <p>
                        {{ $contacts->description }}
                    </p>
                    <strong>Phone</strong> : <span> {{ $contacts->telepon }}</span>
                    <br />
                    <strong>Email</strong> :
                    <span> {{ $contacts->email }}</span>
                </div>
                <div class="col-md-2">
                    <h4 class="fw-bold">Our Services</h4>
                    <ul class="list-group list-unstyled">
                        <li class="list-item">
                            <a href="" class="text-white text-decoration-none">Basic</a>
                        </li>
                        <li class="list-item">
                            <a href="" class="text-white text-decoration-none">Training</a>
                        </li>
                        <li class="list-item">
                            <a href="" class="text-white text-decoration-none">Fun Games</a>
                        </li>
                        <li class="list-item">
                            <a href="" class="text-white text-decoration-none">Organization</a>
                        </li>
                        <li class="list-item">
                            <a href="" class="text-white text-decoration-none">Family</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h4 class="fw-bold">Useful Links</h4>
                    <ul class="list-group list-unstyled">
                        <li class="list-item">
                            <a href="" class="text-white text-decoration-none">HOME</a>
                        </li>
                        <li class="list-item">
                            <a href="" class="text-white text-decoration-none">ABOUT US</a>
                        </li>
                        <li class="list-item">
                            <a href="" class="text-white text-decoration-none">SERVICES</a>
                        </li>
                        <li class="list-item">
                            <a href="" class="text-white text-decoration-none">GALLERY</a>
                        </li>
                        <li class="list-item">
                            <a href="" class="text-white text-decoration-none">CONTACT</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4 class="fw-bold">Join Our Newsletter</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <div class="mb-3 input-group">
                        <input type="text" class="form-control" placeholder="yourmail@example.com" />
                        <button class="btn btn-subscribe" type="button" id="inputGroupFileAddon04">
                            Subscribe
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="px-5 py-3 text-white footer-down bg-darker">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <div class="copyright">
                        &copy; Copyright <strong>Perbama</strong>. All Rights Reserved
                    </div>
                    <div class="credits">Designed by Yuda Ristian Asgari</div>
                </div>
                <div class="col-md-5">
                    <div class="social-links float-end">
                        <a href="" class="mx-2">
                            <i class="text-white fab fa-facebook fa-2x"></i>
                        </a>
                        <a href="" class="mx-2">
                            <i class="text-white fab fa-x-twitter fa-2x"></i>
                        </a>
                        <a href="https://www.instagram.com/perbamauinbdg/" class="mx-2">
                            <i class="text-white fab fa-instagram fa-2x"></i>
                        </a>
                        <a href="" class="mx-2">
                            <i class="text-white fab fa-youtube fa-2x"></i>
                        </a>
                        <a href="" class="mx-2">
                            <i class="text-white fab fa-tiktok fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
