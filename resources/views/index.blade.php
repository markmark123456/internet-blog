@extends('layouts.app')

@section('title', 'Главная')

@section('content')
    <h2>Главная страница</h2>

    {{-- Кнопки для авторизованного пользователя --}}
    @auth
        <a href="{{ route('articles.create') }}" class="btn btn-success mb-3">Добавить статью</a>
        <form action="{{ route('logout') }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-danger mb-3">Выйти</button>
        </form>
    @endauth

    {{-- Кнопки для гостя --}}
    @guest
        <a href="{{ route('login.show') }}" class="btn btn-primary mb-3">Войти</a>
        <a href="{{ route('register.show') }}" class="btn btn-secondary mb-3">Регистрация</a>
    @endguest

    <hr>

    {{-- Включаем блок всех статей --}}
    @include('articles._all_articles', ['articles' => $articles])
@endsection
