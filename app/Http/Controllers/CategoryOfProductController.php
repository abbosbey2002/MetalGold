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
        $category_of_product = CategoryOfProduct::all()->sortDesc();
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
        if ($request->hasFile('photo')) {
            $name = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('post_photo', $name);
        }

        $category_ids = json_encode($request->category_id);

        CategoryOfProduct::create([
            'type_id' => $request->type_id,
            'category_id' => $category_ids,
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
        $categories = Category::all();
        $populars = Popular::all();
        return view('category_of_product.edit')->with(['products' => $category_of_product, 'categories' => $categories, 'populars' => $populars]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required|array'
        ]);

        $categoryOfProduct = CategoryOfProduct::findOrFail($id);

        if ($request->hasFile('photo')) {
            if ($categoryOfProduct->photo) {
                Storage::delete('post_photo/' . $categoryOfProduct->photo);
            }
            $name = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('post_photo', $name);
            $categoryOfProduct->photo = $path;
        }

        $category_ids = json_encode($request->category_id);

        $categoryOfProduct->update([
            'type_id' => $request->type_id,
            'category_id' => $category_ids, 
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'short_content_uz' => $request->short_content_uz,
            'short_content_ru' => $request->short_content_ru,
            'short_content_en' => $request->short_content_en,
            'name_uz' => $request->name_uz,
            'name_ru' => $request->name_ru,
            'name_en' => $request->name_en
        ]);

        return redirect()->route('category_of_product.index');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CategoryOfProduct $categoryOfProduct)
    {
        $categoryOfProduct->delete();
        if ($categoryOfProduct->photo) {
            Storage::delete('post_photo/' . $categoryOfProduct->photo);
        }
        return redirect()->route('category_of_product.index');
    }
}
