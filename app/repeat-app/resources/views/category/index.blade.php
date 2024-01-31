@extends('layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <a href="{{ route('category.create') }}" class="btn btn-primary">Новая категория</a>
        </div>
        <div class="row">
            @if($message = Session::get('success'))
                <div class="alert alert-success">
                    {{ $message }}
                </div>
            @endif
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Название категории</th>
                    <th scope="col">Описание категории</th>
                    <th scope="col">Статус</th>
                    <th scope="col">Действие</th>
                </tr>
                </thead>
                <tbody>
                @forelse($categories as $category)
                    <tr>
                        <th scope="row">
                            {{ $category->id }}
                        </th>
                        <td>
                            {{ $category->name }}
                        </td>
                        <td>
                            {{ $category->text }}
                        </td>
                        <td>
                            @if ($category->is_active == 0)
                                <div class="alert alert-danger text-center">
                                    {{ __('Не активна') }}
                                </div>
                            @else
                                <div class="alert alert-success text-center">
                                    {{ __('Активна') }}
                                </div>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('category.edit', $category->id) }}" class="btn btn-success">Редактировать</a>
                            <form method="POST" action="{{ route('category.delete', $category->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Удалить</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    Данных нет
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
