@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Изменить продукт</h1>

        <form action="{{ route('admin.products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label>Название:</label>
                <input type="text" name="name" value="{{ $product->name }}" required>
            </div>
            <div>
                <label>Описание:</label>
                <textarea name="description" required>{{ $product->description }}</textarea>
            </div>
            <div>
                <label>Цена:</label>
                <input type="number" name="price" value="{{ $product->price }}" step="0.01" required>
            </div>
            <button type="submit">Обновить</button>
        </form>
    </div>
@endsection

