<x-layout.master>
    <div class="admin">
        <x-navbar />
        <div class="admin__main">
            <h2 class="admin__greetings">Приветствую, {{Auth::user()->name}} {{Auth::user()->patronymic ?? ''}} {{Auth::user()->surname}}</h2>
            <p class="admin__text">Вот список выших возможностей:</p>
            <div class="admin__button-list">
                <a href="{{route('admin.categories')}}" class="admin__button-link">Управление Категориями</a>
                <a href="{{route('admin.products')}}" class="admin__button-link">Управление Товарами</a>
                <a href="{{route('admin.orders')}}" class="admin__button-link">Управление Заказами</a>
            </div>
        </div>
    </div>
</x-layout.master>
