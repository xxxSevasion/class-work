@extends('layout.master')

@section('content')
    <div class="container">
        <form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Название поста</label>
                <input type="text" name="title" value="{{ $post->title }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                {{--                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>--}}
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Описание поста</label>
                <input type="text" name="text" value="{{ $post->text }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                {{--                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>--}}
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Изображение поста</label>
                <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                {{--                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>--}}
            </div>
            <img width="250" height="170" src="/images/{{ $post->image }}" alt="">
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </form>
    </div>
@endsection
