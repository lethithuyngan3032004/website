

    <div class="blogwp clearfix card border-0">
        <a class="image-blog card-img-top text-center position-relative d-flex align-items-center justify-content-center aspect-ratio"
            href="{{ $post->permalink }}" title="{{ $post->title }}"
            style="--width: 362; --height: 162">
            <img class="img-fluid m-auto object-contain mh-100 w-auto position-absolute" loading="lazy"
                src="{{ $post->image }}" width="326" height="162" alt="{{ $post->title }}">
        </a>

        <div class="content_blog clearfix card-body px-0 py-2">
            <h3>
                <a class='link' href="" title="{{ $post->title }}">{{ $post->title }}</a>
            </h3>
            <div class="media">
                <div class="media-body">
                    <div class='mt-0'>{{ $post->author }}</div>
                    <small class='text-muted font-weight-light'>
                       
                    </small>
                </div>
            </div>
            <p class="justify">
                <span class="art-summary">
                    {{ $post->summary }}
                </span>

                <a class="button_custome_35 link" href="" title="Đọc tiếp">Đọc tiếp</a>
            </p>
        </div>
    </div>

