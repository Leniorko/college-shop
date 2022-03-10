<x-layout.master>
    <x-navbar />
    <div class="register">
        <h1 class="register__header">Регистрация</h1>

        @if(session('register_error'))
        error during register
        @endif
        {{$errors}}

        <form action="{{route('register')}}" method="POST" class="register__form">
            @csrf
        <input type="text" placeholder="Имя*" name="name" value="{{old('name')}}" id="name" class="form__keyboard-input" required>
        <input type="text" placeholder="Фамилия*" name="surname" value="{{old('surname')}}" id="surname" class="form__keyboard-input" required>
        <input type="text" placeholder="Отчество" name="patronymic" value="{{old('patronymic')}}" id="patronymic" class="form__keyboard-input">
        <input type="text" placeholder="Логин*" name="login" value="{{old('login')}}" id="login" class="form__keyboard-input" required>
        <input type="email" placeholder="Почта*" name="email" value="{{old('email')}}" id="email" class="form__keyboard-input" required>
        <input type="password" placeholder="Пароль*" name="password" value="{{old('password')}}" id="password" class="form__keyboard-input" required>
        <input type="password" placeholder="Подтверждение пароля*" name="password_repeat" value="{{old('password_repeat')}}" id="password_repeat" class="form__keyboard-input" required>
        <label>
            <input type="checkbox" value="1" name="rules" id="" required>
            Согласие с правилами
        </label>
        <button type="submit" class="button__primary">Войти</button>
        </form>
    </div>
</x-layout.master>
