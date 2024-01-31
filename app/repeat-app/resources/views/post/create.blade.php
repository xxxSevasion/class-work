@extends('layout.master')

@section('content')
    <div class="container">
        <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Название поста</label>
                <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                {{--                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>--}}
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Описание поста</label>
                <input type="text" name="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                {{--                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>--}}
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Изображение поста</label>
                <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                {{--                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>--}}
            </div>
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </form>
    </div>
@endsection
