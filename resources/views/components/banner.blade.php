<div id="homeCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
    <div class="carousel-inner">
        @foreach ($banners as $index => $banner)
            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                <a href="##" title="{{ $banner->title }}">
                    <picture>
                        <source media="(max-width: 500px)"
                                srcset="{{$banner->image}}">
                        <img class="img-fluid mx-auto d-block w-100" loading="lazy"
                             src=" {{$banner->image}}"
                             alt="{{ $banner->title }}" style="height: calc(100% - 1/8 * 422px);">
                    </picture>
                </a>
            </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#homeCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#homeCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
