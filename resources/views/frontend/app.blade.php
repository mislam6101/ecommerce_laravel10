<!DOCTYPE html>
<html lang="en">

@yield('head')

<body>

    <!-- LOADER -->
    <div id="loader">
        <div class="position-center-center">
            <div class="ldr"></div>
        </div>
    </div>

    <!-- Wrap -->
    <div id="wrap">
        
        
        @include('frontend.layouts.topbar')
        @include('frontend.layouts.nav')

        @yield('content');

        @yield('footer');

    </div>
    @yield('scripts');

</body>

</html>
