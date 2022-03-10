<x-layout.master>
    <x-navbar />
    <div class="login">
        <h1 class="login__header">Вход</h1>
        <form action="{{route('login')}}" method="POST" class="login__form">
            @csrf
        <input type="text" name="login" id="login" class="login__login" required>
        <input type="password" name="password" id="password" class="login__password" required>
        <button type="submit">Войти</button>
        </form>
    </div>
</x-layout.master>
