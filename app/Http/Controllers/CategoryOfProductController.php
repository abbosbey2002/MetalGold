<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryOfProduct;
use App\Models\Popular;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryOfProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category_of_product = CategoryOfProduct::all();
        return view('category_of_product.index')->with('products', $category_of_product);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category_of_product.create')->with([
            'products' => CategoryOfProduct::all(),
            'populars' => Popular::all(),
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('photo'))
        {
            $name = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('post_photo', $name);

        }
        CategoryOfProduct::create([
            'type_id' => $request->type_id,
            'category_id' => $request->category_id,
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'short_content_uz' => $request->short_content_uz,
            'short_content_ru' => $request->short_content_ru,
            'short_content_en' => $request->short_content_en,
            'name_uz' => $request->name_uz,
            'name_ru' => $request->name_ru,
            'name_en' => $request->name_en,
            'photo' => $path ?? null
        ]);

        return redirect()->route('category_of_product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(CategoryOfProduct $category_of_product)
    {
        return view('category_of_product.show')->with([
            'products' => $category_of_product,
        ]);
    }

    public function edit(CategoryOfProduct $category_of_product)
    {
        return view('category_of_product.edit')->with(['products' => $category_of_product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CategoryOfProduct $category_of_product)
    {
        if ($request->hasFile('photo'))
        {
            if (isset($category_of_product->photo))
            {
                Storage::delete($category_of_product->photo);
            }

            $name = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('post_photo', $name);
        }

        $category_of_product->update([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'short_content_uz' => $request->short_content_uz,
            'short_content_ru' => $request->short_content_ru,
            'short_content_en' => $request->short_content_en,
            'name_uz' => $request->name_uz,
            'name_ru' => $request->name_ru,
            'name_en' => $request->name_en,
            'photo' => $path ?? $category_of_product->name
        ]);

        return redirect()->route('category_of_product.index', ['products' => $category_of_product->id]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CategoryOfProduct $category_of_product)
    {
        $category_of_product->delete();
        return redirect()->route('category_of_product.index');
    }
}
