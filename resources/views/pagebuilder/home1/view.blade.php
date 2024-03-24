<!-- Start Main Banner Area -->
<div class="main-banner-area">
    <div class="main-banner-item-box">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="main-banner-image">
                                @if ( !empty(pagesetting('home1_image')) )
                                    <img src="{{ pagesetting('home1_image')[0]['thumbnail'] }}" alt="{{ __('Image') }}" />
                                @else
                                    <img src="{{ asset('assets/images/main-banner/banner-1.jpg') }}" alt="{{ __('Image') }}" />
                                @endif
                                <div class="image-shape">
                                    <img src="{{ asset('assets/images/main-banner/shape.png') }}" alt="image">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="main-banner-content">
                                <h1>{{ pagesetting('heading') }}</h1>
                                <p>{!! pagesetting('paragraph') !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-banner-shape">
        <img src="{{ asset('assets/images/main-banner/banner-shape-1.png') }}" alt="image">
    </div>

    <div class="main-banner-shape-two">
        <img src="{{ asset('assets/images/main-banner/banner-shape-2.png') }}" alt="image">
    </div>
</div>
<!-- End Main Banner Area -->