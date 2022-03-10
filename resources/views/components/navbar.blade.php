<nav class="navbar">
    <img src="" alt="" class="navbar__logo">
    <div class="navbar__rest-menu">
        <a href="{{route('about')}}" class="navbar__menu-item  {{$isActive('about')}}">О нас</a>
        <a href="{{route('shop')}}" class="navbar__menu-item {{$isActive('shop')}}">Каталог</a>
        <a href="{{route('find')}}" class="navbar__menu-item {{$isActive('find')}}">Где нас найти?</a>
        <div class="navbar__vertical-line"></div>
        @if (Auth::check())
        <a href="{{route('profile')}}" class="navbar__menu-item {{$isActive('profile')}}">Профиль</a>
        @else
        <a href="{{route('login')}}" class="navbar__menu-item  {{$isActive('login')}}">Вход</a>
        <a href="{{route('register')}}" class="navbar__menu-item  {{$isActive('register')}}">Регистрация</a>

        @endif
    </div>
</nav>
