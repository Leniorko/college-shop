<x-layout.master>
    <x-navbar />
    <div class="login">
        <h1 class="login__header">Вход</h1>

        @if(session('login_error'))
        error during login
        @endif

        <form action="{{route('login')}}" method="POST" class="login__form">
            @csrf
        <input type="text" name="login" value="{{old('login')}}" placeholder="Логин" id="login" class="form__keyboard-input" required>
        <input type="password" name="password" value="{{old('password')}}" placeholder="Пароль" id="password" class="form__keyboard-input" required>
        <button type="submit" class="button__primary">Войти</button>
        </form>
    </div>
</x-layout.master>
