<header class="banner">
    <div class="container-fluid hide-if-sticky">
        <div class="row">
            <div class="col">
                <p class="banner__helper">Hae kirjoituksia satokauden mukaan:</p>
            </div>
        </div>
    </div>
    <nav class="nav-primary">
        @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
    </nav>
</header>
@include('partials.page-header')