@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Добавить новый продукт</h1>

        <form action="{{ route('admin.products.store') }}" method="POST">
            @csrf
            <div>
                <label>Название:</label>
                <input type="text" name="name" required>
            </div>
            <div>
                <label>Описание:</label>
                <textarea name="description" required></textarea>
            </div>
            <div>
                <label>Цена:</label>
                <input type="number" name="price" step="0.01" required>
            </div>
            <div>
                <label>Категория:</label>
                <select name="category_id" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit">Сохранить</button>
        </form>

    </div>
@endsection
