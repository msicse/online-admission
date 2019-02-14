<!-- Jquery Core Js -->
<script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap Core Js -->
<script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.js') }}"></script>

<!-- Slimscroll Plugin Js -->
<script src="{{ asset('backend/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

<!-- Waves Effect Plugin Js -->
<script src="{{ asset('backend/plugins/node-waves/waves.js') }}"></script>

<!-- Custom Js -->
<script src="{{ asset('backend/js/admin.js') }}"></script>

<!-- <script src="{{ asset('backend/js/pages/index.js') }}"></script> -->


<!-- Toster JS -->
<!-- <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script> -->
<script src="{{ asset('js/toastr.min.js') }}"></script>

@if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                toastr.error('{{ $error }}',{
                	closeButton:true,
                	progressBar:true,
                });

            </script>
        @endforeach
    @endif
        {!! Toastr::message() !!}

@stack('js')
