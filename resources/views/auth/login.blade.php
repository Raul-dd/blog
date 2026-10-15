@extends('layouts.base')

@section('styles') <link href="{{ asset('css/login/css/login.css') }}" rel="stylesheet">
@endsection

@section('title', 'Iniciar sesión')

@section('content')

```
<form method="POST"
      class="form"
      action="{{ route('login') }}"
      novalidate>

    @csrf

    <h2>Iniciar sesión</h2>

    <div class="content-login">

        <!-- Correo -->
        <div class="input-content">

            <input
                type="text"
                name="email"
                placeholder="Correo electrónico"
                value="{{ old('email') }}"
                autofocus
            >

            @error('email')
                <span class="alert-red">
                    <span>* {{ $message }}</span>
                </span>
            @enderror

        </div>

        <!-- Contraseña -->
        <div class="input-content">

            <input
                type="password"
                name="password"
                placeholder="Contraseña"
            >

            @error('password')
                <span class="alert-red">
                    <span>* {{ $message }}</span>
                </span>
            @enderror

            <a href="{{ route('password.request') }}" class="link">
                Olvidé mi contraseña
            </a>

        </div>

    </div>

    <input
        type="submit"
        value="Iniciar sesión"
        class="button"
    >

    <p>
        ¿No tienes una cuenta?

        <a href="{{ route('register') }}" class="link">
            Crear cuenta
        </a>
    </p>

</form>
```

@endsection
