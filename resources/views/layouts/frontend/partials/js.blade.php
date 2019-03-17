<script src="{{ asset('frontend/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('frontend/js/popper.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/stellar.js') }}"></script>
<script src="{{ asset('frontend/vendors/lightbox/simpleLightbox.min.js') }}"></script>
<script src="{{ asset('frontend/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('frontend/vendors/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('frontend/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/vendors/popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('frontend/vendors/counter-up/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('frontend/vendors/counter-up/jquery.counterup.js') }}"></script>
<script src="{{ asset('frontend/js/mail-script.js') }}"></script>
<script src="{{ asset('frontend/js/theme.js') }}"></script>

<script src="{{ asset('js/toastr.min.js') }}"></script>

@stack('js')

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
