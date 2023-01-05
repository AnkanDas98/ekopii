<x-frontend.layouts.master>
    <x-slot name='pageTitle'>About us</x-slot>
    <main id="main">

        <!-- ======= Blog Header ======= -->
        <div class="header-bg page-area">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="slider-content text-center">
                            <div class="header-bottom">
                                <div class="layer2">
                                    <h1 class="title2">About Us</h1>
                                </div>
                                <div class="layer3">
                                    <h2 class="title3">IT Solution provider in Bangladesh</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Blog Header -->

        <!-- ======= Blog Page ======= -->
        <div class="blog-page area-padding">
            <div class="container">
                <div class="row align-items-center" style="margin-bottom: 35px;">
                    <div class="col-md-6">
                        <h2>Who We Are</h2>
                        <p>{{ $about->who_we_are }}</p>
                    </div>
                    <div class="col-md-6">
                        <img style="width:400px; height: 400px;" class="img-fluid rounded"
                            src="{{ asset('storage/images/about/Who.jpg') }}" alt="Who are we">
                    </div>
                </div>
                <div class="row align-items-center" style="margin-bottom: 35px;">
                    <div class="col-md-6">
                        <img style="width:400px; height: 400px;" class="img-fluid rounded"
                            src="{{ asset('storage/images/about/Why.png') }}" alt="Why us">
                    </div>
                    <div class="col-md-6">
                        <h2>Why Us</h2>
                        <p>{{ $about->who_us }}</p>
                    </div>
                </div>
                <div class="row align-items-center" style="margin-bottom: 35px;">
                    <div class="col-md-6">
                        <h2>Company Growth</h2>
                        <p>{{ $about->who_we_are }}</p>
                    </div>
                    <div class="col-md-6">
                        <img style="width:400px; height: 400px;" class="img-fluid rounded"
                            src="{{ asset('storage/images/about/next-steps-pana.png') }}" alt="next steps pana">
                    </div>
                </div>
                <div class="row align-items-center" style="margin-bottom: 35px;">
                    <div class="col-md-6">
                        <img style="width:400px; height: 400px;" class="img-fluid rounded"
                            src="{{ asset('storage/images/about/mission.jpg') }}" alt="Our mission">
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex flex-column justify-content-center gap-4">
                            <div class="item">
                                <h3>Our Mission</h3>
                                <p>{{ $about->owr_mission }}</p>
                            </div>
                            <div class="item">
                                <h3>Our Vision</h3>
                                <p>{{ $about->owr_vision }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h3> Let Us Help You Accelerate <span class="text-primary">Your Digital Transformation</span>
                        </h3>
                        <p class="mb-4 mb-md-0"> Leave a positive footprint by devoting our human resources,
                            technologies and expertise to deliver top-of-the-line digital products, thereby contributing
                            to the success of modern businesses around the globe.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="img"><img class="h-100 w-100"
                                src="{{ asset('storage/images/about/Efficiency-rafiki.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Blog Page -->

    </main><!-- End #main -->
</x-frontend.layouts.master>
