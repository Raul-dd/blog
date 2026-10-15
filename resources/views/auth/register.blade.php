@extends('layouts.base')

@section('styles')
    <link href="{{ asset('css/login/css/login.css') }}" rel="stylesheet">
@endsection

@section('title', 'Crear cuenta')

@section('content')

    <form method="POST"
          class="form"
          action="{{ route('register') }}"
          novalidate>

        @csrf

        <h2>Crear cuenta</h2>

        <div class="content-login">

            <!-- Nombre completo -->
            <div class="input-content">

                <input
                    type="text"
                    name="full_name"
                    placeholder="Nombre completo"
                    value="{{ old('full_name') }}"
                    autofocus
                >

                @error('full_name')
                    <span class="alert-red">
                        <span>* {{ $message }}</span>
                    </span>
                @enderror

            </div>

            <!-- Correo -->
            <div class="input-content">

                <input
                    type="text"
                    name="email"
                    placeholder="Correo electrónico"
                    value="{{ old('email') }}"
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

            </div>

            <!-- Confirmar contraseña -->
            <div class="input-content">

                <input
                    type="password"
                    name="password_confirmation"
                    placeholder="Confirmar contraseña"
                >

            </div>

        </div>

        <input
            type="submit"
            value="Registrarse"
            class="button"
        >

        <p>
            ¿Ya tienes una cuenta?

            <a href="{{ route('login') }}" class="link">
                Iniciar sesión
            </a>
        </p>

    </form>

@endsection
