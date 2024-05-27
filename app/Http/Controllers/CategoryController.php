<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryOfProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::all();
        return view('category.index')->with('categories', $category);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create')->with([
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

        Category::create([
            'name_uz' => $request->name_uz,
            'name_ru' => $request->name_ru,
            'name_en' => $request->name_en,
            'size' => $request->size,
            'theory' => $request->theory,
            'manufacturer' => $request->manufacturer,
            'unit' => $request->unit,
            'price' => $request->price,
            'photo' => $path ?? null,
        ]);

        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('category.show')->with([
            'categories' => $category,
        ]);
    }

    public function edit(Category $category)
    {
        return view('category.edit')->with(['categories' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        if ($request->hasFile('photo'))
        {
            if (isset($about->photo))
            {
                Storage::delete($about->photo);
            }

            $name = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('post_photo', $name);
        }

        $category->update([
            'name_uz' => $request->name_uz,
            'name_ru' => $request->name_ru,
            'name_en' => $request->name_en,
            'size' => $request->size,
            'theory' => $request->theory,
            'manufacturer' => $request->manufacturer,
            'unit' => $request->unit,
            'price' => $request->price,
            'photo' => $path ?? $category->photo,
        ]);

        return redirect()->route('category.index', ['categories' => $category->id]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        if (isset($about->photo))
        {
            Storage::delete($about->photo);
        }
        return redirect()->route('category.index');
    }
}
