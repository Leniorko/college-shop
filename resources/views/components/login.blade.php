<x-layout.master>
    <x-navbar />
    <div class="login">
        <h1 class="login__header">Вход</h1>

        @if(session('login_error'))
        error during login
        @endif

        <form action="{{route('login')}}" method="POST" class="login__form">
            @csrf
        <input type="text" name="login" value="{{old('login')}}" id="login" class="login__login" required>
        <input type="password" name="password" value="{{old('password')}}" id="password" class="login__password" required>
        <button type="submit">Войти</button>
        </form>
    </div>
</x-layout.master>
