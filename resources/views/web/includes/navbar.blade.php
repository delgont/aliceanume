<div class="container-fluid px-0 wow fadeIn fixed-top navbar-container" data-wow-delay="0.1s">
    <!-- Top Bar -->
    @include('web.includes.topbar')

    <nav class="navbar navbar-expand-lg py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="text-primary m-0 brand-text d-none">AAMSNM</h1>
            <img src="{{ asset('img/aamsnm_logo.png') }}" alt="Alice Anume Logo"  class="brand-img" style="" />
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon text-white"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto p-4 p-lg-0">
                @if ($navBarMenuItems)
                    @if (count($navBarMenuItems->menuItems))
                        @foreach ($navBarMenuItems->menuItems as $menuItem)
                            @if (count($menuItem->children) > 0)
                                <div class="nav-item dropdown text-capitalize">
                                    <a href="{{ url(($menuItem->menuable->slug) ?? '/') }}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ $menuItem->label }}</a>
                                    <div class="dropdown-menu m-0 py-3">
                                        @foreach ($menuItem->children as $childItem)
                                            <a class="dropdown-item font-weight-noramal py-1" href="{{ url(($childItem->menuable->slug) ?? '/') }}">{{ $childItem->label }}</a>
                                        @endforeach
                                    </div>
                                </div>
                            @else
                                <a href="{{ url(($menuItem->menuable->slug) ?? '/') }}" class="nav-item nav-link text-capitalize">{{ $menuItem->label }}</a>
                            @endif
                        @endforeach
                    @endif
                @endif
                <a href="{{ route('anume.web.contact') }}" class="nav-item nav-link text-capitalize">{{ 'Contact Us' }}</a>
            </div>
            <!--
            <div class="d-none d-lg-flex search-form d-none">
                <input class="form-control me-2 w-75" type="search" placeholder="Search Our Website" aria-label="Search">
                <button class="btn btn-outline-success" type="submit"><i class="fa fa-search"></i></button>
            </div>
            //-->
        </div>
    </nav>
</div>
