
@extends('layouts.app')

@section('content')
    <h1>Изменить пользователя</h1>

    <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Имя:</label>
            <input type="text" name="name" value="{{ $user->name }}" required>
        </div>
        <div>
            <label>Email:</label>
            <input type="email" name="email" value="{{ $user->email }}" required>
        </div>
        <div>
            <label>Пароль(leave blank to keep current):</label>
            <input type="password" name="password">
        </div>
        <div>
            <label>Роль:</label>
            <select name="role" required>
                <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
            </select>
        </div>
        <button type="submit">Обновить</button>
    </form>
@endsection
