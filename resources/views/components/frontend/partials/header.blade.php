@php
    $services = App\Models\Service::all();
    $route = Route::current()->getName();
@endphp



<header id="header" class="fixed-top d-flex align-items-center">
    <div class="w-100 d-flex justify-content-between">
        <div class="logo" style="margin-left:35px">
            <h1>
                <a href="/"><img src="{{ asset('frontend/assets/img/Apps-Icon.png') }}" alt="" />kopii</a>
            </h1>
        </div>

        <nav id="navbar" class="navbar" style="margin-right:35px">
            <ul>
                <li><a class="nav-link scrollto {{ $route == 'home' ? 'active':'' }} " href="{{ route('home') }}">Home</a></li>
                <li><a class="nav-link scrollto {{ $route == 'about' ? 'active':'' }} " href="{{ route('about') }}">About</a></li>
                <li class="dropdown {{ $route == 'service' ? 'active':'' }}">
                    <a href="#"><span>Services</span></a>
                    <ul>
                        @foreach ($services as $service)
                            <li><a href="{{ route('service', $service->id) }}">
                                    {{ $service->service_title }}</a></li>
                        @endforeach
                        {{-- <li><a href="#">Web Development</a></li>
                        <li><a href="#">Graphic Design</a></li>
                        <li><a href="#">SEO Integration</a></li> --}}
                    </ul>
                </li>
                <!-- <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li> -->
                <!-- <li><a class="nav-link scrollto" href="#team">Team</a></li> -->
                <!-- <li><a href="blog.html">Blog</a></li> -->
                <!-- <li class="dropdown">
          <a href="#"
            ><span>Drop Down</span> <i class="bi bi-chevron-down"></i
          ></a>
          <ul>
            <li><a href="#">Drop Down 1</a></li>
            <li class="dropdown">
              <a href="#"
                ><span>Deep Drop Down</span>
                <i class="bi bi-chevron-right"></i
              ></a>
              <ul>
                <li><a href="#">Deep Drop Down 1</a></li>
                <li><a href="#">Deep Drop Down 2</a></li>
                <li><a href="#">Deep Drop Down 3</a></li>
                <li><a href="#">Deep Drop Down 4</a></li>
                <li><a href="#">Deep Drop Down 5</a></li>
              </ul>
            </li>
            <li><a href="#">Drop Down 2</a></li>
            <li><a href="#">Drop Down 3</a></li>
            <li><a href="#">Drop Down 4</a></li>
          </ul>
        </li> -->
                {{-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> --}}
                <li><a href="/#contact" class="contact-btn scrollto">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
    </div>
</header>
