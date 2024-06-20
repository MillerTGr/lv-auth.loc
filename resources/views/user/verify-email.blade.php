@extends('layouts.main')

@section('title', 'Регистрация')

@section('content')
    <div class="alert alert-info" role="alert">
        Спасибо за регистрацию! Ссылка для подтверждения аккаунта была отправлена на email
    </div>
    <div>
        Не получили ссылку?
        <form method="post" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit" class="btn btn-link ps-0">Отправить ещё раз</button>
        </form>
    </div>

@endsection
