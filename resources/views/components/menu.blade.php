@if(isset($menu))
    <li>
        <div class="">
            <img class="img-fluid " src="{{ $menu->title }}" loading="lazy" width="32" height="32" alt="Chính sách đổi trả">
        </div>
        <a class="link" href="{{ $menu->title }}" title="{{ $menu->title }}">{{ $menu->name }}</a>
    </li>
@endif
