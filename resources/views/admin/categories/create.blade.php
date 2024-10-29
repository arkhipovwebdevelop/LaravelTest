
@extends('layouts.app')

@section('content')
    <h1>Создать категорию</h1>

    <form action="{{ route('admin.categories.store') }}" method="POST">
        @csrf
        <div>
            <label>Название:</label>
            <input type="text" name="name" required>
        </div>
        <button type="submit">Сохранить</button>
    </form>
@endsection
