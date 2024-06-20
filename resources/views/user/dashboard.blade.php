@extends('layouts.main')

@section('title', 'Панель управления')

@section('content')
    <div class="container mt-4">
        <h1 class="h2">Список пользователей</h1>
        <table class="table table-striped table-bordered mt-4">
            <thead>
            <tr>
                <th>Имя</th>
                <th>Email</th>
                <th>Подтверждён?</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->email_verified_at ? 'Да' : 'Нет' }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
