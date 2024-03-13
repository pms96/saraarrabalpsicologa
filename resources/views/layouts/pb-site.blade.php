
    <!DOCTYPE html>
    <html lang="es">
    
    @include('layouts.web.header')
    @stack(config('pagebuilder.style_var'))

    <body>

        @include('layouts.web.preloader')

        @include('layouts.web.navbar')
    

        <main class="mainbag">
            @yield(config('pagebuilder.site_section'))
        </main>

        @if( config('pagebuilder.add_jquery') === 'yes' )
            <script src="{{ asset('vendor/optionbuilder/js/jquery.min.js') }}"></script>
        @endif

        @if( config('pagebuilder.add_bootstrap') === 'yes' )
            <script defer src="{{ asset('vendor/optionbuilder/js/bootstrap.min.js') }}"></script>
        @endif
         
        @stack(config('pagebuilder.script_var'))  
    
        <!-- Start Go Top Area -->
        <div class="go-top">
            <i class='flaticon-up-arrow'></i>
        </div>
        <!-- End Go Top Area -->
        
        <!-- Jquery Slim JS -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- Bootstrap Bundle JS -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <!-- Meanmenu JS -->
        <script src="assets/js/jquery.meanmenu.js"></script>
        <!-- Owl Carousel JS -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- Jquery Appear JS -->
        <script src="assets/js/jquery.appear.js"></script>
        <!-- Odometer JS -->
        <script src="assets/js/odometer.min.js"></script>
        <!-- Slick Min JS -->
        <script src="assets/js/slick.min.js"></script>
        <!-- Nice Select JS -->
        <script src="assets/js/nice-select.min.js"></script>
        <!-- Magnific Popup JS -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Fancybox JS -->
        <script src="assets/js/fancybox.min.js"></script>
        <!-- Ajaxchimp JS -->
        <script src="assets/js/jquery.ajaxchimp.min.js"></script>
        <!-- Form Validator JS -->
        <script src="assets/js/form-validator.min.js"></script>
        <!-- Contact JS -->
        <script src="assets/js/contact-form-script.js"></script>
        <!-- Wow JS -->
        <script src="assets/js/wow.min.js"></script>
        <!-- Custom JS -->
        <script src="assets/js/main.js"></script>
    </body>
</html>
