
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Админ панель</h1>
        <p>Добро пожаловать в админ-панель! Воспользуйтесь ссылками ниже для управления ресурсами.</p>

        <ul>
            <li><a href="{{ route('admin.products.index') }}">Управление продуктами</a></li>
            <li><a href="{{ route('admin.users.index') }}">Управление пользователями</a></li>
            <li><a href="{{ route('admin.categories.index') }}">Управление категориями</a></li>
        </ul>
    </div>
@endsection



