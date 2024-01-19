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
                            <img src="assets/images/page-banner/page-banner-3.jpg" alt="image">

                            <div class="image-shape">
                                <img src="assets/images/page-banner/shape.png" alt="image">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="page-banner-content">
                            <h2>Blog Details</h2>
                            <ul>
                                <li>
                                    <a href="{{ route('blog') }}">Home</a>
                                </li>
                                <li>Blog Details</li>
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

        <!-- Start Blog Details Area -->
        <div class="blog-details-area ptb-100">
            <div class="container">
                <div class="blog-details-desc">
                    <div class="article-content">
                        <div class="title-box">
                            <h2>{{$post->title}}</h2>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="flaticon-calendar"></i> <a href="#">{{$post->getFormattedDate()}}</a></li>
                                    <li><i class="flaticon-user"></i> <a href="#">{{$post->user->name}}</a></li>
                                    <li><i class="flaticon-chat-bubble"></i> <a href="#">{{ $post->human_read_time }}</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="article-image">
                            <img src="{{$post->getThumbnail()}}" alt="{{$post->title}}">
                        </div>

                        {!! $post->body !!}
                    </div>

                    <div class="article-footer">
                        <div class="article-tags">
                            <span>Tag:</span>

                            <a href="#">Love</a>
                            <a href="#">Relation</a>
                            <a href="#">Psychology</a>
                        </div>

                        <div class="article-share">
                            <span>Share:</span>

                            <a href="#" target="_blank">
                                <i class='bx bxl-facebook'></i>
                            </a>
                            <a href="#" target="_blank">
                                <i class='bx bxl-twitter'></i>
                            </a>
                            <a href="#" target="_blank">
                                <i class='bx bxl-instagram'></i>
                            </a>
                            <a href="#" target="_blank">
                                <i class='bx bxl-linkedin'></i>
                            </a>
                        </div>
                    </div>

                    <div class="psylo-post-navigation">

                        @if($prev)
                        <div class="prev-link-wrapper">
                            <div class="info-prev-link-wrapper">
                                <a href="{{route('view', $prev)}}" class="default-btn">Previous Post <i class="flaticon-left-arrow"></i></a>
                            </div>
                        </div>
                        @endif

                        @if($next)
                        <div class="next-link-wrapper">
                            <div class="info-next-link-wrapper">
                                <a href="{{route('view', $next)}}" class="default-btn">Next Post <i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                        @endif

                    </div>

                    <div class="comments-area">
                        <h3 class="comments-title">3 Comments:</h3>

                        <div class="comment-list">
                            <div class="comment">
                                <div class="comment-body">
                                    <footer class="comment-meta">
                                        <div class="comment-author vcard">
                                            <img src="assets/images/reviews/images-1.jpg" class="avatar" alt="image">
                                            <b class="fn">Richard Helly</b>
                                        </div>

                                        <div class="comment-metadata">
                                            <a href="#">12 Hours Ago</a>
                                        </div>
                                    </footer>

                                    <div class="comment-content">
                                        <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>
                                    </div>

                                    <div class="reply">
                                        <a href="#" class="comment-reply-link">Reply <i class="flaticon-back-arrow"></i></a>
                                    </div>
                                </div>

                                <div class="children">
                                    <div class="comment">
                                        <div class="comment-body">
                                            <footer class="comment-meta">
                                                <div class="comment-author vcard">
                                                    <img src="assets/images/reviews/images-2.jpg" class="avatar" alt="image">
                                                    <b class="fn">Alaska Ander</b>
                                                </div>
    
                                                <div class="comment-metadata">
                                                    <a href="#">12 Hours Ago</a>
                                                </div>
                                            </footer>
    
                                            <div class="comment-content">
                                                <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>
                                            </div>
    
                                            <div class="reply">
                                                <a href="#" class="comment-reply-link">Reply <i class="flaticon-back-arrow"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="comment">
                                    <div class="comment-body">
                                        <footer class="comment-meta">
                                            <div class="comment-author vcard">
                                                <img src="assets/images/reviews/images-3.jpg" class="avatar" alt="image">
                                                <b class="fn">Jane Ronan</b>
                                            </div>

                                            <div class="comment-metadata">
                                                <a href="#">12 Hours Ago</a>
                                            </div>
                                        </footer>

                                        <div class="comment-content">
                                            <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>
                                        </div>

                                        <div class="reply">
                                            <a href="#" class="comment-reply-link">Reply <i class="flaticon-back-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="comment-respond">
                            <h3 class="comment-reply-title">Leave A Comment</h3>

                            <form class="comment-form">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Email">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" placeholder="Your Comment"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="default-btn">Post A Comment <i class="flaticon-right-arrow"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Blog Details Area -->

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