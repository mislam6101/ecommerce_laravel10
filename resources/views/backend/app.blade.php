<!doctype html>
<html lang="en">
<!-- [Head] start -->

@yield('head');
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-sidebar-theme="dark" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="pc-loader">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ Sidebar Menu ] start -->
    @include('backend.layouts.side')
    <!-- [ Sidebar Menu ] end -->
    <!-- [ Header Topbar ] start -->
    @include('backend.layouts.top')
    <!-- [ Header ] end -->



    <!-- [ Main Content ] start -->
    @yield('content');
    <!-- [ Main Content ] end -->
    @yield('footer');

    <!-- [Page Specific JS] start -->
   @yield('scripts')


</body>
<!-- [Body] end -->

</html>