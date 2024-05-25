<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $home = Home::all();
        return view('home.index')->with('homes', $home);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home.create')->with([
            'homes' => Home::all(),
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

        Home::create([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'short_content_uz' => $request->short_content_uz,
            'short_content_ru' => $request->short_content_ru,
            'short_content_en' => $request->short_content_en,
            'photo' => $path ?? null
        ]);

        return redirect()->route('home.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Home $home)
    {
        return view('home.show')->with([
            'homes' => $home,
        ]);
    }

    public function edit(Home $home)
    {
        return view('home.edit')->with(['homes' => $home]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Home $home)
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

        $home->update([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'short_content_uz' => $request->short_content_uz,
            'short_content_ru' => $request->short_content_ru,
            'short_content_en' => $request->short_content_en,
            'photo' => $path ?? null
        ]);

        return redirect()->route('home.index', ['homes' => $home->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home $home)
    {
        $home->delete();
        return redirect()->route('home.index');
    }
}
