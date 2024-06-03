@foreach($categories as $category)
<div class="item">
    <a href="{{ url('collections/'.$category->slug) }}" title="{{ $category->name }}"
        class="pos-relative d-flex align-items-center " style="aspect-ratio:120/ 120">
        <img class="img-fluid m-auto object-contain mh-100" loading="lazy"
            src="{{ asset('Giaodien/thumb/small/100/426/076/themes/917889/assets/'.$category->image) }}"
            width="120" height="120" alt="{{ $category->name }}">
    </a>
    <h3 class="mb-0">
        <a href="{{ url('collections/'.$category->slug) }}" title="{{ $category->name }}">
            {{ $category->name }}
        </a>
    </h3>
</div>
@endforeach
