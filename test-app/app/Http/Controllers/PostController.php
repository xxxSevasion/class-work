<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,bmp,gif,svg|max:2048'
        ]);
//        Здесь берем данные из всех текстовых полей
        $input = $request->all();

//        Здесь берем картинку из поля с name = image
        if($image = $request->file('image')) {
            $destionPath = 'images/';
            $profileImage = date('YmHis') . "." . $image->getClientOriginalExtension();
            $image->move($destionPath,$profileImage);
            $input['image'] = "$profileImage";
        }

        Post::create($input);

        return redirect()->route('post.index')->with('success', 'Ваш пост был добавлен');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'text' => 'required'
        ]);

        $input = $request->all();

        if($image = $request->file('image')) {
            $destionPath = 'images/';
            $profileImage = date('YmHis') . "." . $image->getClientOriginalExtension();
            $image->move($destionPath,$profileImage);
            $input['image'] = "$profileImage";
        } else {
           unset($input['image']);
        }

        $post->update($input);

        return redirect()->route('post.index')->with('success', 'Ваша запись успешно обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index')->with('success', 'Ваша запись была удалена');
    }
}
