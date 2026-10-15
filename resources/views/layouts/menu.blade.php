<header class="header">
    <div class="menu">

        {{-- LOGO --}}
        <div class="logo">
            <a href="{{ route('dashboard.index') }}">
                <img src="{{ asset('img/logo.png') }}" alt="Logo">
            </a>
        </div>


        {{-- USUARIO NO AUTENTICADO --}}
        @guest

            <ul class="flex items-center gap-4">
                <li class="me-2">
                    <a href="{{ route('login') }}" class="login">
                        Acceder
                    </a>
                </li>

                <li>
                    <a href="{{ route('register') }}" class="create">
                        Crear cuenta
                    </a>
                </li>
            </ul>

        @else

            {{-- USUARIO AUTENTICADO --}}
            <div
                x-data="{ open: false }"
                class="relative"
            >

                {{-- BOTÓN DEL PERFIL --}}
                <button
                    type="button"
                    @click="open = !open"
                    @click.outside="open = false"
                    class="flex items-center gap-2 border-0 bg-transparent cursor-pointer"
                >

                    {{-- FOTO --}}
                    <img
                        src="{{ Auth::user()->profile?->photo
                            ? asset('storage/' . Auth::user()->profile->photo)
                            : asset('img/user-default.png') }}"
                        alt="Foto de perfil"
                        class="img-profile"
                    >

                    {{-- NOMBRE --}}
                    <span class="name-user">
                        {{ Auth::user()->full_name }}
                    </span>

                    {{-- FLECHA --}}
                    <svg
                        class="w-4 h-4"
                        :class="{ 'rotate-180': open }"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M19 9l-7 7-7-7"
                        />
                    </svg>

                </button>


                {{-- MENÚ --}}
                <div
                    x-show="open"
                    x-transition
                    class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg z-50"
                    style="display: none;"
                >

                    {{-- PERFIL --}}
                    <a
                        href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                    >
                        Perfil
                    </a>


                    {{-- ADMIN --}}
                    <a
                        href="{{route('admin.index')}}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                    >
                        Ir al admin
                    </a>


                    {{-- SEPARADOR --}}
                    <div class="border-t border-gray-200 my-1"></div>


                    {{-- CERRAR SESIÓN --}}
                    <form
                        id="logout-form"
                        action="{{ route('logout') }}"
                        method="POST"
                    >
                        @csrf

                        <button
                            type="submit"
                            class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                        >
                            Salir
                        </button>
                    </form>

                </div>

            </div>

        @endguest

    </div>
</header>
