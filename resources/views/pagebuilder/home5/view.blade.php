<!-- Start Features Area -->
<section class="features-area bg-ffffff pb-70">
    <div class="container">
        <div class="section-title">
            <h2>{!! pagesetting('heading') !!}</h2>
            <p>{!! pagesetting('description') !!}</p>
        </div>

        <div class="row justify-content-center">
            @if (!empty(pagesetting('options')))
                @foreach (pagesetting('options') as $tab)
                <div class="col-lg-4 col-md-6">
                    <div class="single-features">
                        <div class="features-title">
                            <i class="flaticon-balance"></i>
                            <h3><a href="services-details.html">{{ $tab['heading'] }}</a></h3>
                            <span>{{ $tab['subtitle'] }}</span>
                        </div>

                        <p>{{ $tab['paragraph'] }}</p>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
    </div>
</section>
<!-- End Features Area -->