<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">

        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <a class="navbar-brand logo-text page-scroll" href="{{ route('web.home') }}">Delgont CMS</a>

        <!-- Image Logo -->
        <!--<a class="navbar-brand logo-image" href="{{ route('web.home') }}"><img src="img/logo.svg" alt="Delgont CMS"></a> -->
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                @if ($navBarMenuItems)
                    @if (count($navBarMenuItems->menuItems))
                    @foreach ($navBarMenuItems->menuItems as $menuItem)
                        @if ($menuItem->children && count($menuItem->children) > 0)
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-capitalize font-weight-bold" href="{{ url(($menuItem->menuable->slug) ?? '/') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                {{ $menuItem->label }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach ($menuItem->children as $childItem)
                                    <li><a class="dropdown-item text-capitalize" href="{{ url(($childItem->menuable->slug) ?? '/') }}">{{ $childItem->label }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link text-capitalize font-weight-bold" aria-current="page" href="{{ url(($menuItem->menuable->slug) ?? '/') }}">{{ $menuItem->label }}</a>
                        </li>
                        @endif
                    @endforeach
                    @endif
                @endif           
            </ul>
            <span class="nav-item">
                <a class="btn-outline-sm" href="{{ route('delgont.dashboard') }}">Dashboard</a>
            </span>
        </div>
    </div> <!-- end of container -->
</nav> <!-- end of navbar -->
<!-- end of navigation -->

