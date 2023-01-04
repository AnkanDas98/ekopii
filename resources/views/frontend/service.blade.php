<x-frontend.layouts.master>
    <x-slot name='pageTitle'>{{ $service->service_title }}</x-slot>
    <main id="main">

        <!-- ======= Blog Header ======= -->
        <div class="header-bg page-area"
            style="background-image: url('{{ asset('storage/' . $service->service_image) }}')">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="slider-content text-center">
                            <div class="header-bottom">
                                <div class="layer2">
                                    <h1 class="title2">{{ $service->service_title }}</h1>
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
                <div class="row" style="margin-bottom: 35px;">
                    <div class="col-md-6">
                        <img style="width:500px; height: 500px;" class="img-fluid rounded"
                            src="{{ asset('storage/' . $service->service_feature_image) }}" alt="next steps pana">
                    </div>
                    <div class="col-md-6">
                        <h2>Feaures</h2>
                        <div class="item d-flex flex-column justify-content-between gap-2">
                            @foreach ($serviceFeature as $feature)
                                <p class="service-feature">{{ $feature->features }}
                                </p>
                            @endforeach
                        </div>


                    </div>
                </div>
            </div>
            <div class="technology">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="service-title">Technology Stack</div>
                            <p class="mb-4">If you are looking for the most proven technologies, we have got you
                                covered. We use more than 100+ latest technologies that are timely and useful for your
                                business.</p>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('storage/images/web-development-framework.jpg') }}" alt=""
                                srcset="">
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- End Blog Page -->

    </main><!-- End #main -->
</x-frontend.layouts.master>
