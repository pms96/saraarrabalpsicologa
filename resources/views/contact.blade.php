<!DOCTYPE html>
<html lang="es">
@include('layouts.web.header')

<body>

    @include('layouts.web.preloader')

    @include('layouts.web.navbar')

    <!-- Start Page Banner Area -->
    <div class="page-banner-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="page-banner-image">
                        <img src="assets/images/page-banner/page-banner-1.jpg" alt="image">

                        <div class="image-shape">
                            <img src="assets/images/page-banner/shape.png" alt="image">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="page-banner-content">
                        <h2>Contact</h2>
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-banner-shape">
            <img src="assets/images/page-banner/banner-shape-1.png" alt="image">
        </div>
    </div>
    <!-- End Page Banner Area -->

    <!-- Start Contact Info Area -->
    <section class="contact-info-area pt-100 pb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact-info-box">
                        <div class="icon">
                            <i class="flaticon-phone-call"></i>
                            <h3>Phone Number</h3>
                        </div>

                        <p><i class="flaticon-check"></i> <a href="tel:009832436231">+00 983 2436 231</a></p>
                        <p><i class="flaticon-check"></i> <a href="tel:009832436232">+00 983 2436 232</a></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact-info-box">
                        <div class="icon">
                            <i class="flaticon-mail"></i>
                            <h3>Email Address</h3>
                        </div>

                        <p><i class="flaticon-check"></i> <a href="mailto:hello@psylo.com">hello@psylo.com</a></p>
                        <p><i class="flaticon-check"></i> <a href="mailto:support@psylo.com">support@psylo.com</a></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact-info-box">
                        <div class="icon">
                            <i class="flaticon-placeholder"></i>
                            <h3>Address</h3>
                        </div>

                        <p><i class="flaticon-check"></i> 175 5th Ave Premium Area, New York, NY 10010, United States</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Info Area -->

    <!-- Start Contact Area -->
    <section class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-form">
                        <h3>Get In <span>Touch</span></h3>

                        <form id="contactForm" novalidate="true">
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="form-control" required="" data-error="Please enter your name" placeholder="Name">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" required="" data-error="Please enter your email" placeholder="Email">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <input type="text" name="phone_number" id="phone_number" required="" data-error="Please enter your number" class="form-control" placeholder="Phone">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <input type="text" name="msg_subject" id="msg_subject" class="form-control" required="" data-error="Please enter your subject" placeholder="Subject">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <textarea name="message" class="form-control" id="message" cols="30" rows="5" required="" data-error="Write your message" placeholder="Your Message"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="accept">
                                <label class="form-check-label" for="accept">I Accept All <a href="terms-of-service.html">Terms &amp; Condition</a></label>
                            </div>

                            <button type="submit" class="default-btn disabled" style="pointer-events: all; cursor: pointer;">Send Message <i class="flaticon-pointer"></i></button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="contact-image"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->

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