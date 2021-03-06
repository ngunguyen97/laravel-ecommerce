<header>
    <div class="top-nav container">
        <div class="top-nav-left">
            <div class="logo"><a href="/">Laravel Ecommerce</a></div>
                @if (! request()->is('checkout'))
                    {{ menu('main-menu', 'partials.menus.main-menu') }}
                @endif
        </div>
        <div class="top-nav-right">
            @if (! request()->is('checkout'))
                @include('partials.menus.main-right')
            @endif
        </div>
    </div> <!-- end top-nav -->
</header>
