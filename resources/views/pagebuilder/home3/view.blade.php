<!-- Start Services Area -->
<div class="services-area ptb-100">
    <div class="container">
        <div class="section-title">
            <h2>Servicios</h2>
            <p>{!! pagesetting('paragraphTitle') !!}</p>
        </div>

        <div class="tab services-list-tab">
            <ul class="tabs">
            @if (!empty(pagesetting('options')))
                @foreach (pagesetting('options') as $tab)
                <li>
                    <a href="#">
                        <i class="flaticon-imagination"></i>
                        <span>{{ $tab['titleButton']}}</span>
                    </a>
                </li>
                @endforeach
            @endif
            </ul>

            <div class="tab_content">
            @if (!empty(pagesetting('options')))
                @foreach (pagesetting('options') as $tab)
                <div class="tabs_item">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="services-tab-image">
                                @if ( !empty(pagesetting('home3_image')) )
                                    <img src="{{ pagesetting('home3_image')[0]['thumbnail'] }}" alt="{{ __('Image') }}" />
                                @else
                                    <img src="{{ asset('assets/images/services/services-1.jpg') }}" alt="image">
                                @endif

                                <div class="services-tab-shape">
                                    <div class="shape-1">
                                        <img src="{{ asset('assets/images/services/shape-1.png') }}" alt="image">
                                    </div>
    
                                    <div class="shape-2">
                                        <img src="{{ asset('assets/images/services/shape-2.png') }}" alt="image">
                                    </div>
    
                                    <div class="shape-3">
                                        <img src="{{ asset('assets/images/services/shape-3.png') }}" alt="image">
                                    </div>
    
                                    <div class="shape-4">
                                        <img src="{{ asset('assets/images/services/shape-4.png') }}" alt="image">
                                    </div>

                                    <div class="circle-shape">
                                        <img src="{{ asset('assets/images/services/circle-shape.png') }}" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="services-tab-content">
                                <div class="services-content-image">
                                    <img src="{{ asset('assets/images/services/flower.jpg') }}" alt="image">
    
                                    <h4 class="sub-title">{{ $tab['heading'] }}</h4>
                                </div>
                                <p>{{ $tab['paragraph'] }}</p>

                                @if( !empty($tab['cite']) )
                                    <div class="services-quote">
                                        <i class="flaticon-close"></i>
                                        <p>{{ $tab['cite'] }}</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif    
            </div>
        </div>
    </div>
</div>
<!-- End Services Area -->