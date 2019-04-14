<!doctype html>
<html lang="en">
    @include('layouts.frontend.partials.head')
    <body>

        <!--================Header Menu Area =================-->
        @include('layouts.frontend.partials.header')
        <!--================Header Menu Area =================-->

        @yield('content')

        <!--================ start footer Area  =================-->
        @include('layouts.frontend.partials.footer')
		<!--================ End footer Area  =================-->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        @include('layouts.frontend.partials.js')
    </body>
</html>
