<x-frontend.layouts.master>
    <x-slot name="pageTitle">Ekopaii</x-slot>
    <x-frontend.partials.hero />
    <main id="main">
        <!-- ======= About Section ======= -->
        <div id="about" class="about-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h2>About ekopii</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- single-well start-->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="well-left">
                            <div class="single-well">
                                <a href="#">
                                    <img src="{{ asset('frontend/assets/img/about/3.jpg') }}" alt="" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- single-well end-->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="well-middle">
                            <div class="single-well">
                                <a href="#">
                                    <h4 class="sec-head">About Us</h4>
                                </a>
                                <p>
                                    {{ $about->short_description }}
                                </p>
                                <ul>
                                    @foreach ($aboutFeatures as $feature)
                                        <li><i class="bi bi-check"></i>{{ $feature->feature }}</li>
                                    @endforeach

                                </ul>
                                <a href="{{ route('about') }}" style="margin-top: 16px; "
                                    class="text-info scrollto animate__animated animate__fadeInUp">Read
                                    More...</a>
                            </div>
                        </div>
                    </div>
                    <!-- End col-->
                </div>
            </div>

        </div>
        <!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <div id="services" class="services-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline services-head text-center">
                            <h2>Our Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <!-- Start Left services -->
                    @foreach ($services as $service)
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="about-move">
                                <div class="services-details">
                                    <div class="single-services">
                                        <a class="services-icon" href="{{ route('service', $service->id) }}">
                                            <img src="{{ asset('storage/' . $service->landing_page_logo) }}"
                                                alt="{{ $service->service_title }}">
                                        </a>
                                        <h4>{{ $service->service_title }}</h4>
                                        <p>
                                            {{ $service->landing_page_short_description }}
                                        </p>
                                    </div>
                                </div>
                                <!-- end about-details -->
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- End Services Section -->

        <!-- ======= Team Section ======= -->
        <div id="team" class="our-team-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h2>Our special Team</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="single-team-member">
                            <div class="team-img">
                                <a href="#">
                                    <img src="{{ asset('frontend/assets/img/team/1.jpg') }}" alt="" />
                                </a>
                                <div class="team-social-icon text-center">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="bi bi-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="bi bi-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="bi bi-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h4>Jhon Mickel</h4>
                                <p>Seo</p>
                            </div>
                        </div>
                    </div>
                    <!-- End column -->
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="single-team-member">
                            <div class="team-img">
                                <a href="#">
                                    <img src="{{ asset('frontend/assets/img/team/2.jpg') }}" alt="" />
                                </a>
                                <div class="team-social-icon text-center">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="bi bi-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="bi bi-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="bi bi-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h4>Andrew Arnold</h4>
                                <p>Web Developer</p>
                            </div>
                        </div>
                    </div>
                    <!-- End column -->
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="single-team-member">
                            <div class="team-img">
                                <a href="#">
                                    <img src="{{ asset('frontend/assets/img/team/3.jpg') }}" alt="" />
                                </a>
                                <div class="team-social-icon text-center">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="bi bi-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="bi bi-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="bi bi-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h4>Lellien Linda</h4>
                                <p>Web Design</p>
                            </div>
                        </div>
                    </div>
                    <!-- End column -->
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="single-team-member">
                            <div class="team-img">
                                <a href="#">
                                    <img src="{{ asset('frontend/assets/img/team/4.jpg') }}" alt="" />
                                </a>
                                <div class="team-social-icon text-center">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="bi bi-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="bi bi-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="bi bi-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h4>Jhon Powel</h4>
                                <p>Seo Expert</p>
                            </div>
                        </div>
                    </div>
                    <!-- End column -->
                </div>
            </div>
        </div>
        <!-- End Team Section -->

        <!-- ======= Rviews Section ======= -->
        <div class="reviews-area">
            <div class="row g-0">
                <div class="col-lg-6">
                    <img src="assets/img/about/6.jpg" alt="" class="img-fluid" />
                </div>
                <div class="col-lg-6 work-right-text d-flex align-items-center">
                    <div class="px-5 py-5 py-lg-0">
                        <h2>working with us</h2>
                        <h5>
                            Web Design, Ready Home, Construction and Co-operate Outstanding
                            Buildings.
                        </h5>
                        <a href="#contact" class="ready-btn scrollto">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Rviews Section -->

        <!-- ======= Portfolio Section ======= -->
        <div id="portfolio" class="portfolio-area area-padding fix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h2>Our Portfolio</h2>
                        </div>
                    </div>
                </div>
                <div class="row wesome-project-1 fix">
                    <!-- Start Portfolio -page -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>

                <div class="row awesome-project-content portfolio-container">
                    <!-- portfolio-item start -->
                    <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app portfolio-item">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="{{ asset('frontend/assets/img/portfolio/1.jpg') }}"
                                        alt="" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="portfolio-lightbox" data-gallery="myGallery"
                                            href="{{ asset('frontend/assets/img/portfolio/1.jpg') }}">
                                            <h4>Business City</h4>
                                            <span>Web Development</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio-item end -->

                    <!-- portfolio-item start -->
                    <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="{{ asset('frontend/assets/img/portfolio/2.jpg') }}"
                                        alt="" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="portfolio-lightbox" data-gallery="myGallery"
                                            href="{{ asset('frontend/assets/img/portfolio/2.jpg') }}">
                                            <h4>Blue Sea</h4>
                                            <span>Photosho</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio-item end -->

                    <!-- portfolio-item start -->
                    <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-card">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="{{ asset('frontend/assets/img/portfolio/3.jpg') }}"
                                        alt="" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="portfolio-lightbox" data-gallery="myGallery"
                                            href="{{ asset('frontend/assets/img/portfolio/3.jpg') }}">
                                            <h4>Beautiful Nature</h4>
                                            <span>Web Design</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio-item end -->

                    <!-- portfolio-item start -->
                    <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="assets/img/portfolio/4.jpg" alt="" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="portfolio-lightbox" data-gallery="myGallery"
                                            href="assets/img/portfolio/4.jpg">
                                            <h4>Creative Team</h4>
                                            <span>Web design</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio-item end -->

                    <!-- portfolio-item start -->
                    <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="assets/img/portfolio/5.jpg" alt="" /></a>
                                <div class="add-actions text-center text-center">
                                    <div class="project-dec">
                                        <a class="portfolio-lightbox" data-gallery="myGallery"
                                            href="assets/img/portfolio/5.jpg">
                                            <h4>Beautiful Flower</h4>
                                            <span>Web Development</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio-item end -->

                    <!-- portfolio-item start -->
                    <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="assets/img/portfolio/6.jpg" alt="" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="portfolio-lightbox" data-gallery="myGallery"
                                            href="assets/img/portfolio/6.jpg">
                                            <h4>Night Hill</h4>
                                            <span>Photoshop</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio-item end -->
                </div>
            </div>
        </div>
        <!-- End Portfolio Section -->

        <!-- ======= Pricing Section ======= -->
        <!-- <div id="pricing" class="pricing-area area-padding">
            <div class="container">
                <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                    <h2>Pricing Table</h2>
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="pri_table_list">
                    <h3>basic <br /> <span>$80 / month</span></h3>
                    <ol>
                        <li class="check"><i class="bi bi-check"></i><span>Online system</span></li>
                        <li class="check"><i class="bi bi-x"></i><span>Full access</span></li>
                        <li class="check"><i class="bi bi-check"></i><span>Free apps</span></li>
                        <li class="check"><i class="bi bi-check"></i><span>Multiple slider</span></li>
                        <li class="cross"><i class="bi bi-x"></i><span>Free domin</span></li>
                        <li class="cross"><i class="bi bi-x"></i><span>Support unlimited</span></li>
                        <li class="check"><i class="bi bi-check"></i><span>Payment online</span></li>
                        <li class="check"><i class="bi bi-x"></i><span>Cash back</span></li>
                    </ol>
                    <button>sign up now</button>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="pri_table_list active">
                    <span class="saleon">top sale</span>
                    <h3>standard <br /> <span>$110 / month</span></h3>
                    <ol>
                        <li class="check"><i class="bi bi-check"></i><span>Online system</span></li>
                        <li class="check"><i class="bi bi-check"></i><span>Full access</span></li>
                        <li class="check"><i class="bi bi-check"></i><span>Free apps</span></li>
                        <li class="check"><i class="bi bi-check"></i><span>Multiple slider</span></li>
                        <li class="cross"><i class="bi bi-x"></i><span>Free domin</span></li>
                        <li class="check"><i class="bi bi-check"></i><span>Support unlimited</span></li>
                        <li class="check"><i class="bi bi-check"></i><span>Payment online</span></li>
                        <li class="cross"><i class="bi bi-x"></i><span>Cash back</span></li>
                    </ol>
                    <button>sign up now</button>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="pri_table_list">
                    <h3>premium <br /> <span>$150 / month</span></h3>
                    <ol>
                        <li class="check"><i class="bi bi-check"></i><span>Online system</span></li>
                        <li class="check"><i class="bi bi-check"></i><span>Full access</span></li>
                        <li class="check"><i class="bi bi-check"></i><span>Free apps</span></li>
                        <li class="check"><i class="bi bi-check"></i><span>Multiple slider</span></li>
                        <li class="check"><i class="bi bi-check"></i><span>Free domin</span></li>
                        <li class="check"><i class="bi bi-check"></i><span>Support unlimited</span></li>
                        <li class="check"><i class="bi bi-check"></i><span>Payment online</span></li>
                        <li class="check"><i class="bi bi-check"></i><span>Cash back</span></li>
                    </ol>
                    <button>sign up now</button>
                    </div>
                </div>
                </div>
            </div>
            </div> -->
        <!-- End Pricing Section -->

        <!-- ======= Testimonials Section ======= -->
        <div id="testimonials" class="testimonials">
            <div class="container">
                <div class="testimonials-slider swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                    alt="" />
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec
                                    porttitora entum suscipit rhoncus. Accusantium quam,
                                    ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                    risus at semper.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                    alt="" />
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Export tempor illum tamen malis malis eram quae irure esse
                                    labore quem cillum quid cillum eram malis quorum velit fore
                                    eram velit sunt aliqua noster fugiat irure amet legam anim
                                    culpa.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                    alt="" />
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Enim nisi quem export duis labore cillum quae magna enim
                                    sint quorum nulla quem veniam duis minim tempor labore quem
                                    eram duis noster aute amet eram fore quis sint minim.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                    alt="" />
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa
                                    multos export minim fugiat minim velit minim dolor enim duis
                                    veniam ipsum anim magna sunt elit fore quem dolore labore
                                    illum veniam.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                    alt="" />
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure
                                    aliqua veniam tempor noster veniam enim culpa labore duis
                                    sunt culpa nulla illum cillum fugiat legam esse veniam culpa
                                    fore nisi cillum quid.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        <!-- End Testimonials Section -->

        <!-- ======= Blog Section ======= -->
        <div id="blog" class="blog-area">
            <div class="blog-inner area-padding">
                <div class="blog-overly"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="section-headline text-center">
                                <h2>Latest News</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Start Left Blog -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-blog">
                                <div class="single-blog-img">
                                    <a href="blog.html">
                                        <img src="assets/img/blog/1.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="blog-meta">
                                    <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        <a href="#">13 comments</a>
                                    </span>
                                    <span class="date-type">
                                        <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                                    </span>
                                </div>
                                <div class="blog-text">
                                    <h4>
                                        <a href="blog.html">Assumenda repud eum veniam</a>
                                    </h4>
                                    <p>
                                        Lorem ipsum dolor sit amet conse adipis elit Assumenda
                                        repud eum veniam optio modi sit explicabo nisi magnam
                                        quibusdam.sit amet conse adipis elit Assumenda repud eum
                                        veniam optio modi sit explicabo nisi magnam quibusdam.
                                    </p>
                                </div>
                                <span>
                                    <a href="blog.html" class="ready-btn">Read more</a>
                                </span>
                            </div>
                            <!-- Start single blog -->
                        </div>
                        <!-- End Left Blog-->
                        <!-- Start Left Blog -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-blog">
                                <div class="single-blog-img">
                                    <a href="blog.html">
                                        <img src="assets/img/blog/2.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="blog-meta">
                                    <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        <a href="#">130 comments</a>
                                    </span>
                                    <span class="date-type">
                                        <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                                    </span>
                                </div>
                                <div class="blog-text">
                                    <h4>
                                        <a href="blog.html">Explicabo magnam quibusdam.</a>
                                    </h4>
                                    <p>
                                        Lorem ipsum dolor sit amet conse adipis elit Assumenda
                                        repud eum veniam optio modi sit explicabo nisi magnam
                                        quibusdam.sit amet conse adipis elit Assumenda repud eum
                                        veniam optio modi sit explicabo nisi magnam quibusdam.
                                    </p>
                                </div>
                                <span>
                                    <a href="blog.html" class="ready-btn">Read more</a>
                                </span>
                            </div>
                            <!-- Start single blog -->
                        </div>
                        <!-- End Left Blog-->
                        <!-- Start Right Blog-->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-blog">
                                <div class="single-blog-img">
                                    <a href="blog.html">
                                        <img src="assets/img/blog/3.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="blog-meta">
                                    <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        <a href="#">10 comments</a>
                                    </span>
                                    <span class="date-type">
                                        <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                                    </span>
                                </div>
                                <div class="blog-text">
                                    <h4>
                                        <a href="blog.html">Lorem ipsum dolor sit amet</a>
                                    </h4>
                                    <p>
                                        Lorem ipsum dolor sit amet conse adipis elit Assumenda
                                        repud eum veniam optio modi sit explicabo nisi magnam
                                        quibusdam.sit amet conse adipis elit Assumenda repud eum
                                        veniam optio modi sit explicabo nisi magnam quibusdam.
                                    </p>
                                </div>
                                <span>
                                    <a href="blog.html" class="ready-btn">Read more</a>
                                </span>
                            </div>
                        </div>
                        <!-- End Right Blog-->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Blog Section -->

        <!-- ======= Suscribe Section ======= -->
        <div class="suscribe-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
                        <div class="suscribe-text text-center">
                            <h3>Welcome to our eBusiness company</h3>
                            <a class="sus-btn" href="#">Get A quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Suscribe Section -->

        <!-- ======= Contact Section ======= -->
        <div id="contact" class="contact-area">
            <div class="contact-inner area-padding">
                <div class="contact-overly"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="section-headline text-center">
                                <h2>Contact us</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Start contact icon column -->
                        <div class="col-md-4">
                            <div class="contact-icon text-center">
                                <div class="single-icon">
                                    <i class="bi bi-phone"></i>
                                    <p>
                                        Call: +88 01625571559<br />
                                        <span>Monday-Friday (9am-5pm)</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Start contact icon column -->
                        <div class="col-md-4">
                            <div class="contact-icon text-center">
                                <div class="single-icon">
                                    <i class="bi bi-envelope"></i>
                                    <p>
                                        Email: contact@ekopii.com<br />
                                        <span>Web: www.ekopii.com</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Start contact icon column -->
                        <div class="col-md-4">
                            <div class="contact-icon text-center">
                                <div class="single-icon">
                                    <i class="bi bi-geo-alt"></i>
                                    <p>
                                        Location:H#17, Hazi Road/Commerce College Road, Darul Aman Grihanirman Samity,
                                        Section-03<br />
                                        <span>Mirpur, Dhaka</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Start Google Map -->
                        <div class="col-md-6">
                            <!-- Start Map -->
                            <iframe
                                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=23.806393156145457,%2090.35288134208368+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                                width="100%" height="380" frameborder="0" style="border: 0"
                                allowfullscreen></iframe>
                            <!-- End Map -->
                        </div>
                        <!-- End Google Map -->

                        <!-- Start  contact -->
                        <div class="col-md-6">
                            <div class="form contact-form">
                                <form action="#" class="php-email-form">
                                    <div class="form-group">
                                        <input type="text" id="contactName" name="name" class="form-control"
                                            id="name" placeholder="Your Name" required />
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="email" id="contactEmail" class="form-control" name="email"
                                            id="email" placeholder="Your Email" required />
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="text" id="contactSubject" class="form-control"
                                            name="subject" id="subject" placeholder="Subject" required />
                                    </div>
                                    <div class="form-group mt-3">
                                        <textarea class="form-control" id="contactMessage" name="message" rows="5" placeholder="Message" required></textarea>
                                    </div>
                                    {{-- <div class="my-3">
                                        <div id="messageLodingBtn" class="loading">Loading</div>
                                    </div> --}}
                                    <div class="text-center">
                                        <button id="messageBtn" type="submit"><span id="messageBtnText">Send
                                                Message</span> <span class="loading" id="loadingIcon"
                                                style="display: none"></span> </button>

                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- End Left contact -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact Section -->
    </main>
</x-frontend.layouts.master>
