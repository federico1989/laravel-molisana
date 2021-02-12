<header class="flex-center">
    <div class="logo">
        <img src="{{ asset('/img/logo.png') }}" alt="">
    </div>
    <div class="links">
        <a href="{{ route('home') }}" class="{{ Route::currentRouteName() == 'home' ? 'active' : ''}}">Home </a>
        <a href="{{ route('prodotti') }}" class="{{ Route::currentRouteName() == 'prodotti' ? 'active' : ''}}">Prodotti</a>
        <a href="{{ route('contatti') }}" class="{{ Route::currentRouteName() == 'contatti' ? 'active' : ''}}">Contatti</a>
    </div>

</header>