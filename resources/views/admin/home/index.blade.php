@extends('layouts.admin_layout')
@section('title')
    Главная страница
@endsection
@section('content')
<h1>Главная стнаица админ панели</h1>
<div class="btn btn-danger mt-5"><a href="{{ route('menuAdmin') }}">Кнопка в жопу</a></div>

@endsection
