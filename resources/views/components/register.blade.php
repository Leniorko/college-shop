<x-layout.master>
    <x-navbar />
    <div class="login">
        <h1 class="login__header">Регистрация</h1>

        @if(session('register_error'))
        error during register
        @endif
        {{$errors}}

        <form action="{{route('register')}}" method="POST" class="login__form">
            @csrf
        <input type="text" name="name" value="{{old('name')}}" id="name" class="login__login" required>
        <input type="text" name="surname" value="{{old('surname')}}" id="surname" class="login__login" required>
        <input type="text" name="patronymic" value="{{old('patronymic')}}" id="patronymic" class="login__login">
        <input type="text" name="login" value="{{old('login')}}" id="login" class="login__login" required>
        <input type="email" name="email" value="{{old('email')}}" id="email" class="login__login" required>
        <input type="password" name="password" value="{{old('password')}}" id="password" class="login__password" required>
        <input type="password" name="password_repeat" value="{{old('password_repeat')}}" id="password_repeat" class="login__password" required>
        <label>
            <input type="checkbox" value="true" name="rules" id="" required>
            Согласие с правилами
        </label>
        <button type="submit">Войти</button>
        </form>
    </div>
</x-layout.master>
