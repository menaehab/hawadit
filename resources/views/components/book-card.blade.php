<div class="swiper-slide ">
    <div class="card mx-2 my-4 shadow-sm overflow-hidden" style="width: 18rem; height: 22rem;">
        <div style="height: 70%; overflow: hidden;">
            <img src="{{ $image ? $image : asset('images/book1.png') }}" class="card-img-top img-fluid"
                alt="{{ $title }}" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <div class="card-body text-center d-flex flex-column justify-content-between" style="height: 50%;">
            <div>
                <h5 class="card-title">{{ $title }}</h5>
                <div class="card-star-container">
                    @for ($i = 0; $i < 5; $i++)
                        @if ($i < 5 - $avgRating)
                            <i class="fa-solid gray-star fa-star"></i>
                        @else
                            <i class="fa-solid gold-star fa-star"></i>
                        @endif
                    @endfor
                </div>
                <p class="card-text text-muted" style="font-size: 0.9rem;">{{ Str::limit($description, 50) }}</p>
            </div>
            <a href="{{ $url }}" class="btn btn-primary btn-sm">{{ __('keywords.read_more') }}</a>
        </div>
    </div>

</div>
