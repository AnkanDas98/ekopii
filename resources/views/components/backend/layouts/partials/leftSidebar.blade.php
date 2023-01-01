@php
    $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName();
@endphp

<div class="vertical-menu">

    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="index.html" class="waves-effect">
                        <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="calendar.html" class=" waves-effect">
                        <i class="ri-calendar-2-line"></i>
                        <span>Calendar</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);"
                        class="has-arrow waves-effect {{ $prefix == '/message' ? 'active' : '' }}">
                        <i class="ri-mail-send-line"></i>
                        <span>Messages</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li class="{{ $route == 'all.message' ? 'active' : '' }}"><a
                                href="{{ route('all.message') }}">All Messages</a>
                        </li>

                    </ul>
                </li>

                <!-- =================for Services============== -->


                <li class="menu-title">Pages</li>

                <li>
                    <a href="javascript: void(0);"
                        class="has-arrow waves-effect {{ $prefix == '/slider' ? 'active' : '' }}">
                        <i class="ri-mail-send-line"></i>
                        <span>Home Slider</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li class="{{ $route == 'all.slider' ? 'active' : '' }}"><a
                                href="{{ route('all.slider') }}">Sliders</a>
                        </li>
                        <li class="{{ $route == 'add.slider' ? 'active' : '' }}"><a href="{{ route('add.slider') }}">Add
                                Slider</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"
                        class="has-arrow waves-effect {{ $prefix == '/service' ? 'active' : '' }}">
                        <i class="ri-mail-send-line"></i>
                        <span>Service</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a>Services</a>
                        </li>
                        <li><a>Add
                                Service</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"
                        class="has-arrow waves-effect {{ $prefix == '/about' ? 'active' : '' }}">
                        <i class="ri-mail-send-line"></i>
                        <span>About Page Setting</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li class="{{ $route == 'about.setting' ? 'active' : '' }}"><a
                                href="{{ route('about.setting') }}">Page Setting</a>
                        </li>

                        <li class="{{ $route == 'about.edit' ? 'active' : '' }}"><a
                                href="{{ route('about.edit') }}">Page Update</a>
                        </li>

                    </ul>
                </li>



            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
