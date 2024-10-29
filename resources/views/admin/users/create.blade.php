
@extends('layouts.app')

@section('content')
    <h1>Создание пользователя</h1>

    <form action="{{ route('admin.users.store') }}" method="POST">
        @csrf
        <div>
            <label>Имя:</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label>Пароль:</label>
            <input type="password" name="password" required>
        </div>
        <div>
            <label>Подтвердить пароль:</label>
            <input type="password" name="password_confirmation" required>
        </div>
        <div>
            <label>Роль:</label>
            <select name="role" required>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
        </div>
        <button type="submit">Сохранить пользователя</button>
    </form>
@endsection
