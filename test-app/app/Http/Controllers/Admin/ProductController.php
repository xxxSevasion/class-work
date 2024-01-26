<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('tovar.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::where('is_active', 1)->get();
        return view('tovar.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'text' => 'required',
            'is_active' => 'required',
            'category_id' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,bmp,gif,svg|max:2048'
        ]);

        $input = $request->all();

        if($image = $request->file('image')) {
            $destionPath = 'images/products/';
            $profileImage = date('YmHis') . "." . $image->getClientOriginalExtension();
            $image->move($destionPath,$profileImage);
            $input['image'] = "$profileImage";
        }

        Product::create($input);

        return redirect()->route('tovar.index')->with('success', 'Ваш товар успешно добавлен!');
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
    public function edit(Product $product)
    {
        $categories = Category::where('is_active', 1)->get();
        return view('tovar.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'text' => 'required',
            'is_active' => 'required',
            'category_id' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,bmp,gif,svg|max:2048'
        ]);

        $input = $request->all();

        if($image = $request->file('image')) {
            $destionPath = 'images/products/';
            $profileImage = date('YmHis') . "." . $image->getClientOriginalExtension();
            $image->move($destionPath,$profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }

        $product->update($input);

        return redirect()->route('tovar.index')->with('success', 'Ваша запись успешно обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('tovar.index')->with('success', 'Ваш товар был удален');
    }
}
