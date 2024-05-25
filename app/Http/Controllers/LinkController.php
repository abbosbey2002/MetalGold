<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $link = Link::all();
        return view('link.index')->with('links', $link);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('link.create')->with([
            'links' => Link::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Link::create([
            'link' => $request->link,
            'telegram' => $request->telegram,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'youtube' => $request->youtube,
        ]);

        return redirect()->route('link.index');
    }

    /**
     * Display the specified resource.
     */

    public function edit(Link $link)
    {
        return view('link.edit')->with(['links' => $link]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Link $link)
    {

        $link->update([
            'link' => $request->link,
            'telegram' => $request->telegram,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'youtube' => $request->youtube,
        ]);

        return redirect()->route('link.index', ['links' => $link->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Link $link)
    {
        $link->delete();
        return redirect()->route('link.index');
    }
}
