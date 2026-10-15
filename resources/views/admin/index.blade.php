@extends('adminlte::page')

@section('title', 'Panel de administracion')

@section('content_header')
    <h1>Bienvenidos al panel de administracion</h1>
@stop

@section('content')
    <p>!Hol! {{Auth::user()->full_name}} desde aqui podras administrar tus articulos, categorias y comentarios.</p>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi!"); </script>
@stop
