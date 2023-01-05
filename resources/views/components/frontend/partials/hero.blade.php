@php
    $sliders = App\Models\HomeSlider::where('status', 1)
        ->limit(5)
        ->get();
@endphp

<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">
            <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                @foreach ($sliders as $key => $slider)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}"
                        style="background-image: url({{ asset('storage/' . $slider->slider_image) }})">
                        <div class="carousel-container">
                            <div class="container">
                                <!-- <h2 class="animate__animated animate__fadeInDown">
                                    {{ $slider->slider_short_title }}
                                </h2> -->
                                <p class="animate__animated animate__fadeInUp" style="color:#e9ecef; font-weight:700">
                                    {{ $slider->slider_short_title }}
                                </p>
                                <a href="#about"
                                    class="btn-get-started scrollto animate__animated animate__fadeInUp">Get
                                    Started</a>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- <div class="carousel-item"
                    style="background-image: url({{ asset('frontend/assets/img/hero-carousel/2.jpg') }})">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">
                                At vero eos et accusamus
                            </h2>
                            <p class="animate__animated animate__fadeInUp">
                                Helping Business Security & Peace of Mind for Your Family
                            </p>
                            <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get
                                Started</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item"
                    style="background-image: url({{ asset('frontend/assets/img/hero-carousel/3.jpg') }})">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">
                                Temporibus autem quibusdam
                            </h2>
                            <p class="animate__animated animate__fadeInUp">
                                Beatae vitae dicta sunt explicabo. Nemo enim ipsam
                                voluptatem
                            </p>
                            <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get
                                Started</a>
                        </div>
                    </div>
                </div> --}}
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>
        </div>
    </div>
</section>
