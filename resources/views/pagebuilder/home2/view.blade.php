<!-- Start About Area -->
<section class="about-area bg-ffffff ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-main-content">
                    <h3>Sobre mí</h3>

                    <div class="about-content-image">
                        
                        <img src="{{ asset('assets/images/about/about-2.jpg') }}" alt="image">

                        <h4 class="sub-title">{{ pagesetting('heading') }}</h4>

                    </div>

                    <p>{!! pagesetting('paragraph1') !!}</p>
                    <p>{!! pagesetting('paragraph2') !!}</p>

                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="about-information">
                                <i class="flaticon-trophy"></i>
                                <h5>{{ pagesetting('experience') }}</h5>
                                <span>Experiencia</span>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="about-information">
                                <i class="flaticon-customer"></i>
                                <h5>{{ pagesetting('clients') }}</h5>
                                <span>Clientes</span>
                            </div>
                        </div>
                    </div>

                    <div class="about-btn">
                        <a href="/about" class="default-btn">Conoce más <i class="flaticon-user"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-main-image">
                    @if ( !empty(pagesetting('home2_image')) )
                        <img src="{{ pagesetting('home2_image')[0]['thumbnail'] }}" alt="{{ __('Image') }}" />
                    @else
                        <img src="{{ asset('assets/images/about/about-1.jpg') }}" alt="image">
                    @endif

                    <div class="about-shape about-wrap">
                        <div class="shape-1">
                            <img src="{{ asset('assets/images/about/shape-1.png') }}" alt="image">
                        </div>

                        <div class="shape-2">
                            <img src="{{ asset('assets/images/about/shape-2.png') }}" alt="image">
                        </div>

                        <div class="shape-3">
                            <img src="{{ asset('assets/images/about/shape-3.png') }}" alt="image">
                        </div>

                        <div class="shape-4">
                            <img src="{{ asset('assets/images/about/shape-4.png') }}" alt="image">
                        </div>

                        <div class="shape-5">
                            <img src="{{ asset('assets/images/about/shape-5.png') }}" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->