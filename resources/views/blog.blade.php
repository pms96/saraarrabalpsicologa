<!DOCTYPE html>
<html lang="es">
@include('layouts.web.header')

<body>

    @include('layouts.web.preloader')

    @include('layouts.web.navbar')

    <!-- Start Page Banner Area -->
    <div class="page-banner-with-full-image item-bg3">
        <div class="container">
            <div class="page-banner-content-two">
                <h2>Blog (Full Width)</h2>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Blog (Full Width)</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->

    <!-- Start Blog Area -->
    @if($popularPosts)
    <section class="blog-area pt-100 pb-100">
        <div class="container-fluid">
            <div class="row">

                @foreach($popularPosts as $post)
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-item">
                        <div class="blog-image">
                            <a href="{{route('view', $post)}}"><img src="{{$post->getThumbnail()}}" alt="{{$post->title}}"></a>

                            <div class="tag">{{$post->getFormattedDatePost()[1]}} <span>{{$post->getFormattedDatePost()[0]}}</span></div>
                        </div>

                        <div class="blog-content">
                            <div class="meta">
                                <p>
                                    <i class="flaticon-user"></i>
                                    By <a>{{$post->user->name}}</a>
                                </p>
                            </div>

                            <h3>
                                <a href="{{route('view', $post)}}">{{$post->title}}</a>
                            </h3>
                            <div class="blog-btn">
                                <a href="{{route('view', $post)}}" class="default-btn">Read More <i class="flaticon-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                @if( count($popularPosts) > 9 )
                <div class="col-lg-12 col-md-12">
                    <div class="pagination-area">
                        <a href="#" class="prev page-numbers"><i class='bx bx-chevrons-left'></i></a>
                        <span class="page-numbers current" aria-current="page">1</span>
                        <a href="#" class="page-numbers">2</a>
                        <a href="#" class="page-numbers">3</a>
                        <a href="#" class="page-numbers">4</a>
                        <a href="#" class="next page-numbers"><i class='bx bx-chevrons-right'></i></a>
                    </div>
                </div>
                @endif

            </div>
        </div>
    </section>
    @endif
    <!-- End Blog Area -->

    <!-- Start Subscribe Area -->
    <div class="subscribe-area bg-top pt-100">
        <div class="container">
            <div class="subscribe-inner-box">
                <div class="subscribe-content">
                    <h2>Subscribe Our Newsletter</h2>
                    <p>Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat sed diam voluptua.</p>

                    <form class="newsletter-form" data-bs-toggle="validator" novalidate="true">
                        <div class="row">
                            <div class="col-lg-8 col-md-6">
                                <input type="email" class="input-newsletter" placeholder="Enter your email" name="EMAIL" required="" autocomplete="off">
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <button type="submit" class="disabled" style="pointer-events: all; cursor: pointer;">Subscribe Now <i class="flaticon-paper-plane"></i></button>
                                <div id="validator-newsletter" class="form-result"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Subscribe Area -->

    <!-- Start Footer Area -->
    <footer class="footer-area bg-top pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <div class="widget-logo">
                            <a href="index.html"><img src="assets/images/logo-2.png" alt="image"></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eir mod tempor invidunt ut labore et.</p>

                        <div class="widget-share">
                            <a href="#" target="_blank">
                                <i class="bx bxl-facebook"></i>
                            </a>
                            <a href="#" target="_blank">
                                <i class="bx bxl-twitter"></i>
                            </a>
                            <a href="#" target="_blank">
                                <i class="bx bxl-instagram"></i>
                            </a>
                            <a href="#" target="_blank">
                                <i class="bx bxl-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Quick Links</h3>

                        <ul class="quick-links">
                            <li>
                                <a href="index.html"><i class="bx bxs-right-arrow"></i> Home</a>
                            </li>
                            <li>
                                <a href="about.html"><i class="bx bxs-right-arrow"></i> About</a>
                            </li>
                            <li>
                                <a href="#"><i class="bx bxs-right-arrow"></i> Programs</a>
                            </li>
                            <li>
                                <a href="services.html"><i class="bx bxs-right-arrow"></i> Services</a>
                            </li>
                            <li>
                                <a href="blog-3.html"><i class="bx bxs-right-arrow"></i> Blog</a>
                            </li>
                            <li>
                                <a href="contact.html"><i class="bx bxs-right-arrow"></i> Contacts</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Explore</h3>

                        <ul class="quick-links">
                            <li>
                                <a href="about.html"><i class="bx bxs-right-arrow"></i> About Us</a>
                            </li>
                            <li>
                                <a href="success-story.html"><i class="bx bxs-right-arrow"></i> Success Story</a>
                            </li>
                            <li>
                                <a href="membership-levels.html"><i class="bx bxs-right-arrow"></i> Membership</a>
                            </li>
                            <li>
                                <a href="purchase-guide.html"><i class="bx bxs-right-arrow"></i> Purchase Guide</a>
                            </li>
                            <li>
                                <a href="privacy-policy.html"><i class="bx bxs-right-arrow"></i> Privacy Policy</a>
                            </li>
                            <li>
                                <a href="terms-of-service.html"><i class="bx bxs-right-arrow"></i> Terms Of Services</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Contact Us</h3>

                        <ul class="footer-contact-info">
                            <li>
                                <i class="flaticon-phone-call"></i>
                                <span>Phone No:</span>
                                <a href="tel:9885394203">+988 5394 203</a>
                            </li>
                            <li>
                                <i class="flaticon-mail"></i>
                                <span>Email Address:</span>
                                <a href="mailto:hello@psylo.com">hello@psylo.com</a>
                            </li>
                            <li>
                                <i class="flaticon-placeholder"></i>
                                <span>Location:</span>
                                3 Edgar Buildings, George Street, England, BA1 2FJ.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Area -->

    <!-- Start Copy Right Area -->
    <div class="copyright-area">
        <div class="container">
            <div class="copyright-area-content">
                <p>
                    Copyright @<script>
                        document.write(new Date().getFullYear())
                    </script>2024 Psylo. All rights reserved By
                    <a href="https://envytheme.com/" target="_blank">EnvyTheme</a>
                </p>
            </div>
        </div>
    </div>
    <!-- End Copy Right Area -->

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