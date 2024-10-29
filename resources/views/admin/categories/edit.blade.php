@extends('layouts.app')
@section('content')
    <h1>Изменить категорию</h1>

    <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Название:</label>
            <input type="text" name="name" value="{{ $category->name }}" required>
        </div>
        <button type="submit">Обновить</button>
    </form>
@endsection
