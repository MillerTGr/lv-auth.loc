@extends('layouts.main')

@section('title', 'Вход')

@section('content')
    <h1 class="h2">Вход</h1>

    <form action="{{ route('login.auth') }}" method="post">
        @csrf

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="email" placeholder="Email">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Пароль</label>
            <input name="password" type="password" class="form-control" id="password" placeholder="Пароль">
        </div>

        <div class="mb-3 form-check">
            <input name="remember" class="form-check-input" type="checkbox" id="remember">
            <label class="form-check-label" for="remember">
                запомнить меня
            </label>
        </div>

        <button type="submit" class="btn btn-primary">Войти</button>

    </form>
@endsection
