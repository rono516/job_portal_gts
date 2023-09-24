@extends('layouts.app')

@section('content')
    <section id="top" style="margin-top: -24px" class="section-hero overlay inner-page bg-image"
        style="background-image: url('images/hero_1.jpg');" id="home-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="text-white font-weight-bold">Product Designer</h1>
                    <div class="custom-breadcrumbs">
                        <a href="#">Home</a> <span class="mx-2 slash">/</span>
                        <a href="#">Job</a> <span class="mx-2 slash">/</span>
                        <span class="text-white"><strong>Product Designer</strong></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="site-section">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <div class="d-flex align-items-center">
                        <div class="border p-2 d-inline-block mr-3 rounded">
                            <img src="{{ asset('assets/images/job_logo_5.jpg') }}" alt="Image">
                        </div>
                        <div>
                            <h2>Product Designer</h2>
                            <div>
                                <span class="ml-0 mr-2 mb-2"><span class="icon-briefcase mr-2"></span>Puma</span>
                                <span class="m-2"><span class="icon-room mr-2"></span>New York City</span>
                                <span class="m-2"><span class="icon-clock-o mr-2"></span><span class="text-primary">Full
                                        Time</span></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <div class="mb-5">
                            <figure class="mb-5"><img src="{{ asset('assets/images/job_single_img_1.jpg') }}"
                                    alt="Image" class="img-fluid rounded"></figure>
                            <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span
                                    class="icon-align-left mr-3"></span>Job Description</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis illum fuga eveniet.
                                Deleniti asperiores, commodi quae ipsum quas est itaque, ipsa, dolore beatae voluptates nemo
                                blanditiis iste eius officia minus.</p>
                            <p>Velit unde aliquam et voluptas reiciendis non sapiente labore, deleniti asperiores blanditiis
                                nihil quia officiis dolor vero iste dolore vel molestiae saepe. Id nisi, consequuntur sunt
                                impedit quidem, vitae mollitia!</p>
                        </div>
                        <div class="mb-5">
                            <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span
                                    class="icon-rocket mr-3"></span>Responsibilities</h3>
                            <ul class="list-unstyled m-0 p-0">
                                <li class="d-flex align-items-start mb-2"><span
                                        class="icon-check_circle mr-2 text-muted"></span><span>Necessitatibus quibusdam
                                        facilis</span></li>
                                <li class="d-flex align-items-start mb-2"><span
                                        class="icon-check_circle mr-2 text-muted"></span><span>Velit unde aliquam et
                                        voluptas reiciendis n Velit unde aliquam et voluptas reiciendis non sapiente
                                        labore</span></li>
                                <li class="d-flex align-items-start mb-2"><span
                                        class="icon-check_circle mr-2 text-muted"></span><span>Commodi quae ipsum quas est
                                        itaque</span></li>
                                <li class="d-flex align-items-start mb-2"><span
                                        class="icon-check_circle mr-2 text-muted"></span><span>Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit</span></li>
                                <li class="d-flex align-items-start mb-2"><span
                                        class="icon-check_circle mr-2 text-muted"></span><span>Deleniti asperiores
                                        blanditiis nihil quia officiis dolor</span></li>
                            </ul>
                        </div>

                        <div class="mb-5">
                            <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span
                                    class="icon-book mr-3"></span>Education + Experience</h3>
                            <ul class="list-unstyled m-0 p-0">
                                <li class="d-flex align-items-start mb-2"><span
                                        class="icon-check_circle mr-2 text-muted"></span><span>Necessitatibus quibusdam
                                        facilis</span></li>
                                <li class="d-flex align-items-start mb-2"><span
                                        class="icon-check_circle mr-2 text-muted"></span><span>Velit unde aliquam et
                                        voluptas reiciendis non sapiente labore</span></li>
                                <li class="d-flex align-items-start mb-2"><span
                                        class="icon-check_circle mr-2 text-muted"></span><span>Commodi quae ipsum quas est
                                        itaque</span></li>
                                <li class="d-flex align-items-start mb-2"><span
                                        class="icon-check_circle mr-2 text-muted"></span><span>Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit</span></li>
                                <li class="d-flex align-items-start mb-2"><span
                                        class="icon-check_circle mr-2 text-muted"></span><span>Deleniti asperiores
                                        blanditiis nihil quia officiis dolor</span></li>
                            </ul>
                        </div>

                        <div class="mb-5">
                            <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span
                                    class="icon-turned_in mr-3"></span>Other Benifits</h3>
                            <ul class="list-unstyled m-0 p-0">
                                <li class="d-flex align-items-start mb-2"><span
                                        class="icon-check_circle mr-2 text-muted"></span><span>Necessitatibus quibusdam
                                        facilis</span></li>
                                <li class="d-flex align-items-start mb-2"><span
                                        class="icon-check_circle mr-2 text-muted"></span><span>Velit unde aliquam et
                                        voluptas reiciendis non sapiente labore</span></li>
                                <li class="d-flex align-items-start mb-2"><span
                                        class="icon-check_circle mr-2 text-muted"></span><span>Commodi quae ipsum quas est
                                        itaque</span></li>
                                <li class="d-flex align-items-start mb-2"><span
                                        class="icon-check_circle mr-2 text-muted"></span><span>Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit</span></li>
                                <li class="d-flex align-items-start mb-2"><span
                                        class="icon-check_circle mr-2 text-muted"></span><span>Deleniti asperiores
                                        blanditiis nihil quia officiis dolor</span></li>
                            </ul>
                        </div>

                        <div class="row mb-5">
                            <div class="col-6">
                                <button class="btn btn-block btn-light btn-md"><i class="icon-heart"></i>Save Job</button>
                                <!--add text-danger to it to make it read-->
                            </div>
                            @auth
                                <div class="col-6">
                                    <button class="btn btn-block btn-primary btn-md">Apply Now</button>
                                </div>
                            @else
                                <div class="col-6">
                                    <button class="btn btn-block btn-primary btn-md">Login To apply Now</button>
                                </div>
                            @endauth
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="bg-light p-3 border rounded mb-4">
                            <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Job Summary</h3>
                            <ul class="list-unstyled pl-3 mb-0">
                                <li class="mb-2"><strong class="text-black">Published on:</strong> April 14, 2019</li>
                                <li class="mb-2"><strong class="text-black">Vacancy:</strong> 20</li>
                                <li class="mb-2"><strong class="text-black">Employment Status:</strong> Full-time</li>
                                <li class="mb-2"><strong class="text-black">Experience:</strong> 2 to 3 year(s)</li>
                                <li class="mb-2"><strong class="text-black">Job Location:</strong> New ork City</li>
                                <li class="mb-2"><strong class="text-black">Salary:</strong> $60k - $100k</li>
                                <li class="mb-2"><strong class="text-black">Gender:</strong> Any</li>
                                <li class="mb-2"><strong class="text-black">Application Deadline:</strong> April 28,
                                    2019</li>
                            </ul>
                        </div>

                        <div class="bg-light p-3 border rounded">
                            <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Share</h3>
                            <div class="px-3">
                                <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-facebook"></span></a>
                                <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-twitter"></span></a>
                                <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-linkedin"></span></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </section>
    <section class="site-section" id="next">
        <div class="container">

            <div class="row mb-5 justify-content-center">
                <div class="col-md-7 text-center">
                    <h2 class="section-title mb-2">22,392 Related Jobs</h2>
                </div>
            </div>

            <ul class="job-listings mb-5">
                <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
                    <a href="job-single.html"></a>
                    <div class="job-listing-logo">
                        <img src="{{ asset('assets/images/job_logo_1.jpg') }}" alt="Image" class="img-fluid">
                    </div>

                    <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                        <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                            <h2>Product Designer</h2>
                            <strong>Adidas</strong>
                        </div>
                        <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                            <span class="icon-room"></span> New York, New York
                        </div>
                        <div class="job-listing-meta">
                            <span class="badge badge-danger">Part Time</span>
                        </div>
                    </div>

                </li>
            </ul>

        </div>
    </section>

    <footer style="margin-bottom: -24px" class="site-footer">

        <a href="#top" class="smoothscroll scroll-top">
            <span class="icon-keyboard_arrow_up"></span>
        </a>

        <div class="container">
            <div class="row mb-5">
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <h3>Search Trending</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Graphic Design</a></li>
                        <li><a href="#">Web Developers</a></li>
                        <li><a href="#">Python</a></li>
                        <li><a href="#">HTML5</a></li>
                        <li><a href="#">CSS3</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <h3>Company</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Resources</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <h3>Support</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <h3>Contact Us</h3>
                    <div class="footer-social">
                        <a href="#"><span class="icon-facebook"></span></a>
                        <a href="#"><span class="icon-twitter"></span></a>
                        <a href="#"><span class="icon-instagram"></span></a>
                        <a href="#"><span class="icon-linkedin"></span></a>
                    </div>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-12">
                    <p class="copyright"><small>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i
                                class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                target="_blank">Colorlib</a>. Downloaded from <a href="https://themeslab.org/"
                                target="_blank">Themeslab</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </small></p>
                </div>
            </div>
        </div>
    </footer>
@endsection
