@extends('layouts.app')

@section('title', 'Главная')

    @if(session()->has('success'))
            <p class="alert alert-success">{{ session()->get('success') }}</p>
    @endif
    @if(session()->has('warning'))
            <p class="alert alert-warning">{{ session()->get('warning') }}</p>
    @endif

@auth
    <p>Вы вошли как {{ Auth::user()->name }}</p>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Выйти</button>
    </form>

{{-- @if(Auth::user()->is_admin)
        <a href="{{ route('admin.index') }}">(админ)</a>
@endif --}}

@endauth

@guest
    <a href="{{ route('login') }}">Войти</a>
@endguest