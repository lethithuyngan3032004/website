@foreach ($brands as $brand)
<div class="item">
    <a href="collections/all" class="brand-item pos-relative d-flex align-items-center aspect-ratio"
        title="{{ $brand->title }}">
        <style>
            /* CSS cho hình ảnh */
            .brand-item img {
                width: 176px; /* Chiều rộng cố định */
                height: 99px; /* Chiều cao cố định */
            }
        </style>
        <img loading="lazy" class="img-fluid m-auto object-contain mh-100 w-auto"
            src="{{ $brand->image }}"
            alt="{{ $brand->title }}">
    </a>
</div>
@endforeach
