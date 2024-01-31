@extends('layout.master')

@section('content')
    <div class="container">
        @if($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif
        <div class="row">
            <a href="{{ route('post.create') }}" class="btn btn-primary">{{ __('Новый пост') }}</a>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Название поста</th>
                    <th scope="col">Описание поста</th>
                    <th scope="col">Изображение</th>
                    <th scope="col">Действие</th>
                </tr>
                </thead>
                <tbody>
                @forelse($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->text }}</td>
                        <td>
                            <img width="150" height="150" src="/images/{{ $post->image }}" alt="">
                        </td>
                        <td>
                            <a href="{{ route('post.edit', $post->id) }}" class="btn btn-success">Редактировать</a>
                            <a href="" class="btn btn-warning">Подробнее</a>
                            <form method="POST" action="{{ route('post.delete', $post->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Удалить</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    {{ __('Данные не найдены') }}
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
