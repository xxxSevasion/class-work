@extends('layout.master')

@section('content')
    <div class="container">
        <form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Название категории</label>
                <input type="text" name="name" value="{{ $category->name }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                {{--                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>--}}
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Описание категории</label>
                <textarea name="text" id="" cols="30" rows="10" class="form-control">{{ $category->text }}</textarea>
                {{--                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>--}}
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Статус</label>
                </div>
                <select name="is_active" class="custom-select" id="inputGroupSelect01">
                    <option value="0">Не активен</option>
                    <option value="1">Активен</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </form>
    </div>
@endsection
