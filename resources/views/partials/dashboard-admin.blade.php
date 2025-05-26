<!DOCTYPE html>
<html lang="en" data-bs-theme="{{ config('app.theme') }}">

<body class='pace-top'>
    @include('partials.head')
    <div id="app" class="app">
        <!-- BEGIN #header -->
        <div id="header" class="app-header">

            <!-- BEGIN desktop-toggler -->
            <div class="desktop-toggler">
                <button type="button" class="menu-toggler" data-toggle-class="app-sidebar-collapsed" data-dismiss-class="app-sidebar-toggled" data-toggle-target=".app">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
            </div>
            <!-- BEGIN desktop-toggler -->

            <!-- BEGIN mobile-toggler -->
            <div class="mobile-toggler">
                <button type="button" class="menu-toggler" data-toggle-class="app-sidebar-mobile-toggled" data-toggle-target=".app">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
            </div>
            <!-- END mobile-toggler -->

            <!-- BEGIN brand -->
            <div class="brand">
                <a href="index.html" class="brand-logo">
                    <span class="brand-img">
                        <span class="brand-img-text text-theme">L</span>
                    </span>
                    <span class="brand-text">Laris POS</span>
                </a>
            </div>
            <!-- END brand -->

            <!-- BEGIN menu -->
            <div class="menu">

            </div>
            <!-- END menu -->


        </div>
        <!-- END #header -->

        @include('partials.sidebar')

        <!-- BEGIN mobile-sidebar-backdrop -->
        <button class="app-sidebar-mobile-backdrop" data-toggle-target=".app" data-toggle-class="app-sidebar-mobile-toggled"></button>
        <!-- END mobile-sidebar-backdrop -->

        @yield('content')
        <!-- BEGIN btn-scroll-top -->
        <a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
        <!-- END btn-scroll-top -->
    </div>

    @include('partials.js')

</body>

</html>
