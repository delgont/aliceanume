@if ($post->menu)
<div class="page-menu-items col-md-12 col-lg-12 alert alert-primary">
    @if (count($post->menu->menuitems))
        <h5 class="text-capitalize">{{ $post->menu->name }}</h5>
        @foreach ($post->menu->menuitems as $menuitem)
        <ul class="list-group list-group-flush text-capitalize">
            <a class="list-group-item list-group-item-action py-2" href="{{ url(($menuitem->menuable->slug) ?? '/') }}">{{ $menuitem->label }}</a>
        </ul>
        @endforeach
    @endif
</div>
@endif
