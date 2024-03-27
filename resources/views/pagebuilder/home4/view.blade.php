<!-- Start Pricing Area -->
<section class="pricing-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>{!! pagesetting('heading') !!}</h2>
            <p>{!! pagesetting('description') !!}</p>
        </div>

        <div class="row justify-content-center">
        @if (!empty(pagesetting('options')))
            @foreach (pagesetting('options') as $tab)
                <div class="col-lg-4 col-md-6">
                    <div class="single-pricing-table">
                        <div class="pricing-header">
                            <i class="flaticon-user-1"></i>
                            <h3>{{ $tab['title'] }}</h3>
                            <span>{{ $tab['description'] }}</span>

                            <div class="price">{{ $tab['price'] }}</div>
                        </div>

                        <ul class="pricing-features">
                            @if ( !empty($tab['list1']) )
                                <li><i class="flaticon-check"></i>{{$tab['list1']}}</li>
                            @endif
                            @if ( !empty($tab['list2']) )
                                <li><i class="flaticon-check"></i>{{$tab['list2']}}</li>
                            @endif
                            @if ( !empty($tab['list3']) )
                                <li><i class="flaticon-check"></i>{{$tab['list3']}}</li>
                            @endif
                            @if ( !empty($tab['list4']) )
                                <li><i class="flaticon-check"></i>{{$tab['list4']}}</li>
                            @endif
                            @if ( !empty($tab['list5']) )
                                <li><i class="flaticon-check"></i>{{$tab['list5']}}</li>
                            @endif
                        </ul>

                    </div>
                </div>
            @endforeach
        @endif
        </div>
    </div>

    <div class="pricing-main-shape">
        <img src="{{ asset('assets/images/pricing-shape.png') }}" alt="image">
    </div>
</section>
<!-- End Pricing Area -->