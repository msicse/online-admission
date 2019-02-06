<!doctype html>
<html lang="en">
    @include('layouts.frontend.partials.head')
    <body>

        <!--================Header Menu Area =================-->
        @include('layouts.frontend.partials.header')
        <!--================Header Menu Area =================-->
        <div class="container">
                @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <div class="col-md-4 offset-md-4">
                        @foreach ($errors->all() as $error)

                            {{ $error }} <br>
                        @endforeach
                    </div>
                @endif
                </div>
        </div>
        @yield('content')

        <!--================ start footer Area  =================-->
        @include('layouts.frontend.partials.footer')
		<!--================ End footer Area  =================-->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        @include('layouts.frontend.partials.js')
    </body>
</html>
