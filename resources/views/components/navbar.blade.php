<nav class="navbar">
    <img src="/img/logo.svg" alt="" class="navbar__logo">
    <div class="navbar__rest-menu">
        <a href="{{route('about')}}" class="navbar__menu-item  {{$isActive('about')}}">О нас</a>
        <a href="{{route('shop')}}" class="navbar__menu-item {{$isActive('shop')}}">Каталог</a>
        <a href="{{route('find')}}" class="navbar__menu-item {{$isActive('find')}}">Где нас найти?</a>
        <div class="navbar__vertical-line"></div>
        @if (Auth::check())
        <a href="{{route('profile')}}" class="navbar__menu-item {{$isActive('profile')}}">Профиль</a>
        @if(Auth::user()->is_admin)
        <a href="{{route('admin')}}" class="navbar__menu-item {{$isActive('admin')}}">Панель администратора</a>
        @endif
        <a href="{{route('logout')}}" class="navbar__menu-item {{$isActive('logout')}}">Выход</a>
        @else
        <a href="{{route('login')}}" class="navbar__menu-item  {{$isActive('login')}}">Вход</a>
        <a href="{{route('register')}}" class="navbar__menu-item  {{$isActive('register')}}">Регистрация</a>
        @endif
    </div>
</nav>
