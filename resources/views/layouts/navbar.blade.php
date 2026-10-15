<div class="category-container">
    <ul>
        <li class="nav-item {{ request()->routeIs('dashboard.index') ? 'active' : '' }}">
            <a href="{{ route('dashboard.index') }}">Todo</a></li>

        @foreach($navbar as $category)
             <li class="nav-item {!! (Request::path()) == 'category/'. $category->slug ? 'active' : '' !!" }">
                <a href="{{ route('categories.detail', $category->slug) }}">{{ $category->name }}</a>
            </li>
        @endforeach


        <li class="nav-item {{ request()->routeIs('dashboard.all') ? 'active' : '' }}">
            <a href="{{ route('dashboard.all') }}">Todas las categorias</a>
        </li>

    </ul>
</div>
